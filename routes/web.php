<?php

use App\Livewire\CreateCustomer;
use App\Livewire\EditCustomer;
use App\Livewire\ShowContacts;
use App\Livewire\ShowCustomers;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/customers', ShowCustomers::class)
    ->middleware(['auth', 'verified'])
    ->name('customers');

Route::get('/customers/create', CreateCustomer::class)
    ->middleware(['auth', 'verified'])
    ->name('customers.create');

Route::get('/customers/edit/{customer}', EditCustomer::class)
    ->middleware(['auth', 'verified'])
    ->name('customers.edit');

Route::get('/contacts', ShowContacts::class)
    ->middleware(['auth', 'verified'])
    ->name('contacts');

require __DIR__ . '/auth.php';
