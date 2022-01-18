<?php

use Illuminate\Support\Facades\Route;



//backend
//for-main
Route::get('/login',[App\http\Controllers\Admin\MainController::class,'mainLogin'])->name('main.login');
//for-name

Route::get('/portfolioname-index',[App\Http\Controllers\Admin\POrtfolioNameController::class,'nameIndex'])->name('name.index');
Route::get('/portfolioname-create',[App\Http\Controllers\Admin\POrtfolioNameController::class,'nameCreate'])->name('name.create');
Route::post('/portfolioname-store',[App\Http\Controllers\Admin\POrtfolioNameController::class,'nameStore'])->name('name.store');
Route::get('/portfolioname-edit/{id}',[App\Http\Controllers\Admin\POrtfolioNameController::class,'nameEdit'])->name('name.edit');
Route::post('/portfolioname-update',[App\Http\Controllers\Admin\POrtfolioNameController::class,'nameUpdate'])->name('name.update');
Route::get('/portfolioname-delete/{id}',[App\Http\Controllers\Admin\POrtfolioNameController::class,'nameDelete'])->name('name.delete');

//for-social-media

Route::get('/socialmedia-index',[App\http\Controllers\Admin\PortfolioSocialMediaController::class,'socialmediaIndex'])->name('socialmedia.index');
Route::get('/socialmedia-create',[App\http\Controllers\Admin\PortfolioSocialMediaController::class,'socialmediaCreate'])->name('socialmedia.create');
Route::post('/socialmedia-store',[App\http\Controllers\Admin\PortfolioSocialMediaController::class,'socialmediaStore'])->name('socialmedia.store');
Route::get('/socialmedia-edit/{id}',[App\http\Controllers\Admin\PortfolioSocialMediaController::class,'socialmediaEdit'])->name('socialmedia.edit');
Route::post('/socialmedia-update',[App\http\Controllers\Admin\PortfolioSocialMediaController::class,'socialmediaUpdate'])->name('socialmedia.update');
Route::get('/socialmedia-delete/{id}',[App\http\Controllers\Admin\PortfolioSocialMediaController::class,'socialmediaDelete'])->name('socialmedia.delete');

//for-about

Route::get('/about-index',[App\http\Controllers\Admin\AboutController::class,'aboutIndex'])->name('about.index');
Route::get('/about-create',[App\http\Controllers\Admin\AboutController::class,'aboutCreate'])->name('about.create');
Route::post('/about-store',[App\http\Controllers\Admin\AboutController::class,'aboutStore'])->name('about.store');
Route::get('/about-edit/{id}',[App\http\Controllers\Admin\AboutController::class,'aboutEdit'])->name('about.edit');
Route::post('/about-update',[App\http\Controllers\Admin\AboutController::class,'aboutUpdate'])->name('about.update');
Route::get('/about-delete/{id}',[App\http\Controllers\Admin\AboutController::class,'aboutDelete'])->name('about.delete');

//for-project

Route::get('/project-index',[App\http\Controllers\Admin\ProjectController::class,'projectIndex'])->name('project.index');
Route::get('/project-create',[App\http\Controllers\Admin\ProjectController::class,'projectCreate'])->name('project.create');
Route::post('/project-store',[App\http\Controllers\Admin\ProjectController::class,'projectStore'])->name('project.store');
Route::get('/project-edit/{id}',[App\http\Controllers\Admin\ProjectController::class,'projectEdit'])->name('project.edit');
Route::post('/project-update',[App\http\Controllers\Admin\ProjectController::class,'projectUpdate'])->name('project.update');
Route::get('/project-delete{id}',[App\http\Controllers\Admin\ProjectController::class,'projectDelete'])->name('project.delete');

//for-work

Route::get('/work-index',[App\Http\Controllers\Admin\WorkController::class,'workIndex'])->name('work.index');
Route::get('/work-create',[App\Http\Controllers\Admin\WorkController::class,'workCreate'])->name('work.create');
Route::post('/work-store',[App\Http\Controllers\Admin\WorkController::class,'workStore'])->name('work.store');
Route::get('/work-edit/{id}',[App\Http\Controllers\Admin\WorkController::class,'workEdit'])->name('work.edit');
Route::post('/work-update',[App\Http\Controllers\Admin\WorkController::class,'workUpdate'])->name('work.update');
Route::get('/work-delete/{id}',[App\Http\Controllers\Admin\WorkController::class,'workDelete'])->name('work.delete');

//for-education

Route::get('/education-index',[App\Http\Controllers\Admin\EducationController::class,'educationIndex'])->name('education.index');
Route::get('/education-create',[App\Http\Controllers\Admin\EducationController::class,'educationCreate'])->name('education.create');
Route::post('/education-store',[App\Http\Controllers\Admin\EducationController::class,'educationStore'])->name('education.store');
Route::get('/education-edit/{id}',[App\Http\Controllers\Admin\EducationController::class,'educationEdit'])->name('education.edit');
Route::post('/education-update',[App\Http\Controllers\Admin\EducationController::class,'educationUpdate'])->name('education.update');
Route::get('/education-delete/{id}',[App\Http\Controllers\Admin\EducationController::class,'educationDelete'])->name('education.delete');

//for-language

Route::get('/language-index',[App\Http\Controllers\Admin\LanguageController::class,'languageIndex'])->name('language.index');
Route::get('/language-create',[App\Http\Controllers\Admin\LanguageController::class,'languageCreate'])->name('language.create');
Route::post('/language-store',[App\Http\Controllers\Admin\LanguageController::class,'languageStore'])->name('language.store');
Route::get('/language-edit/{id}',[App\Http\Controllers\Admin\LanguageController::class,'languagEedit'])->name('language.edit');
Route::post('/language-update',[App\Http\Controllers\Admin\LanguageController::class,'languageUpdate'])->name('language.update');
Route::get('/language-delete/{id}',[App\Http\Controllers\Admin\LanguageController::class,'languageDelete'])->name('language.delete');

//for-upcoming-project

Route::get('/ucproject-index',[App\Http\Controllers\Admin\UcProjectController::class,'ucprojectIndex'])->name('ucproject.index');
Route::get('/ucproject-create',[App\Http\Controllers\Admin\UcProjectController::class,'ucprojectCreate'])->name('ucproject.create');
Route::post('/ucproject-store',[App\Http\Controllers\Admin\UcProjectController::class,'ucprojectStore'])->name('ucproject.store');
Route::get('/ucproject-edit/{id}',[App\Http\Controllers\Admin\UcProjectController::class,'ucprojectEdit'])->name('ucproject.edit');
Route::post('/ucproject-update',[App\Http\Controllers\Admin\UcProjectController::class,'ucprojectUpdate'])->name('ucproject.update');
Route::get('/ucproject-delete/{id}',[App\Http\Controllers\Admin\UcProjectController::class,'ucprojectDelete'])->name('ucproject.delete');

//frontend

Route::get('/',[App\Http\Controllers\Frontend\MainController::class,'frontIndex'])->name('front.index');
