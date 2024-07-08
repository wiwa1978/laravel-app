<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Front\Home;
use App\Livewire\Front\MessagesComponent;

Route::get('/', Home::class)->name('home');
Route::get('/messages', MessagesComponent::class)->name('messages');
