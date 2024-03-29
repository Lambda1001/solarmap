<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/solarsystem', [App\Http\Controllers\StarController::class,'index'])->name('solarsystem.index');
Route::get('/solarsystem/{starId}/viewplanets', [App\Http\Controllers\StarController::class, 'showPlanets'])->name('star.show');
Route::get('/solarsystem/{planetId}/viewplanet', [App\Http\Controllers\PlanetController::class, 'showPlanet'])->name('planet.show');
Route::get('/solarsystem/{planetId}/update', [App\Http\Controllers\PlanetController::class, 'updatePlanet'])->name('planet.update');
Route::get('/solarsystem/{starId}/specifyplanet', [App\Http\Controllers\PlanetController::class, 'specifyPlanet'])->name('planet.specify');
Route::get('/createstar', [App\Http\Controllers\StarController::class,'createStar'])->name('star.create');
Route::get('/solarmap',[App\Http\Controllers\FrontEndController::class, 'index'])->name('solarmap');
Route::get('/solarmap/home', [App\Http\Controllers\FrontEndController::class,'index'])->name('solarmap.index');
Route::get('/solarmap/planets', [App\Http\Controllers\FrontEndController::class, 'planets'])->name('solarmap.planets');
Route::get('/solarmap/planet/{planetId}', [App\Http\Controllers\FrontEndController::class,'showPlanet'])->name('solarmap.showplanet');
Route::get('/solarmap/about',[App\Http\Controllers\FrontEndController::class,'about'])->name('solarmap.about');

Route::post('/solarsystem/{starId}/createplanet', [App\Http\Controllers\PlanetController::class,'createPlanet'])->name('planet.create');
Route::post('/storeplanet', [App\Http\Controllers\PlanetController::class, 'storePlanet'])->name('planet.store');
Route::post('/storestar', [App\Http\Controllers\StarController::class,'storeStar'])->name('star.store');

route::patch('/{id}/update', [App\Http\Controllers\PlanetController::class, 'editPlanet']);