<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

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
//pages
Route::get('/', function () {
    return view('home');
})->name('home');
//Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/photo', function () {
    return view('photo');
})->name('photo');

Route::get('/video', function () {
    return view('video');
})->name('video');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');

Route::get('/concerts', function () {
    return view('concerts');
})->name('concerts');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/links', function () {
    return view('links');
})->name('links');

Route::get('/biography', function () {
    return view('biography');
})->name('biography');

//______________________________________________________
//auth
Route::get('/login', function () {
    return view('login');
})->name('login');
//_______________________________________________
//home
Route::post('home/submit', [\App\Http\Controllers\LinksController::class, 'addLinks'])->name('add-links');
Route::get('home', [\App\Http\Controllers\LinksController::class, 'getData'])->name('get-data');

//_______________________________________________
//review
Route::controller(\App\Http\Controllers\ReviewController::class)->group(function () {
    Route::post('/reviews/submit', 'submit')->name('review.form');
    Route::get('/all_messages', 'allData')->name('all_messages');
    Route::get('/all_messages/{id}/delete', 'deleteMessage')->name('delete-message');
});

//_______________________________________________
//video
Route::controller(\App\Http\Controllers\VideoController::class)->group(function () {
    Route::post('/video/submit', 'submit')->name('video-form');
    Route::get('/video', 'allData')->name('video');
    Route::get('/video-one-form/{id}/', 'showOneForm')->name('video-one-form');
    Route::get('/video-one-form/{id}/delete', 'deleteVideoForm')->name('delete-video-form');
    Route::post('/video-one-form/{id}/', 'update_video_submit')->name('update-video-form');
});

//_____________________________________________________________
//concerts
Route::controller(\App\Http\Controllers\ConcertsController::class)->group(function () {
    Route::post('/concerts/submit', 'createEvent')->name('create-event');
    Route::post('/event-one-form/{id}', 'updateEvent')->name('update-event');
    Route::get('/concerts', 'getDataConcerts')->name('concerts');
    Route::get('event-one-form/{id}', 'showEventForm')->name('event-one-form');
    Route::get('event-one-form/{id}/delete', 'deleteEvent')->name('delete-event');
});
//______________________________________________________________
//add_reviews
Route::controller(\App\Http\Controllers\AddReviewController::class)->group(function () {
    Route::post('/review/submit', 'addReview')->name('add-review');
    Route::get('/reviews', 'getDataReviews')->name('reviews');
    Route::get('/review-one-form/{id}', 'showReviewForm')->name('review-one-form');
    Route::post('/review-one-form/{id}', 'updateReview')->name('update-review');
    Route::get('/review-one-form/{id}/delete', 'deleteReview')->name('delete-review');
});


//______________________________________________________________
//contacts
Route::controller(\App\Http\Controllers\ContactsController::class)->group(function () {
    Route::post('/contacts/submit', 'createEmail')->name('sending-email');
    Route::get('contacts', 'getEmail')->name('contacts');
    Route::get('contacts/{id}/delete', 'deleteEmail')->name('delete-email');
});


//______________________________________________________________
//biography
Route::post('biography/submit', [\App\Http\Controllers\BiographyController::class, 'addBiography'])->name('add-biography');
//Route::get('biography', [\App\Http\Controllers\BiographyController::class, 'getBiography'])->name('get-biography');

Auth::routes();


