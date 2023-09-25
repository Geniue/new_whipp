<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


//MAILABLE
use App\Mail\ValidateEmailChange;
use App\Mail\ValidateNewEmail;

class ProfileController extends Controller
{
    use SendsPasswordResetEmails;

    public function index()
    {
        return view('user.app.profile');
    }



    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($request->user())
            ]
        ]);

        $user = $request->user();
        
        // If email is not changed, update other fields
        $user->name = $request->name;
        $user->save();

        // If email is changed, start the double verification process
        if ($request->email !== $user->email) {
            // Generate a token to verify the email change
            $token = Str::random(60);

            // Store the new email and the token in the session
            session([
                'new_email' => $request->email,
                'token' => $token
            ]);

            // Send an email to the old email address with the token
            Mail::to($user->email)->send(new ValidateEmailChange($token));

            return back()->with('info', 'A verification link has been sent to your old email address to confirm the change.');
        } else {

            return back()->with('success', 'Profile updated successfully!');
        }
    }

    public function validateOldEmail($token)
    {
        if (session('token') === $token) {
            // Send an email to the new email address with another token
            $newToken = Str::random(60);
            session(['token' => $newToken]);

            Mail::to(session('new_email'))->send(new ValidateNewEmail($newToken));

            return redirect()->route('user.profile')->with('info', 'A verification link has been sent to your new email address.');
        } else {
            return redirect()->route('user.profile')->with('error', 'Invalid token.');
        }
    }

    public function validateNewEmail($token)
    {
        if (session('token') === $token) {
            // Update the email in the database
            $user = auth()->user();
            $user->email = session('new_email');
            $user->save();

            return redirect()->route('user.profile')->with('success', 'Email updated successfully!');
        } else {
            return redirect()->route('user.profile')->with('error', 'Invalid token.');
        }
    }



    public function sendResetLinkEmailAuth(Request $request)
    {
        $request->merge(['email' => $request->user()->email]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            ['email' => $request->user()->email] // Use Authenticated User's Email
        );
        $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($request, $response)
                    : $this->sendResetLinkFailedResponse($request, $response);
        // Once successful...
        return back()->with('success_reset', 'Password reset link sent successfully!'); 
    }

}
