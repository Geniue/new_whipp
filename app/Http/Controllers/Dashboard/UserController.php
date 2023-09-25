<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\User;
use App\Models\InvitedUsersModel;

//SERVICES
use App\Services\StripeService;

//MAILABLE
use App\Mail\InviteUserEmail;

class UserController extends Controller
{

    function __construct(StripeService $service)
    {
        $this->service = $service;
    }

    public function index()
    {

        $user = auth()->user();

        $users = User::where('role', 'user')->get();

        $inv_users = InvitedUsersModel::whereNull("user_id")->get();

        return view('dashboard.user.index', compact('user', 'users', 'inv_users'));
    }


    public function create(Request $request)
    {

        $user = auth()->user();

        return view('dashboard.user.create', compact('user'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            "email" => "required|email"
        ]);

        // dd($data);

        $customer = $this->service->createCustomer($data);

        $inv = InvitedUsersModel::create([
            "email" => $data['email'],
            'stripe_id' => $customer->id,
            'uniq_id' => uniqid(),
        ]);

        Mail::to($data['email'])->send(new InviteUserEmail($inv->uniq_id));

        return redirect()->route('user.list');

    }
}
