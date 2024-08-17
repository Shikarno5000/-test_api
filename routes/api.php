<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CounterAgentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\ElementPriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductElementController;
use App\Http\Controllers\ProductPlkController;
use App\Http\Controllers\CounterAgentWorkerController;
use App\Http\Controllers\SubgroupController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\DpuController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\PlkController;
use App\Http\Controllers\ChapterDpuController;
use App\Http\Controllers\ChapterPlkController;
use App\Http\Controllers\ChapterSoftwareController;
use App\Http\Controllers\PlkElementController;
use App\Http\Controllers\ServerElementController;
use App\Http\Controllers\LowerLevelElementController;
use App\Http\Controllers\LowerLevelController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OfficialNoteController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ProductVersionController;
use App\Http\Controllers\ChapterElementController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\ElementCodeController;
use App\Http\Controllers\ProjectUserController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\RatioController;
use App\Http\Controllers\InternalMeetingController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\OfferController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//   return $request->user();
// });
Route::prefix('auth')->controller(AuthController::class)->group(function () {
  Route::post('/login', 'login')->name("login");
  Route::post('register', 'register');
  Route::post('logout', 'logout');
  Route::post('refresh', 'refresh');
  Route::get('user', 'user');
});
Route::prefix('test')->controller(TestController::class)->group(function () {
  Route::get('/', 'index');
});
Route::prefix('applications')->controller(ApplicationController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('chapters')->controller(ChapterController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('chapter-dpus')->controller(ChapterDpuController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('chapter-elements')->controller(ChapterElementController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('chapter-plks')->controller(ChapterPlkController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('chapter-softwares')->controller(ChapterSoftwareController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('contracts')->controller(ContractController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/select', 'select');
  Route::get('/{id}', 'show');
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('counter-agents')->controller(CounterAgentController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/select/workers/{id}', 'filteredWorkers');
  Route::get('/select', 'select');
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('counter-agent-workers')->controller(CounterAgentWorkerController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/select', 'select');
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('decisions')->controller(DecisionController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('directions')->controller(DirectionController::class)->group(function () {
  Route::post('/', 'store');
  Route::post('/pd/{id}', 'pd');
  Route::post('/rd/{id}', 'rd');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('documents')->controller(DocumentController::class)->group(function () {
  Route::post('/', 'store');
  Route::get('/{id}', 'show');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('dpus')->controller(DpuController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/select', 'select');
  Route::post('/', 'store');
  Route::get('/{id}', 'show');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('elements')->controller(ElementController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/select', 'select');
  Route::get('/all-articles', 'allArticles');
  Route::get('/{id}', 'show');
  Route::post('/array', 'addArray');
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('element-codes')->controller(ElementCodeController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('element-prices')->controller(ElementPriceController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/select/{id}', 'select');
  Route::get('/element/{id}', 'element');
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('files')->controller(FileController::class)->group(function () {
  Route::get('/','index');
  Route::get('/all','all');
  Route::post('/','store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}','delete');
});
Route::prefix('internal-meetings')->controller(InternalMeetingController::class)->group(function () {
  Route::get('/','index');
  Route::get('/{id}', 'show');
  Route::post('/','store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}','delete');
});
Route::prefix('letters')->controller(LetterController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/select', 'select');
  Route::get('/{id}', 'show');
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('lower-levels')->controller(LowerLevelController::class)->group(function () {
  Route::get('/', 'index');
  Route::post('/', 'store');
  Route::get('/{id}', 'show');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('lower-level-elements')->controller(LowerLevelElementController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('offers')->controller(OfferController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('official-notes')->controller(OfficialNoteController::class)->group(function () {
  Route::get('/', 'index');
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('orders')->controller(OrderController::class)->group(function () {
  Route::get('/', 'index');
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('participants')->controller(ParticipantController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('plks')->controller(PlkController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/select', 'select');
  Route::get('/{id}', 'show');
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('plk-elements')->controller(PlkElementController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('positions')->controller(PositionController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/select', 'select');
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('products')->controller(ProductController::class)->group(function () {
  Route::get('/', 'index');
  Route::post('/', 'store');
  Route::get('/{id}', 'show');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('product-elements')->controller(ProductElementController::class)->group(function () {
  Route::post('/array', 'addArray');
  Route::get('/del-all/{id}', 'delAll');
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('product-plks')->controller(ProductPlkController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('product-versions')->controller(ProductVersionController::class)->group(function () {
  Route::post('/{id}', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('project-users')->controller(ProjectUserController::class)->group(function () {
  Route::patch('/{id}', 'update');

});
Route::prefix('projects')->controller(ProjectController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/select', 'select');
  Route::get('/elements/{id}', 'elements');
  Route::post('/batch-editing', 'batchEditing');
  Route::post('/', 'store');
  Route::get('/{id}', 'show');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('questions')->controller(QuestionController::class)->group(function () {
  Route::post('/', 'store');
  Route::get('/{id}', 'show');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('ratios')->controller(RatioController::class)->group(function () {
  Route::get('/', 'index');
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('servers')->controller(ServerController::class)->group(function () {
  Route::get('/', 'index');
  Route::post('/', 'store');
  Route::get('/{id}', 'show');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('server-elements')->controller(ServerElementController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('softwares')->controller(SoftwareController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/select', 'select');
  Route::post('/', 'store');
  Route::get('/{id}', 'show');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('specifications')->controller(SpecificationController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/select', 'select');
  Route::post('/', 'store');
  Route::get('/{id}', 'show');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('suggestions')->controller(SuggestionController::class)->group(function () {
  Route::get('/', 'index');
  Route::post('/batch-editing', 'batchEditing');
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('stages')->controller(StageController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('subgroups')->controller(SubgroupController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('timelines')->controller(TimelineController::class)->group(function () {
  Route::post('/', 'store');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});
Route::prefix('users')->controller(UserController::class)->group(function () {
  Route::get('/user', 'user');
  Route::get('/select', 'select');
  Route::get('/', 'index');
  Route::post('/', 'store');
  Route::patch('/settings', 'updateSettings');
  Route::patch('/{id}', 'update');
  Route::delete('/{id}', 'delete');
});





