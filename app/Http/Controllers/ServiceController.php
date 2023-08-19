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
    public function amazon_marketing()
    {
        return view("app.services.amazon_marketing");
    }
    public function amazon_seller_consulting()
    {
        return view("app.services.amazon_seller_consulting");
    }
    public function amazon_seo()
    {
        return view("app.services.amazon_seo");
    }
    public function ecommerce_optim()
    {
        return view("app.services.ecommerce_optim");
    }
    public function ecommerce_ppc_man()
    {
        return view("app.services.ecommerce_ppc_man");
    }
    public function ecommerce_seo()
    {
        return view("app.services.ecommerce_seo");
    }
    public function ecommerce_web_design()
    {
        return view("app.services.ecommerce_web_design");
    }
    public function ppc_marketing()
    {
        return view("app.services.ppc_marketing");
    }
    public function digital_marketing_strategy()
    {
        return view("app.services.digital_marketing_strategy");
    }
    public function local_seo()
    {
        return view("app.services.local_seo");
    }
    public function franchise_reputation_man()
    {
        return view("app.services.franchise_reputation_man");
    }
    public function franchise_seo()
    {
        return view("app.services.franchise_seo");
    }
    public function se_optimization()
    {
        return view("app.services.se_optimization");
    }
    public function search_analytics()
    {
        return view("app.services.search_analytics");
    }
    public function link_building_services()
    {
        return view("app.services.link_building_services");
    }
    public function shopify_seo()
    {
        return view("app.services.shopify_seo");
    }
    public function rev_assistant()
    {
        return view("app.services.rev_assistant");
    }
    public function vp_assistant()
    {
        return view("app.services.vp_assistant");
    }
    public function walmart_marketplace()
    {
        return view("app.services.walmart_marketplace");
    }
    public function social_media_advertising()
    {
        return view("app.services.social_media_advertising");
    }
    public function smb_management()
    {
        return view("app.services.smb_management");
    }
    public function social_media_management()
    {
        return view("app.services.social_media_management");
    }
    public function custom_web_design()
    {
        return view("app.services.custom_web_design");
    }
    public function website_hosting()
    {
        return view("app.services.website_hosting");
    }
    public function email_marketing()
    {
        return view("app.services.email_marketing");
    }
    public function seo_content_writing()
    {
        return view("app.services.seo_content_writing");
    }
    public function online_reputation_repair()
    {
        return view("app.services.online_reputation_repair");
    }
    public function sm_reputation_man()
    {
        return view("app.services.sm_reputation_man");
    }
    public function conversion_rate_optimization()
    {
        return view("app.services.conversion_rate_optimization");
    }
    public function search_engine_marketing()
    {
        return view("app.services.search_engine_marketing");
    }
}
