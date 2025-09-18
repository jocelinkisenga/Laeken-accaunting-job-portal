<?php

use App\Http\Controllers\AdminCandidateController;
use App\Http\Controllers\AdminCompanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ConfirmCandidateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


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

Route::get("/", [App\Http\Controllers\MainController::class, "index"])->name('home');
Route::get("/contact", [ContactController::class,'index'])->name("contact");
Route::get("candidate",[CandidateController::class,"create"])->name("create.candidate");
Route::get("/company",[CompanyController::class,"create"])->name("create.company");
Route::get("/about", [ContactController::class,'about'])->name("about");
Route::get("frontblog", [ArticleController::class, "front"])->name("front.blog");
Route::get("Blogdetails/{title}/{id}", [ArticleController::class, "single"])->name("front.single.blog");
Route::get("frontJob", [JobController::class, "front"])->name("front.jobs");
Route::get("jobdetails/{title}/{id}", [JobController::class, "single"])->name("front.single.job");



require __DIR__ . '/admin.php';
require __DIR__ . '/prestataire.php';
require __DIR__ . '/employeur.php';
require __DIR__ . '/auth.php';
