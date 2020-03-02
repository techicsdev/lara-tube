<?php
use Laratube\Http\Controllers\UploadVideoController;
use Laratube\Http\Controllers\VideoController;
use Laratube\Http\Controllers\VoteController;
use Laratube\Http\Controllers\CommentController;
use Laratube\Birthbg;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
	if(!$request->mobile){
    	abort(404);
	}
	return view('welcome');
});

Route::get('/page1', function (Request $request) {
	if(!$request->mobile){
    	abort(404);
	}
    return view('page1')->with('birthbg',Birthbg::where('type',1)->get());
});

Route::get('/page2', function (Request $request) {
	if(!$request->mobile){
    	abort(404);
	}
    return view('page2')->with('birthbg',Birthbg::where('type',2)->get());
});

Route::get('/page3', function (Request $request) {
	if(!$request->mobile){
    	abort(404);
	}
    return view('page3');
});

Route::get('content',"BirthbgController@index");
Route::get('content1',"BirthbgController@content1");
Route::get('content2',"BirthbgController@content2");
Route::post('content1',"BirthbgController@content1store");
Route::post('content2',"BirthbgController@content2store");
Route::get('contentdelete/{birthbg}',"BirthbgController@contentdelete")->name('birthbg');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/video/{channel}', 'HomeController@show');
Route::resource('channels', 'ChannelController');

Route::get('videos/{video}', [VideoController::class, 'show'])->name('videos.show');
Route::put('videos/{video}', [VideoController::class, 'updateViews']);
Route::get('videos/{video}/comments', [CommentController::class, 'index']);
Route::get('comments/{comment}/replies', [CommentController::class, 'show']);
Route::put('videos/{video}/update', [VideoController::class, 'update'])->middleware(['auth'])->name('videos.update');

Route::post('update/{video}',"VideoController@updatevideo");


Route::middleware(['auth'])->group(function () {
    Route::post('comments/{video}', [CommentController::class, 'store']);
    Route::get('edit/{video}', "VideoController@edit");
    Route::post('votes/{entityId}/{type}', [VoteController::class, 'vote']);
    Route::post('channels/{channel}/videos', [UploadVideoController::class, 'store']);
    Route::get('channels/{channel}/videos', [UploadVideoController::class, 'index'])->name('channel.upload');
    Route::resource('channels/{channel}/subscriptions', 'SubscriptionController')->only(['store', 'destroy']);
});
