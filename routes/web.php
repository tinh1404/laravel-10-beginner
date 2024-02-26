<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    //fetch all users
    // $users = DB::select("SELECT * FROM users");
    // $users = DB::table('users')->find(2);
    // $users = DB::table('users')->where('id',2)->first();
    // $users = User::where('id', 1)->first();
    // $users = User::find(2);

    //create new user

    // $user = DB::insert('INSERT INTO users (username,email,password) VALUES (?,?,?)', [
    //     'TrungTinh',
    //     'thitinh@gmail.com',
    //     'password',
    // ]);
    // $user = DB::table('users')->insert([
    //     'username' => 'TrungTinh',
    //     'email' => 'TrungTinh3@gmail.com',
    //     'password' => 'password',
    // ]);
    // $user = User::create([
    //     'username' => 'TrungTinh',
    //     'email' => 'TrungTinh4@gmail.com',
    //     'password' =>'password',
    // ]);

    //update a user
    // $user = DB::update("UPDATE users SET email=? WHERE id =?",[
    //     'thitrung3@gmail.com',
    //     2,
    // ]);
    // $user = DB::table('users')->where('id',4)->update(['email' => 'abc@gmail.com']);
    // $user = User::where('id',1)->update(['email'=> 'abc@gmail.com']);

    //delete a user
    // $user = DB::delete('DELETE FROM users WHERE id =3');
    // $user = DB::table('users')->where('id',4)->delete();
    // $user = User::where('id',1)->delete();

    // dd($users->username);
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
