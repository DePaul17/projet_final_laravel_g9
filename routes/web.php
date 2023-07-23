<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Livewire\Chat\CreateChat;
use App\Http\Livewire\Chat\Main;
use App\Models\Projet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\UserDashbordController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\BotmanController;


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

/*chatBot*/

Route::match(['get', 'post'], 'botman', [BotmanController::class, 'handle']);


/*

Route::get('/', function () {
    return view('welcome');
});
*/
/*Langue route*/
Route::get('/', [LangController::class, 'index']);
Route::get('lang', [LangController::class, 'change'])->name('changeLang');

Route::get('/dashboard', function () {

         // Récupération de l'id de l'utilisateur connecté
         $userId = Auth::id();

         // Récupération des projets correspondant à l'id utilisateur et à l'état 2
         $projetencours = Projet::where('user_id', $userId)
             ->where('etat', 2)
             ->get();

             $projets_termines = Projet::where('user_id', $userId)
             ->where('etat', 3)
             ->get();
             return view('dashboard', compact('projetencours','projets_termines'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/redirects',[HomeController::class,"index"])->middleware(['auth', 'verified'])->name('redirects');

##Route::get('/redirects',[HomeController::class,"index"]);


Route::get('/auth/google/redirect', [GoogleController::class ,'redirect']);    
Route::get('/auth/google/callback-url',[GoogleController::class,'callback']);



Route::get('wp-admin/Menue',[MenuController::class, 'menued']);
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
Route::post('/projet/update-state-hidden',[ProjetController::class, 'updateState_hidden'])->name('update-state-hidden');
Route::get('/yomibot',[ProjetController::class,'yomis'])->name('yomis');
Route::get('/ChatsUser',[ProjetController::class,'ChatsUser'])->name('ChatsUser');
Route::get('/details/{id}', [ProjetController::class, 'details_form'])->name('details');
Route::get('/archive', [ProjetController::class, 'archive_form'])->middleware('password.verify');
Route::post('/password/verify', [ProjetController::class, 'verifyPassword'])->name('password.verify');
Route::get('/updatetask/{id}', [ProjetController::class, 'updatetask_form'])->name('updatetask');
Route::put('/edit/{id}', [ProjetController::class, 'update'])->whereNumber('id');
Route::get('/updatetache/{id}', [ProjetController::class, 'updatetache_form'])->name('updatetache');
Route::put('/edittache/{id}', [ProjetController::class, 'update_tache'])->whereNumber('id');
/*
/*
Route::middleware(['auth', 'role:admin'])->group(function() {
    Route::get('/private', function () {
        return view('Admin');
    });
    
});
*/


//pdf route

Route::post('/download-pdf/{projet}', [App\Http\Controllers\ProjetController::class,'downloadPDF'])->name('download_pdf');

/*******/


//LiveWireRoute
Route::get('/users',CreateChat::class)->name('users');
Route::get('/chat{key?}',Main::class)->name('chat');

//Langue route

/************************Admin rout*/
Route::get('wp-admin/pages/listeUsers', [AdminUserController::class, 'index'])->name('create');
Route::get('wp-admin/pages/charts', [AdminUserController::class, 'charts'])->name('charts');
Route::get('wp-admin/pages/chatsAdmin', [AdminUserController::class, 'chatAdmin'])->name('chatAdmin');
Route::get('/projects/{userId}', [AdminUserController::class, 'displayUserProjects'])->name('listproject');
//Route::get("locale/{langue}",[LangueController::class,"setLangue"]);
    

require __DIR__.'/auth.php';
