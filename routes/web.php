<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app.homepage');
});

// SERVICE ROUTING 
Route::prefix('services')->group(function () {

    //Main controller
    $c = App\Http\Controllers\ServiceController::class;

    //Index for services
    // Route::get('/', [$c, 'index'])->name('services');

    //Services
    Route::get('/amazon-marketing', [$c, 'amazon_marketing'])->name('amazon_marketing');
    Route::get('/amazon-seller-consulting', [$c, 'amazon_seller_consulting'])->name('amazon_seller_consulting');
    Route::get('/amazon-seo', [$c, 'amazon_seo'])->name('amazon_seo');
    Route::get('/ecommerce-optimization', [$c, 'ecommerce_optim'])->name('ecommerce_optim');
    Route::get('/ecommerce-ppc-management', [$c, 'ecommerce_ppc_man'])->name('ecommerce_ppc_man');
    Route::get('/ecommerce-seo', [$c, 'ecommerce_seo'])->name('ecommerce_seo');
    Route::get('/ecommerce-web-design', [$c, 'ecommerce_web_design'])->name('ecommerce_web_design');
    Route::get('/pay-per-click-marketing', [$c, 'ppc_marketing'])->name('ppc_marketing');
    Route::get('/digital-marketing-strategy', [$c, 'digital_marketing_strategy'])->name('digital_marketing_strategy');
    Route::get('/local-seo', [$c, 'local_seo'])->name('local_seo');
    Route::get('/franchise-reputation-management', [$c, 'franchise_reputation_man'])->name('franchise_reputation_man');
    Route::get('/franchise-seo', [$c, 'franchise_seo'])->name('franchise_seo');
    Route::get('/search-engine-optimization', [$c, 'se_optimization'])->name('se_optimization');
    Route::get('/search-analytics-services', [$c, 'search_analytics'])->name('search_analytics');
    Route::get('/link-uilding-services', [$c, 'link_building_services'])->name('link_building_services');
    Route::get('/shopify-seo', [$c, 'shopify_seo'])->name('shopify_seo');
    Route::get('/real-estate-virtual-assistant', [$c, 'rev_assistant'])->name('rev_assistant');
    Route::get('/virtual-personal-assistant', [$c, 'vp_assistant'])->name('vp_assistant');
    Route::get('/walmart-marketplace', [$c, 'walmart_marketplace'])->name('walmart_marketplace');
    Route::get('/social-media-advertising', [$c, 'social_media_advertising'])->name('social_media_advertising');
    Route::get('/social-media-brand-management', [$c, 'smb_management'])->name('smb_management');
    Route::get('/social-media-management', [$c, 'social_media_management'])->name('social_media_management');
    Route::get('/custom-web-design', [$c, 'custom_web_design'])->name('custom_web_design');
    Route::get('/website-hosting', [$c, 'website_hosting'])->name('website_hosting');
    Route::get('/email-marketing', [$c, 'email_marketing'])->name('email_marketing');
    Route::get('/seo-content-writing', [$c, 'seo_content_writing'])->name('seo_content_writing');
    Route::get('/online-reputation-repair', [$c, 'online_reputation_repair'])->name('online_reputation_repair');
    Route::get('/franchise-reputation-management', [$c, 'franchise_reputation_man'])->name('franchise_reputation_man');
    Route::get('/social-media-reputation-management', [$c, 'sm_reputation_man'])->name('sm_reputation_man');
    Route::get('/conversion-rate-optimization', [$c, 'conversion_rate_optimization'])->name('conversion_rate_optimization');
    Route::get('/search-engine-marketing', [$c, 'search_engine_marketing'])->name('search_engine_marketing');
});


Route::prefix('contact')->group(function () {
    Route::get('/', function () {
        return view('app.contact');
    })->name('contact');
});


Route::get('/faqs', function () {
    return view('app.faqs');
})->name('faqs');
