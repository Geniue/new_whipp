<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;



class ServiceController extends Controller
{


    public function service($slug)
    {
        // $service_area = ServiceLocationsModel::where('slug', $slug)->get()[0] ?? false;

        $heading = Str::replace('-', ' ', $slug);


        return view("app.main_service", compact('heading'));
    }
}
