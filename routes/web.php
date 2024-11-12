<?php

use App\Http\Controllers\QuillController;
use Illuminate\Support\Facades\Route;

Route::get('quill', [QuillController::class, 'index']);
Route::post('quill/upload', [QuillController::class, 'upload'])->name('quill.upload');
