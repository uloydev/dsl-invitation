<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParticipantController;
use App\Models\ShirtStock;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'shirt_stock' => ShirtStock::where('stock', '>', 0)->get(),
    ]);
})->name('index');

route::get("/tool", function (Request $request) {
    if ($request->has("key") && $request->get("key") == "isilop") {
        DB::statement('ALTER TABLE participants ADD checkin_at DATETIME NULL');
        return "OK";
    }
    return "NOK";
});

// Route::get('/anima', function () {
//     return view('anima');
// })->name('anima');

Route::name('participant.')->prefix('participant')->controller(ParticipantController::class)->group(function () {
    Route::post('/register', 'store')->name('register');
    Route::get('/verify', 'verify')->name('verify');
});



Route::middleware('auth')->prefix('dashboard')->name('dashboard.')->controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('index');

    // Route::get('/customer', 'customerIndex')->name('customer.index');

    Route::prefix('participant')->name('participant.')->controller(ParticipantController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        // Route::get('/customer', 'customer')->name('customer');
        // Route::post('/{participant}/pickup-kit', 'pickupKit')->name('pickup-kit');
        Route::post('/{participant}/check-in', 'checkin')->name('checkin');
    });

    // Route::get('/shirt', 'shirtIndex')->name('shirt.index');

});
// Route::prefix('doorprize')->name('doorprize.')->middleware('auth')->controller(DashboardController::class)->group(function () {
//     Route::get('/', 'doorprize')->name('index');
//     Route::get('/spin', 'doorprizeSpin')->name('spin');
//     Route::get('/{prize}/winner', 'doorprizeWinner')->name('winner');
//     Route::get('/winner/{prizeWinner}/remove', 'doorprizeDelete')->name('remove-winner');

// });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
