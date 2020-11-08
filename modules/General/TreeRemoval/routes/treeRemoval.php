<?php

use TreeRemoval\Http\Controllers\TreeRemovalController;

Route::get('/home', [TreeRemovalController::class, 'home'])->name('treeremoval.home');
Route::get('/general', fn() => view('treeRemoval::general'));