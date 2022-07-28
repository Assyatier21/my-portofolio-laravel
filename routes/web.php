<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Controller::class, 'index'])->name('user.index');
Route::get('/contact', [Controller::class, 'contact'])->name('user.contact');
Route::post('/contact', [Controller::class, 'sendMailToMe'])->name('user.mailMe');
Route::get('/project', [Controller::class, 'project'])->name('user.project');
