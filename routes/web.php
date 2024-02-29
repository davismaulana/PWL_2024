<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


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


// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Welcome';
});

Route::get('/about', function () {
    $nim = '2241720255';
    $name = 'Davis Maulana Hermanto';
    return $nim . " - " . $name;
});




// ==============================================


// Route::get('/user/{name}', function ($name) {
//    return 'My name is '.$name; 
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . ' Komentar ke-' . $commentId;
});


Route::get('/article/{id}', function ($id){
    return 'Artile Page with ID '. $id;
});



// ================================================


// Route::get('/user/{name?}', function ($name=null) {
//     return 'My name is '.$name;
// });

Route::get('/user/{name?}', function ($name = 'John') {
    return 'My name is ' . $name;
});


// ====================================================


// Route::get('/user/profile', function () {
//     //
// })->name('profile');
// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');
// // Generating URLs...
// $url = route('profile');
// // Generating Redirects...
// return redirect()->route('profile');


// ==================================================


// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });
//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });
// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });
// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });


// =====================================================


// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });


// ====================================================


Route::redirect('/here', '/there');


// ================================================


Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);


// ===================================================


Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [homeController::class, 'home']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);


// ==================================================


Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);


// ================================================


// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Andi']);
// });

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Davis']);
// });

Route::get('/greeting', [WelcomeController::class,
'greeting']);
