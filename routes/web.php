<?php
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\combineController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\ContainerMenuController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FiturContainerMenuController;
use App\Http\Controllers\admin\FiturController;
use App\Http\Controllers\admin\FiturMenuController;
use App\Http\Controllers\admin\Gallery_imageController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\HomePageController;
use App\Http\Controllers\admin\HomeSliderController;
use App\Http\Controllers\admin\HomeSliderImageController;
use App\Http\Controllers\admin\listPriceController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\MasterLanguageController as AdminMasterLanguage;
use App\Http\Controllers\admin\Paket_TerjangkauController;
use App\Http\Controllers\admin\PaketTerbaikController;
use App\Http\Controllers\admin\PriceController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\workprocces_2Controller;
use App\Http\Controllers\admin\workproccesController;
use App\Http\Controllers\user\FrontpageController;
use Illuminate\Support\Facades\Route;









    // Halaman Frontpage
    Route::get('/', [FrontpageController::class, 'index'])->name('frontpage.index');
    Route::get('/fitur', [FrontpageController::class, 'fitur'])->name('frontpage.fitur');
    Route::get('/gallery', [FrontpageController::class, 'gallery'])->name('frontpage.gallery');
    Route::get('/price', [FrontpageController::class, 'price'])->name('frontpage.price');
    Route::get('/blog', [FrontpageController::class, 'blog'])->name('frontpage.blog');

    // Halaman Login admin
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
    Route::delete('/admin/profile/{id}/delete-photo', [ProfileController::class, 'deletePhoto'])->name('profile.delete-photo');

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
    
    // Home Slider Image
    Route::get('homeslider/image', [HomeSliderImageController::class, 'index'])->name('admin.hms.image.index');
    Route::get('homeslider/image/create', [HomeSliderImageController::class, 'create'])->name('admin.hms.image.create');
    Route::post('homeslider/image/store', [HomeSliderImageController::class, 'store'])->name('admin.hms.image.store');
    Route::get('homeslider/image/{id}/edit', [HomeSliderImageController::class, 'edit'])->name('admin.hms.image.edit');
    Route::put('homeslider/image/{id}/update', [HomeSliderImageController::class, 'update'])->name('admin.hms.image.update');
    Route::delete('homeslider/image/{id}/delete', [HomeSliderImageController::class, 'destroy'])->name('admin.hms.image.delete');


    //  container
    Route::get('container/', [ContainerMenuController::class, 'index'])->name('admin.container.index');
    Route::get('container/create', [ContainerMenuController::class, 'create'])->name('admin.container.create');
    Route::post('container/store', [ContainerMenuController::class, 'store'])->name('admin.container.store');
    Route::get('container/{id}/edit', [ContainerMenuController::class, 'edit'])->name('admin.container.edit');
    Route::put('container/{id}/update', [ContainerMenuController::class, 'update'])->name('admin.container.update');
    Route::delete('container/{id}/delete', [ContainerMenuController::class, 'destroy'])->name('admin.container.delete');
    
    // Halaman Fitur
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


    Route::get('/workprocces', [workproccesController::class, 'index'])->name('workprocces.index');
    Route::post('/workprocces/store', [workproccesController::class, 'store'])->name('workprocces.store');
    Route::put('/workprocces/{id}', [workproccesController::class, 'update'])->name('workprocces.update');

    Route::get('/workprocces_2', [workprocces_2Controller::class, 'index'])->name('workprocces_2.index');
    Route::post('/workprocces_2/store', [workprocces_2Controller::class, 'store'])->name('workprocces_2.store');
    Route::put('/workprocces_2/{id}', [workprocces_2Controller::class, 'update'])->name('workprocces_2.update');

    // Halaman Gallery
    Route::get('gallery/image', [Gallery_imageController::class, 'index'])->name('gallery.image.index');
    Route::get('gallery/image/create', [Gallery_imageController::class, 'create'])->name('gallery.image.create');
    Route::post('gallery/image/store', [Gallery_imageController::class, 'store'])->name('gallery.image.store');
    Route::get('gallery/image/{id}/edit', [Gallery_imageController::class, 'edit'])->name('gallery.image.edit');
    Route::put('gallery/image/{id}/update', [Gallery_imageController::class, 'update'])->name('gallery.image.update');
    Route::delete('gallery/image/{id}/delete', [Gallery_imageController::class, 'destroy'])->name('gallery.image.delete');


    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::put('/gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');

    Route::get('/combine', [combineController::class, 'index'])->name('combine.index');
    Route::post('/combine/store', [combineController::class, 'store'])->name('combine.store');
    Route::put('/combine/{id}', [combineController::class, 'update'])->name('combine.update');

    // Halaman Price
    Route::get('/price', [PriceController::class, 'index'])->name('price.index');
    Route::post('/price/store', [PriceController::class, 'store'])->name('price.store');
    Route::put('/price/{id}', [PriceController::class, 'update'])->name('price.update');


    Route::get('listprice/', [listPriceController::class, 'index'])->name('listprice.index');
    Route::get('listprice/create', [ListPriceController::class, 'create'])->name('listprice.create');
    Route::post('listprice/store', [ListPriceController::class, 'store'])->name('listprice.store');
    Route::get('listprice/{id}/edit', [ListPriceController::class, 'edit'])->name('listprice.edit');
    Route::put('listprice/{id}/update', [ListPriceController::class, 'update'])->name('listprice.update');
    Route::delete('listprice/{id}/delete', [ListPriceController::class, 'destroy'])->name('listprice.delete');


    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
    Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');



    Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('categories/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('categories/{id}/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('categories/{id}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');



Route::get('admin/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('admin/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('admin/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('admin/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('admin/blog/{id}/update', [BlogController::class, 'update'])->name('blog.update');
Route::delete('admin/blog/{id}/delete', [BlogController::class, 'destroy'])->name('blog.destroy');

});

Route::get('/list', [AdminMasterLanguage::class, 'list'])->name('masterLanguageList');
Route::get('/create', [AdminMasterLanguage::class, 'create'])->name('masterLanguageCreate');
Route::post('/insert', [AdminMasterLanguage::class, 'insert'])->name('masterLanguageInsert');
Route::get('/edit/{language_id}', [AdminMasterLanguage::class, 'edit'])->name('masterLanguageEdit');
Route::post('/update/{language_id}', [AdminMasterLanguage::class, 'update'])->name('masterLanguageUpdate');
Route::get('/delete/{language_id}', [AdminMasterLanguage::class, 'delete'])->name('masterLanguageDelete');







