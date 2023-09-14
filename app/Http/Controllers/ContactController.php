<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;

use App\Models\EmailsModel;
use App\Models\CouponModel;

//RULES
use App\Rules\ZipCodeRange;

class ContactController extends Controller
{
    public function contact_us()
    {
        return view("app.contact");
    }

    public function submit_contact_us(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $validator = Validator::make($data, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|numeric|digits:10',
            'website' => 'required',
            'company' => 'required',
            'services' => 'required',
            'message_' => 'required',
            'wantemaillist' => 'required'
        ], [
            'services.required' => 'You need to pick at least 1 service',
        ]);

        // dd($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $view = view('app.emails.contact_us', [
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'], 'phone' => $data['phone'],
            'website' => $data['website'],
            'company' => $data['company'],
            'services' => $data['services'],
            'message_' => $data['message_'],
            'wantemaillist' => $data['wantemaillist']
        ])->render();


        // EMAIL ADMIN
        Mail::send('app.emails.contact_us', $data, function ($message) { //stuart.emmons@gmail.com  stuart.emmons@gmail.com dd121412@gmail.com
            $message->to('stuart.emmons@gmail.com', 'Whippdigital')
                ->cc(['support@whippdigital.com'])
                ->subject("Whippdigital Contact Information");
            $message->from("support@whippdigital.com", 'Whippdigital');
        });


        $email = new EmailsModel;
        $email->type = "Contact Message - Whippdigital.com";
        $email->email = $view;
        $email->enc = uniqid();
        $email->save();



        return redirect()->back()->with('message', 'We will contact you soon!');
    }


    public function letstalk_form(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|numeric|digits:10',
            'message_' => 'required'

        ], [
            'services.required' => 'You need to pick at least 1 service',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }


        $view = view(
            'app.emails.letstalk',
            [
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'user_specific_service' => $data['user_specific_service'],
                'message_' => $data['message_']
            ]
        )->render();

        // //EMAIL ADMIN
        Mail::send('app.emails.letstalk', $data, function ($message) { //stuart.emmons@gmail.com  stuart.emmons@gmail.com dd121412@gmail.com
            $message->to('stuart.emmons@gmail.com', 'Whippdigital')
                ->cc(['support@whippdigital.com'])
                ->subject("Whippdigital Contact Information");
            $message->from("support@whippdigital.com", 'Whippdigital');
        });


        $email = new EmailsModel;
        $email->type = "Lets Talk Request - Whippdigital.com";
        $email->email = $view;
        $email->enc = uniqid();
        $email->save();

        return redirect()->back()->with('message', 'We will contact you soon!');
    }



    public function sign_up(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'phone' => 'required|numeric|digits:10|unique:coupons'
        ], [
            'phone.required' => 'You need to provide your correct phone number for coupons And seasonal deals.',
            'phone.numeric' => 'You need to provide your correct phone number for coupons And seasonal deals.',
            'phone.digits' => 'You need to provide your correct phone number for coupons And seasonal deals.',
            'phone.unique' => 'You already signed up for coupons And seasonal deals for your next cleanings',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }


        $view = view('app.emails.coupon', ['phone' => $data['phone']])->render();

        $email = new EmailsModel;
        $email->type = "Coupons And Seasonal Deals Request - whippdigital.com";
        $email->email = $view;
        $email->enc = uniqid();
        $email->save();

        $coup = new CouponModel;
        $coup->phone = $data['phone'];
        $coup->email_id = $email->id;
        $coup->save();

        //EMAIL ADMIN
        Mail::send('app.emails.coupon', $data, function ($message) { //stuart.emmons@gmail.com  stuart.emmons@gmail.com dd121412@gmail.com
            $message->to('stuart.emmons@gmail.com', 'Whippdigital')
                ->cc(['support@whippdigital.com'])
                ->subject("Coupons And Seasonal Deals Request Whippdigital");
            $message->from("support@whippdigital.com", 'Whippdigital');
        });




        return redirect()->back()->with('message', 'You signed in for coupons and seasonal deals on your next services!');
    }
}
