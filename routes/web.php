<?php

use App\Http\Controllers\AdminCandidateController;
use App\Http\Controllers\AdminCompanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ConfirmCandidateController;
use App\Http\Controllers\ContactController;
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

Route::middleware("auth")->group(function (){
    Route::get("dashboard", [AdminController::class,"index"])->name("admin.home");
    Route::get("adminCandidates",[AdminCandidateController::class,"index"])->name("admin.candidates");
    Route::get("adminCompagnies",[AdminCompanController::class,"index"])->name("admin.compagnies");
    Route::get("/cv/{id}", [ConfirmCandidateController::class,"cv"])->name("cv");
    Route::get("/lm/{id}", [ConfirmCandidateController::class,"lm"])->name("lm");
    Route::get("confirm/{id}", [ConfirmCandidateController::class,"confirm"])->name("confirm");
});
require __DIR__ . '/auth.php';
