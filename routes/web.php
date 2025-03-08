<?php

use App\Livewire\Store\Dashboard\Dashboardindex;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboardindex::class)->name('store.dashboardindex');
