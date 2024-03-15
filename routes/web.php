<?php
use App\Http\Controllers\FruitController;
use Illuminate\Support\Facades\Route;
use App\Models\Fruit;
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

Route::get('/', function () {
    return view('welcome');
});

//Cau 2
Route::get('/myview/{user}', function ($user) {
    return view('home', ['username' => $user]);
});

//cau 3
// Route::get('/fruits', function() {
//     return Fruit::all();
// });

//Cau 4
// Route::get('/showFruits', [FruitController::class, 'getFruits']);


//Cau 5

Route::get('/fruits', function () {
    $fruits = Fruit::all();
    return view('fruits', ['fruits' => $fruits]);
});



