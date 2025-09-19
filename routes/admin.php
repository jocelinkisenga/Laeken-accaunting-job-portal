<?php
use App\Http\Controllers\Admin\AdminCandidateController;
use App\Http\Controllers\Admin\AdminCompanController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ConfirmCandidateController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;



Route::middleware(["auth", "role:1"])->group(function (){
Route::get("dashboard-admin", [AdminController::class,"index"])->name("admin.home");
Route::get("adminCandidates",[AdminCandidateController::class,"index"])->name("admin.candidates");
Route::get("adminCompagnies",[AdminCompanController::class,"index"])->name("admin.compagnies");
Route::get("/cv/{id}", [ConfirmCandidateController::class,"cv"])->name("cv");
Route::get("/lm/{id}", [ConfirmCandidateController::class,"lm"])->name("lm");
Route::get("confirmCandidature/{id}", [ConfirmCandidateController::class,"confirm"])->name("confirm.candidate");
Route::get("adminArticles", [ArticleController::class, "adminArticles"])->name("admin.index.article");
Route::get("adminjobs", [JobController::class, "adminJobs"])->name("admin.index.job");
Route::get("createArticles", [ArticleController::class, "create"])->name("admin.create.article");
Route::get("deleteArticle/{id}", [ArticleController::class, "destroy"])->name(name: "admin.article.destroy");
Route::get("createJob", [JobController::class, "create"])->name("admin.create.job");
Route::post("storeArticles", [ArticleController::class, "store"])->name("admin.store.article");
Route::post("storeJob", [JobController::class, "store"])->name("store.job");
Route::get("deleteJob/{id}", [JobController::class, "destroy"])->name("admin.job.delete");
Route::get("publish/{id}", [JobController::class, "publish"])->name("admin.job.publish");
});
