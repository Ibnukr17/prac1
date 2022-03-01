<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
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


//jb2.prac2
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticlesController::class, 'articles']);

//jb2.prac3
//no1
// Route::get('/', function(){
//     return view('welcome');
// });

// //no2
// Route::prefix('/catagory')->group(function(){
//     Route::get('/marbel-edu-games', function(){
//         return redirect('https://www.educastudio.com/category/marbel-edu-games');
//     });

//     Route::get('/marbel-and-friends-kids-games', function(){
//         return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
//     });

//     Route::get('/riri-story-books', function(){
//         return redirect('https://www.educastudio.com/category/riri-story-books');
//     });

//     Route::get('/kolak-kids-songs', function(){
//         return redirect('https://www.educastudio.com/category/kolak-kids-songs');
//     });
// });

// //no3
// Route::get('news', function(){
//     return redirect('https://www.educastudio.com/news');
// });
// Route::get('news/{title}', function($title){
//     return redirect('https://www.educastudio.com/news/'.$title);
// });

// //no4
// Route::prefix('/program')->group(function(){
//     Route::get('/karir', function(){
//         return redirect('https://www.educastudio.com/program/karir');
//     });

//     Route::get('/magang', function(){
//         return redirect('https://www.educastudio.com/program/magang');
//     });

//     Route::get('/kunjungan-industri', function(){
//         return redirect('https://www.educastudio.com/program/kunjungan-industri');
//     });

// });

// //no5
// Route::get('/about-us', function(){
//     return redirect('https://www.educastudio.com/about-us');
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function(){
     return view('index2');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/clients', function(){
    return view('clients');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/testimonial', function(){
    return view('testimonial');
});

