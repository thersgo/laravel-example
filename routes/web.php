<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function (Request $request) {
    return view('test', [
        'name' => $request->query('name'),
    ]);
});

Route::get('/users', function () {
    $users = User::all();
    return view('users', [
        'users' => $users
    ]);
});
