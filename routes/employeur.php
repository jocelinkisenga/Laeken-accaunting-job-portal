<?php

use App\Http\Controllers\Employeur\EmployeurController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::middleware(["auth","role:3"])->group(function () {
    Route::get("dashboard-employeur" , action: [EmployeurController::class, "index"])->name("dashboard.employeur");

    Route::get("employeur-jobs",  [EmployeurController::class, "myjobs"])->name("employeur.myjobs");
    Route::get("employeur-mycandidates/{id}", action: [EmployeurController::class, "mycandidates"])->name("employeur.mycandidates");

    Route::get("createJob", [JobController::class, "create"])->name("create.job");

    Route::post("storeJob", [JobController::class, "store"])->name("store.job");
    Route::get("deleteJob/{id}", [JobController::class, "destroy"])->name("admin.job.delete");
    Route::get("confirm/{id}", [JobController::class, "confirm"])->name("admin.job.confirm");
});
