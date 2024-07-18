<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GitHubIssueController;

Route::get('/', [GitHubIssueController::class, 'index'])->name('issues.index');
Route::get('/issue/{issueNumber}', [GitHubIssueController::class, 'show'])->name('issues.show');
