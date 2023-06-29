<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Livewire\Chat\CreateChat;
use App\Http\Livewire\Chat\Main;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\UserDashbordController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\LangueController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/redirects',[HomeController::class,"index"])->middleware(['auth', 'verified'])->name('redirects');

##Route::get('/redirects',[HomeController::class,"index"]);


Route::get('/auth/google/redirect', [GoogleController::class ,'redirect']);    
Route::get('/auth/google/callback-url',[GoogleController::class,'callback']);



Route::get('wp-admin/Menue',[MenuController::class, 'Menue1']);
Route::get('wp-admin/Menuef',[MenuController::class, 'Menuef']);


Route::get('versionpro',[MenuController::class, 'pro']);
Route::get('user/contact',[MenuController::class, 'menue']);
Route::get('user/user',[UserDashbordController::class, 'UserDashbord']);
Route::get('formPayement',[MenuController::class, 'payement']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*Routes GET des projets */
Route::get('addtask',[ProjetController::class, 'addtask_form']);
Route::get('listtask',[ProjetController::class, 'listtask_form']);
Route::get('taskencours',[ProjetController::class, 'taskencours_form']);
Route::get('finishtask',[ProjetController::class, 'finishtask_form']);
Route::get('/etapetask/{id}',[ProjetController::class,'show'])->whereNumber('id');

/*Routes POST des projets*/ 
Route::post('addtask_load',[ProjetController::class,'traitement_addtask']);
Route::post('/projet/update-state',[ProjetController::class, 'updateState'])->name('update-state');
Route::post('/projet/update-state-first',[ProjetController::class, 'updateState_first'])->name('update-state-first');
Route::post('/projet/update-state-finish',[ProjetController::class, 'updateState_finish'])->name('update-state-finish');
Route::post('/etapetask/{id}',[ProjetController::class,'traitement_addtache']);
Route::delete('/delete_tache/{id}', [ProjetController::class, 'destroy_tache'])->name('delete_tache')->middleware('web');
Route::delete('/delete_task/{id}', [ProjetController::class, 'destroy_task'])->name('delete_task');
Route::delete('/delete_taskencours/{id}', [ProjetController::class, 'destroy_taskencours'])->name('delete_taskencours');

/*
/*
Route::middleware(['auth', 'role:admin'])->group(function() {
    Route::get('/private', function () {
        return view('Admin');
    });
    
});
*/
//route projet

//LiveWireRoute

Route::get('/users',CreateChat::class)->name('users');
Route::get('/chat{key?}',Main::class)->name('chat');

//Langue route

//Route::get("locale/{langue}",[LangueController::class,"setLangue"]);


require __DIR__.'/auth.php';
