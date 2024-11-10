<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['admin', 'auth'])->prefix('web')->group(function () {});
