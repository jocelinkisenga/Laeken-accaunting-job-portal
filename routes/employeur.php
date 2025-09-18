<?php

use App\Http\Controllers\Employeur\EmployeurController;
use Illuminate\Support\Facades\Route;


Route::middleware(["auth","role:3"])->group(function () {
    Route::get("dashboard-employeur" , action: [EmployeurController::class, "index"])->name("dashboard.employeur");

    Route::get("employeur-jobs", action: [EmployeurController::class, "myjobs"])->name("employeur.myjobs");
    Route::get("employeur-mycandidates", action: [EmployeurController::class, "mycandidates"])->name("employeur.mycandidates");
});