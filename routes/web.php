<?php

use Illuminate\Support\Facades\Route;

use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Http\RedirectResponse;


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




Route::get("/contact-us", [App\Http\Controllers\ContactController::class, 'contact_us'])->name("contact");
Route::post("/contact-us", [App\Http\Controllers\ContactController::class, 'submit_contact_us'])->name("submit_contact_us");
Route::post("/lets-talk", [App\Http\Controllers\ContactController::class, 'letstalk_form'])->name("letstalk_form");
// Route::post("/contact-us", [App\Http\Controllers\ContactController::class, 'submit_contact_us'])->name("footer_contact_us");
Route::post("/sign_up", [App\Http\Controllers\ContactController::class, 'sign_up'])->name("sign_up");



// SERVICE ROUTING 
Route::prefix('/')->group(function () {

    //Main controller
    $c = App\Http\Controllers\ServiceController::class;

    //Index for services
    // Route::get('/', [$c, 'index'])->name('services');

    //Services
    Route::get('/digital-marketing-services/ecommerce/amazon-marketing', [$c, 'amazon_marketing'])->name('amazon_marketing');
    Route::get('/digital-marketing-services/ecommerce/amazon-seller-consulting', [$c, 'amazon_seller_consulting'])->name('amazon_seller_consulting');
    Route::get('/digital-marketing-services/ecommerce/amazon-seo', [$c, 'amazon_seo'])->name('amazon_seo');
    Route::get('/digital-marketing-services/ecommerce/ecommerce-optimization', [$c, 'ecommerce_optim'])->name('ecommerce_optim');
    Route::get('/digital-marketing-services/ecommerce/ecommerce-ppc-management', [$c, 'ecommerce_ppc_man'])->name('ecommerce_ppc_man');
    Route::get('/digital-marketing-services/ecommerce/ecommerce-seo', [$c, 'ecommerce_seo'])->name('ecommerce_seo');
    Route::get('/digital-marketing-services/ecommerce/ecommerce-web-design', [$c, 'ecommerce_web_design'])->name('ecommerce_web_design');
    Route::get('/digital-marketing-services/pay-per-click-marketing', [$c, 'ppc_marketing'])->name('ppc_marketing');
    Route::get('/digital-marketing-services/digital-marketing-strategy', [$c, 'digital_marketing_strategy'])->name('digital_marketing_strategy');
    Route::get('/digital-marketing-services/local-seo', [$c, 'local_seo'])->name('local_seo');
    Route::get('/digital-marketing-services/franchise-reputation-management', [$c, 'franchise_reputation_man'])->name('franchise_reputation_man');
    Route::get('/digital-marketing-services/franchise-seo', [$c, 'franchise_seo'])->name('franchise_seo');
    Route::get('/digital-marketing-services/search-engine-optimization', [$c, 'se_optimization'])->name('se_optimization');
    Route::get('/digital-marketing-services/search-analytics-services', [$c, 'search_analytics'])->name('search_analytics');
    Route::get('/digital-marketing-services/link-building-services', [$c, 'link_building_services'])->name('link_building_services');
    Route::get('/digital-marketing-services/ecommerce/shopify-seo', [$c, 'shopify_seo'])->name('shopify_seo');
    Route::get('/digital-marketing-services/real-estate-virtual-assistant', [$c, 'rev_assistant'])->name('rev_assistant');
    Route::get('/digital-marketing-services/virtual-personal-assistant', [$c, 'vp_assistant'])->name('vp_assistant');
    Route::get('/digital-marketing-services/ecommerce/walmart-marketplace', [$c, 'walmart_marketplace'])->name('walmart_marketplace');
    Route::get('/digital-marketing-services/social-media/social-media-advertising', [$c, 'social_media_advertising'])->name('social_media_advertising');
    Route::get('/digital-marketing-services/social-media/social-media-brand-management', [$c, 'smb_management'])->name('smb_management');
    Route::get('/digital-marketing-services/social-media/social-media-management', [$c, 'social_media_management'])->name('social_media_management');
    Route::get('/web-design-development/custom-web-design', [$c, 'custom_web_design'])->name('custom_web_design');
    Route::get('/web-design-development/website-hosting', [$c, 'website_hosting'])->name('website_hosting');
    Route::get('/web-design-development/email-marketing', [$c, 'email_marketing'])->name('email_marketing');
    Route::get('/web-design-development/seo-content-writing', [$c, 'seo_content_writing'])->name('seo_content_writing');
    Route::get('/digital-marketing-services/online-reputation-repair', [$c, 'online_reputation_repair'])->name('online_reputation_repair');
    Route::get('/digital-marketing-services/franchise-reputation-management', [$c, 'franchise_reputation_man'])->name('franchise_reputation_man');
    Route::get('/digital-marketing-services/social-media-reputation-management', [$c, 'sm_reputation_man'])->name('sm_reputation_man');
    Route::get('/digital-marketing-services/conversion-rate-optimization', [$c, 'conversion_rate_optimization'])->name('conversion_rate_optimization');
    Route::get('/digital-marketing-services/search-engine-marketing', [$c, 'search_engine_marketing'])->name('search_engine_marketing');
});




// Route::get('/faqs', function () {
//     return view('app.faqs');
// })->name('faqs');

// Route::get('/blogs', function () {
//     return view('app.blog');
// })->name('blog');
// Route::get('/google-incorporates-generativeai-search-engine', function () {
//     return view('app.single_blog');
// })->name('single_blog');


// blogs


