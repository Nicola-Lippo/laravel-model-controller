<?php
//SONO STATO IMPORTATO(PageController)
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

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
/*
1 passo la rotta al controller
1-1 controllare in alto che sia stato importato 
2 quando avviene la chiamata a / risponde il controller
3 (controller = array) 1 elemento nome::specificare che è una classe
3-1 2 elemnto è una stringa che identifica il nome del metodo del controller
*/

Route::get('/', [PageController::class, 'index']);
