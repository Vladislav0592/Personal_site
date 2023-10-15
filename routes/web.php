<?php


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
Route::get('/',[\App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
Route::get('/contacts', function (){
    return view('contacts');
})->name('contacts');
Route::get('/links',function ()
{
    return view('links');
})->name('links');

Route::get('/biography',function ()
{
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
Route::post('/reviews/submit', [\App\Http\Controllers\ReviewController::class, 'submit'])->name('review-form');
Route::get('/all_messages', [\App\Http\Controllers\MessageController::class, 'allData'])->name('all_messages');
Route::get('/all_messages/{id}/delete', [\App\Http\Controllers\MessageController::class, 'deleteMessage'])->name('delete-message');

//_______________________________________________
//video
Route::post('/video/submit', [\App\Http\Controllers\VideoController::class, 'submit'])->name('video-form');
Route::get('/video', [\App\Http\Controllers\VideoController::class, 'allData'])->name('video');
Route::get('/video-one-form/{id}/', [\App\Http\Controllers\VideoController::class, 'showOneForm'])->name('video-one-form');
Route::get('/video-one-form/{id}/delete', [\App\Http\Controllers\VideoController::class, 'deleteVideoForm'])->name('delete-video-form');
Route::post('/video-one-form/{id}/', [\App\Http\Controllers\VideoController::class, 'update_video_submit'])->name('update-video-form');

//_____________________________________________________________
//concerts
Route::post('/concerts/submit', [\App\Http\Controllers\ConcertsController::class, 'createEvent'])->name('create-event');
Route::post('/event-one-form/{id}', [\App\Http\Controllers\ConcertsController::class, 'updateEvent'])->name('update-event');
Route::get('/concerts', [\App\Http\Controllers\ConcertsController::class, 'getDataConcerts'])->name('concerts');
Route::get('event-one-form/{id}',[\App\Http\Controllers\ConcertsController::class, 'showEventForm'])->name('event-one-form');
Route::get('event-one-form/{id}/delete',[\App\Http\Controllers\ConcertsController::class, 'deleteEvent'])->name('delete-event');
//______________________________________________________________
//add_reviews
Route::post('/review/submit', [\App\Http\Controllers\AddReviewController::class, 'addReview'])->name('add-review');
Route::get('/reviews', [\App\Http\Controllers\AddReviewController::class, 'getDataReviews'])->name('reviews');
Route::get('/review-one-form/{id}',[\App\Http\Controllers\AddReviewController::class, 'showReviewForm'])->name('review-one-form');
Route::post('/review-one-form/{id}', [\App\Http\Controllers\AddReviewController::class, 'updateReview'])->name('update-review');
Route::get('/review-one-form/{id}/delete',[\App\Http\Controllers\AddReviewController::class, 'deleteReview'])->name('delete-review');

//______________________________________________________________
//mail
Route::get('contacts', [\App\Http\Controllers\ContactsController::class, 'sendingMessage'])->name('sendingMessage');

//______________________________________________________________
//biography
Route::post('biography/submit', [\App\Http\Controllers\BiographyController::class, 'addBiography'])->name('add-biography');
Route::get('biography', [\App\Http\Controllers\BiographyController::class, 'getBiography'])->name('get-biography');

Auth::routes();


