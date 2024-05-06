<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


//SERVICES
use App\Services\StripeService;

//MODELS
use App\Models\InvitedUsersModel;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(StripeService $service)
    {
        $this->middleware('guest');
        $this->service = $service;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'state' => ['required', 'string', 'max:255'],
            'address' => ['string', 'max:255'],
            'city' => ['string', 'max:255'],
            'zip' => ['string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $customer = $this->service->createCustomer(['name' => $data['name'], 'email' => $data['email']]);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'state' => $data['state'],
            'address' => $data['address'],
            'city' => $data['city'],
            'zip' => $data['zip'],
            'password' => Hash::make($data['password']),
        ]);
    }


    public function register_current_view($slug)
    {
        $inv = InvitedUsersModel::where('uniq_id', $slug)->get()[0] ?? abort(404);

        $us_states = [
            "Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", 
            "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", 
            "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", 
            "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", 
            "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", 
            "New Hampshire", "New Jersey", "New Mexico", "New York", 
            "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", 
            "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", 
            "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", 
            "West Virginia", "Wisconsin", "Wyoming"
        ];


        return view('auth.register_invited_users', compact('inv', 'us_states'));
    }

    protected function register_current(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'state' => ['required', 'string', 'max:255'],
            'address' => ['string', 'max:255'],
            'city' => ['string', 'max:255'],
            'zip' => ['string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'uniqId' => ['required']
        ],[
            'password.min' => 'Please use a longer password.',
            'password.confirmed' => "Passwords don't match.",
            'email.unique' => 'You already registered using this email!',
            'state.required' => 'You need to provide your state.'
        ]);

        

        $inv = InvitedUsersModel::where('uniq_id', $data['uniqId'])->get()[0] ?? abort(404);




        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'state' => $data['state'],
            'address' => $data['address'],
            'city' => $data['city'],
            'zip' => $data['zip'],
            'password' => Hash::make($data['password']),
            'stripe_id' => $inv->stripe_id,
            'email_verified_at' => now()->format("Y-m-d H:i:s")
        ]);
        // dd($data['state']);

        foreach ($inv->invoices as $invoice) {
            $invoice->user_id = $user->id;
            $invoice->save();
        }

        $inv->user_id = $user->id;
        $inv->save();


        return redirect()->route('login')->with(["status" => "You are successfully registered!"]);
    }
}
