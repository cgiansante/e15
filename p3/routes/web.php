<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\AngleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ModelController;

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

Route::get('/', [PageController::class, 'index']);
// Route::get('/fish', [FishController::class, 'index']);
Route::get('/search', [AngleController::class, 'index']);
// Route::get('/practice', [ModelController::class, 'practice']);
// Route::get('/fish', [ModelController::class, 'practice']);

Route::get('/debug', function () {
    $debug = [
        'Environment' => App::environment()
    ];

    $debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }
    dump($debug);
});