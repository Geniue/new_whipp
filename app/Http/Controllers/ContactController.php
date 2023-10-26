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
            'firstname.required' => 'Please provide your first name',
            'lastname.required' => 'Please provide your last name',
            'email.required' => 'Please provide your email',
            'email.email' => 'Please provide a valid email address',
            'phone.required' => 'Please provide your phone number',
            'phone.numeric' => 'Please make sure your number is correct',
            'phone.digits' => 'Please make sure your number is 10 digit number',
            'website.required' => 'Please provide your website',
            'company.required' => 'Please provide your company',
            'services.required' => 'You need to pick at least 1 service',
            'message_.required' => 'Please tell us more about your requirements',
            'wantemaillist.required' => 'Please tell us are you going join our email list or not!'
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
            'name.required' => 'Please provide your name',
            'email.required' => 'Please provide your email',
            'email.email' => 'Please provide a valid email address',
            'phone.required' => 'Please provide your phone number',
            'phone.numeric' => 'Please make sure your number is correct',
            'phone.digits' => 'Please make sure your number is 10 digit number',
            'message_.required' => 'Please tell us more about your requirements',
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
            'email' => 'required|email:rfc,dns'
        ], [
            'email.required' => 'Please provide your email',
            'email.email' => 'Please provide a valid email address'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }


        $view = view('app.emails.coupon', ['email' => $data['email']])->render();

        $email = new EmailsModel;
        $email->type = "Coupons And Seasonal Deals Request - whippdigital.com";
        $email->email = $view;
        $email->enc = uniqid();
        $email->save();

        $coup = new CouponModel;
        $coup->phone = $data['email'];
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
