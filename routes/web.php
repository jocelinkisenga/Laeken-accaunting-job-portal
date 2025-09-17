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

Route::middleware("auth")->group(function (){
    Route::get("dashboard", [AdminController::class,"index"])->name("admin.home");
    Route::get("adminCandidates",[AdminCandidateController::class,"index"])->name("admin.candidates");
    Route::get("adminCompagnies",[AdminCompanController::class,"index"])->name("admin.compagnies");
    Route::get("/cv/{id}", [ConfirmCandidateController::class,"cv"])->name("cv");
    Route::get("/lm/{id}", [ConfirmCandidateController::class,"lm"])->name("lm");
    Route::get("confirm/{id}", [ConfirmCandidateController::class,"confirm"])->name("confirm");
    Route::get("adminArticles", [ArticleController::class, "index"])->name("admin.index.article");
    Route::get("adminjobs", [JobController::class, "index"])->name("admin.index.job");
    Route::get("createArticles", [ArticleController::class, "create"])->name("admin.create.article");
    Route::get("deleteArticle", [ArticleController::class, "destroy"])->name(name: "admin.article.destroy");
    Route::get("createJob", [JobController::class, "create"])->name("admin.create.job");
    Route::post("storeArticles", [ArticleController::class, "store"])->name("admin.store.article");
    Route::post("storeJob", [JobController::class, "store"])->name("store.job");
    Route::get("deleteJob/{id}", [JobController::class, "destroy"])->name("admin.job.delete");
    Route::get("confirm/{id}", [JobController::class, "confirm"])->name("admin.job.confirm");
});
require __DIR__ . '/auth.php';
