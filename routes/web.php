<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\HomeController;
use App\Models\formation;

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

/*Route::get('create',function(){
    return view('courses');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

 Route::get('redirects',[HomeController::class,'index']);
 /*Route::get('admin',function()
{
    return view('admin.dashboard');
}); */

Route::get("/",[FormationController::class,'index']);
Route::get("detail/{id}",[FormationController::class,'detail']);
Route::get("search",[FormationController::class,'search']);
Route::post("add_to_cart",[FormationController::class,'addToCart']);

/*Route::get('create',function(){
    return view('formateurDashboard');
});*/

Route::post('create',function(){
    $formation=new formation();
    $formation->titre=request('titre');
    $formation->niveau=request('niveau');
    $formation->description=request('description');
    $formation->date_debut_formation=request('date_debut_formation');
    $formation->duree_formation=request('duree_formation');
    $formation->prix=request('prix');
    $formation->image_formations='image/'.request('image_formations');
    $formation->course=request('course');
    $formation->save();
    return view('courses');
});