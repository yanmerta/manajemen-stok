<?php
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\admin\ContainerMenuController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FiturController;
use App\Http\Controllers\admin\HomePageController;
use App\Http\Controllers\admin\HomeSliderController;
use App\Http\Controllers\admin\HomeSliderImageController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\MasterLanguageController as AdminMasterLanguage;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FiturMenuController;
use App\Http\Controllers\admin\FiturContainerMenuController;







Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/admin', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login_proses'])->name('login.proses');


Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'],
    function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin', [DashboardController::class, 'index'])->name('index');
    Route::get('/logout', [LogoutController::class, 'process'])->name('logoutProcess');

    //Update Perofile Admin
    Route::get('/profile', [ProfileController::class,'index',])->name('profile.index');
    Route::patch('/profile/{id}', [ProfileController::class,'update',])->name('profile.update');

    //Manajamen Data User
    Route::get('/admin/users', [adminController::class, 'index'])->name('admin.users');
    Route::get('admin-users/create', [adminController::class, 'create'])->name('admin.users.create');
    Route::post('admin-users', [adminController::class, 'store'])->name('admin.users.store');
    Route::get('/admin-users/{user}/edit', [adminController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin-users/{user}/update', [adminController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}/delete', [adminController::class, 'destroy'])->name('admin.users.delete');

    //Home Page 
    Route::get('/admin/home', [HomePageController::class, 'index'])->name('admin.home.index');
    Route::get('/home/create', [HomePageController::class, 'create'])->name('admin.home.create');
    Route::post('/home/store', [HomePageController::class, 'store'])->name('admin.home.store');
    Route::get('home/{home_id}/edit', [HomePageController::class, 'edit'])->name('admin.home.edit');
    Route::put('/home/{id}', [HomePageController::class, 'update'])->name('admin.home.update');
    Route::delete('/home/{id}', [HomePageController::class, 'destroy'])->name('admin.home.destroy');

    //Home Slider
    Route::get('/admin/hms', [HomeSliderController::class, 'index'])->name('admin.hms.index');
    Route::get('/admin/hms/create', [HomeSliderController::class, 'create'])->name('admin.hms.create');
    Route::post('/admin/hms', [HomeSliderController::class, 'store'])->name('admin.hms.store');
    Route::get('/admin/hms/{id}', [HomeSliderController::class, 'show'])->name('admin.hms.show');
    Route::get('/admin/hms/edit/{id}', [HomeSliderController::class, 'edit'])->name('admin.hms.edit');
    Route::post('/admin/hms/update/{id}', [HomeSliderController::class, 'update'])->name('admin.hms.update');
    Route::delete('/admin/hms/destroy/{id}', [HomeSliderController::class, 'destroy'])->name('admin.hms.destroy');  
    
    
    Route::get('homeslider/image', [HomeSliderImageController::class, 'index'])->name('admin.hms.image.index');
    Route::get('homeslider/image/create', [HomeSliderImageController::class, 'create'])->name('admin.hms.image.create');
    Route::post('homeslider/image/store', [HomeSliderImageController::class, 'store'])->name('admin.hms.image.store');
    Route::get('homeslider/image/{id}/edit', [HomeSliderImageController::class, 'edit'])->name('admin.hms.image.edit');
    Route::put('homeslider/image/{id}/update', [HomeSliderImageController::class, 'update'])->name('admin.hms.image.update');
    Route::delete('homeslider/image/{id}/delete', [HomeSliderImageController::class, 'destroy'])->name('admin.hms.image.delete');


     
    Route::get('container/', [ContainerMenuController::class, 'index'])->name('admin.container.index');
    Route::get('container/create', [ContainerMenuController::class, 'create'])->name('admin.container.create');
    Route::post('container/store', [ContainerMenuController::class, 'store'])->name('admin.container.store');
    Route::get('container/{id}/edit', [ContainerMenuController::class, 'edit'])->name('admin.container.edit');
    Route::put('container/{id}/update', [ContainerMenuController::class, 'update'])->name('admin.container.update');
    Route::delete('container/{id}/delete', [ContainerMenuController::class, 'destroy'])->name('admin.container.delete');
    

    Route::get('/admin/fitur', [FiturController::class, 'index'])->name('admin.fitur.index');
    Route::post('/fitur/store', [FiturController::class, 'store'])->name('admin.home.store');
    Route::get('home/{home_id}/edit', [FiturController::class, 'edit'])->name('admin.home.edit');
    Route::put('/fitur/{id}', [FiturController::class, 'update'])->name('admin.fitur.update');


    Route::get('fitur/', [FiturContainerMenuController::class, 'index'])->name('fiturmenu.index');
    Route::get('fitur/create', [FiturContainerMenuController::class, 'create'])->name('fiturmenu.create');
    Route::post('fitur-container/store', [FiturContainerMenuController::class, 'store'])->name('fiturmenu.store');
    Route::get('fitur-container/{id}/edit', [FiturContainerMenuController::class, 'edit'])->name('fiturmenu.edit');
    Route::put('fitur/{id}/update', [FiturContainerMenuController::class, 'update'])->name('fiturmenu.update');
    Route::delete('fitur/{id}/delete', [FiturContainerMenuController::class, 'destroy'])->name('fiturmenu.delete');
});

Route::get('/list', [AdminMasterLanguage::class, 'list'])->name('masterLanguageList');
Route::get('/create', [AdminMasterLanguage::class, 'create'])->name('masterLanguageCreate');
Route::post('/insert', [AdminMasterLanguage::class, 'insert'])->name('masterLanguageInsert');
Route::get('/edit/{language_id}', [AdminMasterLanguage::class, 'edit'])->name('masterLanguageEdit');
Route::post('/update/{language_id}', [AdminMasterLanguage::class, 'update'])->name('masterLanguageUpdate');
Route::get('/delete/{language_id}', [AdminMasterLanguage::class, 'delete'])->name('masterLanguageDelete');







