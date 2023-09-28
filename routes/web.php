<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $users = User::all();
    return Inertia::render('Home', [
        'users' => $users
    ]);
});
