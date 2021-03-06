<?php

use App\Http\Controllers\PlayersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaguesController;
use App\Http\Controllers\TeamsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
/* Leagues */
Route::get('/home/addleague', [LeaguesController::class, 'addLeague'])->name('addleague');
Route::get('/home/submitleague', [LeaguesController::class, 'submitLeague'])->name('submitleague');
Route::get('/home/showleagues', [LeaguesController::class, 'showLeagues'])->name('showleagues');
Route::get('/home/deleteleague/{id}', [LeaguesController::class, 'deleteLeague'])->name('deleteleague');

/* Teams */
Route::get('/home/addteam', [TeamsController::class, 'addTeam'])->name('addteam');
Route::get('/home/submitteam', [TeamsController::class, 'submitTeam'])->name('submitteam');
Route::get('/home/showteams', [TeamsController::class, 'showTeams'])->name('showteams');
Route::get('/home/deleteteam/{id}', [TeamsController::class, 'deleteTeam'])->name('deleteteam');
Route::get('/home/showplayersteam/{id}', [TeamsController::class, 'showPlayersteam'])->name('showplayersteam');

/* Players */
Route::get('/home/addplayer', [PlayersController::class, 'addPlayer'])->name('addplayer');
Route::get('/home/submitplayer', [PlayersController::class, 'submitPlayer'])->name('submitplayer');
Route::get('/home/showplayers', [PlayersController::class, 'showPlayers'])->name('showplayers');
Route::get('/home/deleteplayer/{id}', [PlayersController::class, 'deletePlayer'])->name('deleteplayer');


