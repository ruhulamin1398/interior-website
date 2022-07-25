<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\InteriorController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\MediaContentController;
use App\Http\Controllers\ProjectConstructionController;
use App\Http\Controllers\ProjectConstructionImageController;
use App\Http\Controllers\ProjectImageController;
use App\Http\Controllers\ProjectInteriorController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ServiceConstructionController;
use App\Http\Controllers\ServiceInteriorController;
use App\Http\Controllers\TextContentController;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//  ******** FRONTEND ROUTES ************

Route::get('/', function () {

    $interiorProjects = Project::where('category_id', '1')->with('images')->orderBy('serial', 'asc')->get()->take(6);
    $constructionProjects = Project::where('category_id', '2')->with('images')->orderBy('serial', 'asc')->get()->take(6);
    $allProjectsList = Project::with('images')->orderBy('serial', 'asc')->get()->take(6);

    return view('frontend.index', compact('interiorProjects', 'constructionProjects', 'allProjectsList'));
})->name('home-index');

Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
Route::get('/interior-service', [InteriorController::class, 'index'])->name('front-interior');
Route::get('/construction-service', [ConstructionController::class, 'index'])->name('front-cons');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::view('/quote', 'frontend.pages.quote')->name('quote');
Route::get('/project/gallery/{id}', [ProjectImageController::class, 'ViewGallery']);
Route::get('/clients', [BrandController::class, 'FrontIndex'])->name('front.brand');
Route::post('/contactus/mail', [ContactUsController::class, 'ContactUsmail'])->name('contact.us.mail');
Route::post('/quote/mail', [QuoteController::class, 'Quotemail'])->name('quote.mail');

//  ******** BACKEND ROUTES ************

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // ASSINING A ROLE IF NOT EXISTS
    $user = Auth::user();
    if ($user->hasAnyRole('super-admin', 'admin')) {
        return view('admin.index');
    } else {
        $user->assignRole('admin');
        return view('admin.index');
    }
})->name('dashboard');

Route::get('/user/logout', [ManageUserController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum', 'role:super-admin']], function () {

    Route::resource('/user/management', ManageUserController::class);
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum', 'role:super-admin|admin']], function () {

    Route::resource('/service/interior', ServiceInteriorController::class);
    Route::resource('/service/construction', ServiceConstructionController::class);
    Route::resource('/construction/project', ProjectConstructionController::class);
    Route::resource('/projectinterior', ProjectInteriorController::class);
    Route::resource('/project-image', ProjectImageController::class);
    Route::resource('/project-construction-image', ProjectConstructionImageController::class);
    Route::get('/add/brands', [BrandController::class, 'AdminIndex'])->name('view.brand');
    Route::post('/store/brand', [BrandController::class, 'AddBrand'])->name('store.brand');
    Route::post('/store/brand', [BrandController::class, 'AddBrand'])->name('store.brand');
    Route::post('/delete/brand/{id}', [BrandController::class, 'DeleteBrand']);

});

Route::resource('text-contents', TextContentController::class);
Route::resource('media-contents', MediaContentController::class);
