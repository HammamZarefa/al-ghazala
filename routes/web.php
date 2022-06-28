<?php

//use App\Http\Controllers\Portfolio\HomeController;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [FrontController::class, 'home'])->name('homepage');
Route::post('/', [FrontController::class, 'subscribe'])->name('subscribe');
Route::get('about-us', [FrontController::class, 'about'])->name('about');
Route::get('contact-us', [FrontController::class, 'contact'])->name('contact');
Route::get('testimonials', [FrontController::class, 'testi'])->name('testi');
Route::get('services', [FrontController::class, 'service'])->name('service');
Route::get('services/{slug}', [FrontController::class, 'serviceshow'])->name('serviceshow');
Route::get('products', [FrontController::class, 'product'])->name('product');
Route::get('products/{slug}', [FrontController::class, 'productshow'])->name('productshow');
Route::get('portfolio', [FrontController::class, 'portfolio'])->name('portfolio');
Route::get('portfolio/{slug}', [FrontController::class, 'portfolioshow'])->name('portfolioshow');
Route::get('blog', [FrontController::class, 'blog'])->name('blog');
Route::get('blog/search',[FrontController::class, 'search'])->name('search');
Route::get('blog/{slug}', [FrontController::class, 'blogshow'])->name('blogshow');
Route::get('categories/{category:slug}',[FrontController::class, 'category'])->name('category');
Route::get('tags/{tag:slug}',[FrontController::class, 'tag'])->name('tag');
Route::get('pages/{slug}', [FrontController::class, 'page'])->name('page');