Route::get("/blog", [App\Http\Controllers\ShowBlogController::class, 'index'])->name("blog");




Route::get("/blog/{slug}", [App\Http\Controllers\ShowBlogController::class, 'blog'])->name("blog01");


// ROUTES FOR AUTHINTECATED USERS
Route::middleware(['auth'])->group(function () {


    Route::middleware(['admin'])->group(function () {
        //DASHBOARD ROUTES
        Route::prefix('dashboard')->group(function () {
            $main_c = App\Http\Controllers\Dashboard\DashboardController::class;

            Route::get('/', [$main_c, 'index'])->name('dashboard');


            Route::prefix('user')->group(function () {
                $main_c = App\Http\Controllers\Dashboard\UserController::class;
                Route::get('/', [$main_c, 'index'])->name('user.list');
                Route::get('/create', [$main_c, 'create'])->name('user.create');
                Route::post('/create', [$main_c, 'store'])->name('user.store');
                Route::get('{id}/upload', [App\Http\Controllers\Dashboard\WorkController::class, 'index'])->name('user.upload');
                Route::post('{id}/upload', [App\Http\Controllers\Dashboard\WorkController::class, 'store'])->name('user.upload.save');
                Route::get('{id}/work', [App\Http\Controllers\Dashboard\WorkController::class, 'view_work'])->name('user.work');
                Route::get('{id}/downloads', [App\Http\Controllers\Dashboard\WorkController::class, 'listDownloads'])->name('user.downloads');
            });

            Route::prefix('products')->group(function () {
                $main_c = App\Http\Controllers\Dashboard\ProductController::class;
                Route::get('/', [$main_c, 'index'])->name('products.list');
                Route::post('/', [$main_c, 'create'])->name('product.create');
                Route::get('/product/{id}', [$main_c, 'view_plan'])->name('product.view');
                Route::post('/plan/{id}', [$main_c, 'add_plan'])->name('add.plan');
                Route::get('/create/invoice/{slug}', [$main_c, 'create_existing_user_invoice'])->name('create.invoice');
                Route::post('/create/invoice/{slug}', [$main_c, 'send_invoice'])->name('send.invoice');
                Route::get('/create/invoice/invited/{slug}', [$main_c, 'create_inv_user_invoice'])->name('create.invoice.invited');
                Route::post('/create/invoice/invited/{slug}', [$main_c, 'send_invoice_inv'])->name('send.invoice.invited');
            });

            
            Route::prefix('blog')->group(function () {
                $blog_controller = App\Http\Controllers\Dashboard\BlogController::class;

                Route::get('/', [$blog_controller, 'index'])->name('blog.list');

                Route::get('/create', [$blog_controller, 'create'])->name('blog.create');
                Route::post('/create', [$blog_controller, 'store'])->name('blog.create');

                Route::get('/edit/{id}', [$blog_controller, 'edit'])->name('blog.update');
                Route::put('/edit/{id}', [$blog_controller, 'update'])->name('blog.update');

                Route::get('/delete/{id}', [$blog_controller, 'delete'])->name('blog.delete');
            });
        });
    });

    Route::middleware(['customer', 'verified'])->group(function () {
        Route::prefix('customer/dashboard')->group(function () {
            $main_c = App\Http\Controllers\User\DashboardController::class;
            Route::get('/', [$main_c, 'index'])->name('user.dashboard');
            Route::get('/products', [$main_c, 'index_products'])->name('user.products');
            Route::get('/products/list', [$main_c, 'listInvoices'])->name('user.products.list');
            Route::get('{id}/download', [$main_c, 'download_page'])->name('customer.downloads');
            Route::get('/work', [$main_c, 'view_downloads'])->name('customer.work');
        });


        Route::prefix('customer/profile')->group(function () {
            $main_c = App\Http\Controllers\User\ProfileController::class;
            Route::get('/', [$main_c, 'index'])->name('user.profile');
            Route::put('/update', [$main_c, 'update'])->name('user.profile.update');


        });

        Route::prefix('customer/cards')->group(function () {
            $main_c = App\Http\Controllers\User\PaymentController::class;
            Route::get('/create', [$main_c, 'index_store_cards'])->name('user.create.cards');
            Route::post('/store', [$main_c, 'storeCard'])->name('user.store.cards');
            Route::post('/set-default-card', [$main_c, 'setDefaultCard'])->name('set.default.card');
            Route::get('/products/pay/{slug}', [$main_c, 'showPaymentPage'])->name('user.pay');
            Route::post('/products/pay/{slug}', [$main_c, 'payInvoice'])->name('user.pay.invoice');
        });
    });
    
    
});


Route::prefix('register/user')->group(function () {
    $main_c = App\Http\Controllers\Auth\RegisterController::class;
    Route::get('/{slug}', [$main_c, 'register_current_view'])->name('register.current.user');
    Route::post('/', [$main_c, 'register_current'])->name('store.current.user');
});

Route::post('/trigger-password-reset', [App\Http\Controllers\User\ProfileController::class, 'sendResetLinkEmailAuth'])->name('trigger.password.reset');
Route::get('/validate-email-change/{token}', [App\Http\Controllers\User\ProfileController::class, 'validateOldEmail'])->name('validate.old.email');
Route::get('/validate-new-email/{token}', [App\Http\Controllers\User\ProfileController::class, 'validateNewEmail'])->name('validate.new.email');

Route::get('/invoice/{slug}', [App\Http\Controllers\Dashboard\ProductController::class, 'invoice'])->name('invoice.url');

Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
