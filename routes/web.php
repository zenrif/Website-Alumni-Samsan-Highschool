<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Alumni;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostHomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AlumniFundController;
use App\Http\Controllers\ForgotPasswordController;

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
    // $pecah = explode("-", Alumni::get('tgl_lahir'));
    // $tgl_lahir = date('d-m', strtotime(Alumni::all('tgl_lahir')));
    // Mengecek tanggal lahir
    $tgl = now()->format('d');
    $bulan = now()->format('m');
    // Mendapatkan data alumni yang ultah hari ini
    $cek = Alumni::whereDay('tgl_lahir', $tgl)->whereMonth('tgl_lahir', $bulan)->get();
    // dd($cek);
    return view('home', [
        'jumlah_members' => User::count('id'),
        'jumlah_artikel' => Post::count('id'),
        // 'data_ultah' => Alumni::where('tgl_lahir', '2001-04-04')->get(),
        'data_ultah' => Alumni::whereDay('tgl_lahir', $tgl)->whereMonth('tgl_lahir', $bulan)->get(),
        'last_post' => Post::latest()->first(),
        // DB::table('users')->whereDate($day);
        // DB::table('users')->whereMonth($month);
        // DB::table('users')->whereYear($year);
    ]);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'navbar' => 'Dashboard',
    ]);
})->middleware('auth');

Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');

Route::resource('/dashboard/member', MemberController::class)->middleware('auth');

Route::resource('/dashboard/myarticle', PostController::class)->middleware('auth');

Route::resource('/dashboard/artikel', ArtikelController::class)->middleware('admin');

Route::resource('/dashboard/admin', AdminController::class)->middleware('super_admin');

Route::resource('/artikel', PostHomeController::class);

// Route lupa password
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::resource('/dashboard/dana-alumni', AlumniFundController::class)->middleware('auth');