Auth::routes([
    'register' => false
]);
Route::get('/', function () {
    return view('welcome');
});
// change language
Route::get('locale/{locale?}', array('en'=>'set-locale', 'uses'=>'Languages\LanguageController@changeLang'));

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::prefix('admin')->middleware(['auth','Localization'])->group(function () {

    Route::group(['namespace'=>'General'],function()
        {
            Route::get('dashboard', 'GeneralController@dashboard')->name('admin.dashboard');

            // General settings
            Route::get('general-settings', 'GeneralController@general')->name('admin.general');
            Route::post('general-settings', 'GeneralController@generalUpdate')->name('general.update');

            // About
            Route::get('about', 'GeneralController@about')->name('admin.about');
            Route::post('about', 'GeneralController@aboutUpdate')->name('about.update');
        });
    // Manage Banner
    Route::group(['prefix'=>'banner','namespace'=>'Banner'],function()
        {
            Route::get('/', 'BannerController@index')->name('admin.banner');
            Route::get('/create', 'BannerController@create')->name('admin.banner.create');
            Route::post('/create', 'BannerController@store')->name('admin.banner.store');
            Route::get('/edit/{id}',  'BannerController@edit')->name('admin.banner.edit');
            Route::post('/edit/{id}',  'BannerController@update')->name('admin.banner.update');
            Route::delete('/destroy/{id}', 'BannerController@destroy')->name('admin.banner.destroy');

        });
     // Manage Portfolio Categories
    Route::group(['prefix'=>'portfolio-categories','namespace'=>'Pcategory'],function()
        {
            Route::get('/', 'PcategoryController@index')->name('admin.pcategory');
            Route::post('/', 'PcategoryController@store')->name('admin.pcategory.store');
            Route::get('Portfolio-categories/edit/{id}', 'PcategoryController@edit')->name('admin.pcategory.edit');
            Route::post('Portfolio-categories/edit/{id}', 'PcategoryController@update')->name('admin.pcategory.update');
            Route::delete('Portfolio-categories/destroy/{id}', 'PcategoryController@destroy')->name('admin.pcategory.destroy');
        });
     // Manage Portfolio
    Route::group(['prefix'=>'portfolio','namespace'=>'Portfolio'],function()
        {
            Route::get('/',  'PortfolioController@index')->name('admin.portfolio');
            Route::get('/create',  'PortfolioController@create')->name('admin.portfolio.create');
            Route::post('/create',  'PortfolioController@store')->name('admin.portfolio.store');
            Route::get('/edit/{id}',  'PortfolioController@edit')->name('admin.portfolio.edit');
            Route::post('/edit/{id}',  'PortfolioController@update')->name('admin.portfolio.update');
            Route::delete('/destroy/{id}', 'PortfolioController@destroy')->name('admin.portfolio.destroy');
        });
     // Manage Categories
    Route::group(['prefix'=>'categories','namespace'=>'Category'],function()
        {
            Route::get('/', 'CategoryController@index')->name('admin.category');
            Route::get('/create', 'CategoryController@create')->name('admin.category.create');
            Route::post('/create', 'CategoryController@store')->name('admin.category.store');
            Route::get('/edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
            Route::post('/edit/{id}', 'CategoryController@update')->name('admin.category.update');
            Route::delete('/destroy/{id}', 'CategoryController@destroy')->name('admin.category.destroy');
        });
     // Manage Tags
    Route::group(['prefix'=>'tags','namespace'=>'Tag'],function()
        {
            Route::get('/', 'TagController@index')->name('admin.tag');
            Route::get('/create', 'TagController@create')->name('admin.tag.create');
            Route::post('/create', 'TagController@store')->name('admin.tag.store');
            Route::get('/edit/{id}', 'TagController@edit')->name('admin.tag.edit');
            Route::post('/edit/{id}', 'TagController@update')->name('admin.tag.update');
            Route::delete('/destroy/{id}', 'TagController@destroy')->name('admin.tag.destroy');
        });
     // Manage Blog
    Route::group(['prefix'=>'post','namespace'=>'Post'],function()
        {
            Route::get('/', 'PostController@index')->name('admin.post');
            Route::get('/create', 'PostController@create')->name('admin.post.create');
            Route::post('/create', 'PostController@store')->name('admin.post.store');
            Route::get('/edit/{id}', 'PostController@edit')->name('admin.post.edit');
            Route::post('/edit/{id}', 'PostController@update')->name('admin.post.update');
            Route::get('/trash', 'PostController@trash')->name('admin.post.trash');
            Route::post('/{id}/restore', 'PostController@restore')->name('admin.post.restore');
            Route::delete('/trash/{id}', 'PostController@destroy')->name('admin.post.destroy');
            Route::delete('/destroy/{id}', 'PostController@deletePermanent')->name('admin.post.deletePermanent');
        });
    // Manage Testimonials
    Route::group(['prefix'=>'testimonials','namespace'=>'Testimonial'],function()
    {
        Route::get('/', 'TestimonialController@index')->name('admin.testi');
        Route::get('/create', 'TestimonialController@create')->name('admin.testi.create');
        Route::post('/create', 'TestimonialController@store')->name('admin.testi.store');
        Route::get('/edit/{id}', 'TestimonialController@edit')->name('admin.testi.edit');
        Route::post('/edit/{id}', 'TestimonialController@update')->name('admin.testi.update');
        Route::delete('/destroy/{id}', 'TestimonialController@destroy')->name('admin.testi.destroy');
    });
    // Manage Pages
    Route::group(['prefix'=>'pages','namespace'=>'Page'],function()
        {
            Route::get('/', 'PageController@index')->name('admin.page');
            Route::get('/create', 'PageController@create')->name('admin.page.create');
            Route::post('/create', 'PageController@store')->name('admin.page.store');
            Route::get('/edit/{id}', 'PageController@edit')->name('admin.page.edit');
            Route::post('/edit/{id}', 'PageController@update')->name('admin.page.update');
            Route::delete('/destroy/{id}','PageController@destroy')->name('admin.page.destroy');
        });
    // Manage Links
    Route::group(['prefix'=>'links','namespace'=>'Link'],function()
        {
            Route::get('/', 'LinkController@index')->name('admin.link');
            Route::get('/create', 'LinkController@create')->name('admin.link.create');
            Route::post('/create', 'LinkController@store')->name('admin.link.store');
            Route::get('/edit/{id}', 'LinkController@edit')->name('admin.link.edit');
            Route::post('/edit/{id}', 'LinkController@update')->name('admin.link.update');
            Route::delete('/destroy/{id}', 'LinkController@destroy')->name('admin.link.destroy');
        });
    // Manage FAQ
    Route::group(['prefix'=>'faq','namespace'=>'Faq'],function()
        {
            Route::get('/', 'FaqController@index')->name('admin.faq');
            Route::get('/create', 'FaqController@create')->name('admin.faq.create');
            Route::post('/create', 'FaqController@store')->name('admin.faq.store');
            Route::get('/edit/{id}', 'FaqController@edit')->name('admin.faq.edit');
            Route::post('/edit/{id}', 'FaqController@update')->name('admin.faq.update');
            Route::delete('/destroy/{id}','FaqController@destroy')->name('admin.faq.destroy');
        });
    // Manage Partners
    Route::group(['prefix'=>'partners','namespace'=>'Partner'],function()
        {
            Route::get('/', 'PartnerController@index')->name('admin.partner');
            Route::get('/create', 'PartnerController@create')->name('admin.partner.create');
            Route::post('/create', 'PartnerController@store')->name('admin.partner.store');
            Route::get('/edit/{id}', 'PartnerController@edit')->name('admin.partner.edit');
            Route::post('/edit/{id}', 'PartnerController@update')->name('admin.partner.update');
            Route::delete('/destroy/{id}', 'PartnerController@destroy')->name('admin.partner.destroy');
        });

    // Manage Partners
    Route::group(['prefix'=>'products','namespace'=>'Product'],function()
    {
        Route::get('/', 'ProductController@index')->name('admin.product');
        Route::get('/create', 'ProductController@create')->name('admin.product.create');
        Route::post('/create', 'ProductController@store')->name('admin.product.store');
        Route::get('/edit/{id}', 'ProductController@edit')->name('admin.product.edit');
        Route::post('/edit/{id}', 'ProductController@update')->name('admin.product.update');
        Route::delete('/destroy/{id}', 'ProductController@destroy')->name('admin.product.destroy');
    });

    // Manage Services
    Route::group(['prefix'=>'services','namespace'=>'Service'],function()
        {
            Route::get('/', 'ServiceController@index')->name('admin.service');
            Route::get('/create', 'ServiceController@create')->name('admin.service.create');
            Route::post('/create', 'ServiceController@store')->name('admin.service.store');
            Route::get('/edit/{id}', 'ServiceController@edit')->name('admin.service.edit');
            Route::post('/edit/{id}', 'ServiceController@update')->name('admin.service.update');
            Route::delete('/destroy/{id}', 'ServiceController@destroy')->name('admin.service.destroy');
        });
    // Manage Team
    Route::group(['prefix'=>'teams','namespace'=>'Team'],function()
        {
            Route::get('/', 'TeamController@index')->name('admin.team');
            Route::get('/create','TeamController@create')->name('admin.team.create');
            Route::post('/create','TeamController@store')->name('admin.team.store');
            Route::get('/edit/{id}','TeamController@edit')->name('admin.team.edit');
            Route::post('/edit/{id}','TeamController@update')->name('admin.team.update');
            Route::delete('/destroy/{id}','TeamController@destroy')->name('admin.team.destroy');

        });
     // Manage Admin
    Route::group(['prefix'=>'users','namespace'=>'User'],function()
        {
            Route::get('/', 'UserController@index')->name('admin.user');
            Route::post('/{id}', 'UserController@changepassword')->name('admin.user.changepassword');
            Route::get('/create', 'UserController@create')->name('admin.user.create');
            Route::post('/create', 'UserController@store')->name('admin.user.store');
            Route::get('/edit/{id}', 'UserController@edit')->name('admin.user.edit');
            Route::post('/edit/{id}', 'UserController@update')->name('admin.user.update');
            Route::delete('/destroy/{id}', 'UserController@destroy')->name('admin.user.destroy');
        });
    //  Manage Role
    Route::group(['prefix'=>'roles','namespace'=>'Role'],function()
        {
            Route::get('/', 'RoleController@index')->name('admin.role');
            Route::get('/create', 'RoleController@create')->name('admin.role.create');
            Route::post('/create', 'RoleController@store')->name('admin.role.store');
            Route::get('/edit/{id}', 'RoleController@edit')->name('admin.role.edit');
            Route::post('/edit/{id}', 'RoleController@update')->name('admin.role.update');
            Route::delete('/destroy/{id}', 'RoleController@destroy')->name('admin.role.destroy');
        });

    // Manage Permission
    Route::group(['prefix'=>'permissions','namespace'=>'Permission'],function()
        {
            Route::get('/', 'PermissionController@index')->name('admin.permission');
            Route::get('/create', 'PermissionController@create')->name('admin.permission.create');
            Route::post('/create', 'PermissionController@store')->name('admin.permission.store');
            Route::get('/edit/{id}', 'PermissionController@edit')->name('admin.permission.edit');
            Route::post('/edit/{id}', 'PermissionController@update')->name('admin.permission.update');
            Route::delete('/destroy/{id}', 'PermissionController@destroy')->name('admin.permission.destroy');
        });

    // Notification Mark All Read
    Route::get('/MarkAllSeen','PostController@MarkNotification');
});
