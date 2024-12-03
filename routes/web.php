<?php

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use App\Http\Controllers\AvesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('inicio');
// });

Route::get('/', [AvesController::class, 'inicio'])->name('inicio');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    $userExists = User::where('external_id', $user->id)->where('external_auth','google')->first();

    if($userExists) {
        Auth::login($userExists);
    } else {
        $userNew = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google',
        ]);

        Auth::login($userNew);
    }

    return redirect('/dashboard');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/aves', AvesController::class);
    
    Route::get('/registrar', function () {
        return view('welcome');
    });
});


require __DIR__.'/auth.php';
