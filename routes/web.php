<?php

use App\Livewire\FormPage;
use App\Livewire\OverviewPage;
use App\Livewire\ViewUserPage;
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

Route::redirect('/', '/form');

Route::get('/form', FormPage::class)->name('form');
Route::get('/overview', OverviewPage::class)->name('overview');
Route::get('/users/{user}', ViewUserPage::class)->name('users.show');
