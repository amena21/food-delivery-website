<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegisteredUserList;
use App\Http\Controllers\SpecialitemController;
use App\Http\Controllers\FullmenuController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Slider;
use App\Http\Controllers\Index;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Time;
use App\Http\Controllers\AddCartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PlaceOrderController;
use Illuminate\Support\Facades\Auth;

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


// Auth::routes();


//register_login
Route::post('/register-user',[Authentication::class,'registerUser'])->name('register-user');
Route::post('/index',[Authentication::class,'loginUser'])->name('index');
Route::get('/index',[Authentication::class,'loginUser'])->name('index');
//logout
Route::get('/logout',[Authentication::class,'logout'])->name('logout');
//adminpanel view

// Route::view("adminprofile","admin.adminprofile");
Route::get('/adminprofile',[RegisteredUserList::class,'adminlogininfo'])->name('adminprofile');
Route::get('/editadminprofile/{id}',[RegisteredUserList::class,'editadminprofile']);
Route::post('/updateadminprofile/{id}',[RegisteredUserList::class,'updateadminprofile']);

//slider 
// Route::get('/slider',[Slider::class,'slider'])->name('slider');
Route::post('/addslider',[Slider::class,'addslider'])->name('addslider');
Route::get('/viewslider',[Slider::class,'viewslider'])->name('viewslider');
Route::get('/deleteslider/{id}',[Slider::class,'deleteslider']);
Route::get('/editslider/{id}',[Slider::class,'editslider']);
Route::post('/updateslider/{id}',[Slider::class,'updateslider']);

//about

// Route::get('/about',[AboutController::class,'about'])->name('about');
Route::post('/addabout',[AboutController::class,'addabout'])->name('addabout');
Route::get('/viewabout',[AboutController::class,'viewabout'])->name('viewabout');
Route::get('/deleteabout/{id}',[AboutController::class,'deleteabout']);
Route::get('/editabout/{id}',[AboutController::class,'editabout']);
Route::post('/updateabout/{id}',[AboutController::class,'updateabout']);

//Special item


Route::get('/specialitem',[SpecialitemController::class,'specialitem'])->name('specialitem');
Route::post('/addspecialitem',[SpecialitemController::class,'addspecialitem'])->name('addspecialitem');
Route::get('/viewspecialitem',[SpecialitemController::class,'viewspecialitem'])->name('viewspecialitem');
Route::get('/deletespecialitem/{id}',[SpecialitemController::class,'deletespecialitem']);
Route::get('/editspecialitem/{id}',[SpecialitemController::class,'editspecialitem']);
Route::post('/updatespecialitem/{id}',[SpecialitemController::class,'updatespecialitem']);

//full menu


Route::get('/fullmenu',[FullmenuController::class,'fullmenu'])->name('fullmenu');
Route::post('/addfullmenu',[FullmenuController::class,'addfullmenu'])->name('addfullmenu');
Route::get('/viewfullmenu',[FullmenuController::class,'viewfullmenu'])->name('viewfullmenu');
Route::get('/deletefullmenu/{id}',[FullmenuController::class,'deletefullmenu']);
Route::get('/editfullmenu/{id}',[FullmenuController::class,'editfullmenu']);
Route::post('/updatefullmenu/{id}',[FullmenuController::class,'updatefullmenu']);

//Testimonial


Route::get('/testimonial',[TestimonialController::class,'testimonial'])->name('testimonial');
Route::post('/addtestimonial',[TestimonialController::class,'addtestimonial'])->name('addtestimonial');
Route::get('/viewtestimonial',[TestimonialController::class,'viewtestimonial'])->name('viewtestimonial');
Route::get('/deletetestimonial/{id}',[TestimonialController::class,'deletetestimonial']);
Route::get('/edittestimonial/{id}',[TestimonialController::class,'edittestimonial']);
Route::post('/updatetestimonial/{id}',[TestimonialController::class,'updatetestimonial']);

//Gallery

Route::get('/gallery',[GalleryController::class,'gallery'])->name('gallery');
Route::post('/addgallery',[GalleryController::class,'addgallery'])->name('addgallery');
Route::get('/viewgallery',[GalleryController::class,'viewgallery'])->name('viewgallery');
Route::get('/deletegallery/{id}',[GalleryController::class,'deletegallery']);
Route::get('/editgallery/{id}',[GalleryController::class,'editgallery']);
Route::post('/updategallery/{id}',[GalleryController::class,'updategallery']);

//Contact

Route::get('/admincontact',[ContactController::class,'contact'])->name('contact');
Route::post('/addcontact',[ContactController::class,'addcontact'])->name('addcontact');
Route::get('/viewcontact',[ContactController::class,'viewcontact'])->name('viewcontact');
Route::get('/deletecontact/{id}',[ContactController::class,'deletecontact']);
Route::get('/editcontact/{id}',[ContactController::class,'editcontact']);
Route::post('/updatecontact/{id}',[ContactController::class,'updatecontact']);

//opening time

Route::post('/addopeningtime',[Time::class,'addopeningtime']);
Route::get('/viewopeningtime',[Time::class,'viewopeningtime'])->name('viewopeningtime');
Route::get('/deleteopeningtime/{id}',[Time::class,'deleteopeningtime']);
Route::get('/editopeningtime/{id}',[Time::class,'editopeningtime']);
Route::post('/updateopeningtime/{id}',[Time::class,'updateopeningtime']);
//Orders
Route::get('/orders',[PlaceOrderController::class,'viewadminorders']);

Route::get('/deliveredorders',[PlaceOrderController::class,'viewdeliveredorders']);
Route::get('/editorders/{id}',[PlaceOrderController::class,'editorders']);


Route::view("addslider","admin.slider.addslider");
Route::view("addopeningtime","admin.time.addopeningtime");
// Route::view("editslider","admin.slider.editslider");
Route::view("addabout","admin.about.addabout");
// Route::view("editabout","admin.editabout");
Route::view("addspecialitem","admin.special_item.addspecialitem");
// Route::view("editspecialitem","admin.editspecialitem");
Route::view("addfullmenu","admin.full_menu.addfullmenu");
// Route::view("editfullmenu","admin.editfullmenu");
Route::view("addtestimonial","admin.testimonial.addtestimonial");
// Route::view("edittestimonial","admin.edittestimonial");
Route::view("addgallery","admin.gallery.addgallery");
// Route::view("editgallery","admin.editgallery");
Route::view("registereduser","admin.registereduser");
Route::view("addcontact","admin.contact.addcontact");
Route::get('/registereduser',[RegisteredUserList::class,'user'])->name('registereduser');







//main front end view 



Route::get('/',[Index::class,'headmenu']);
Route::get('/index/{id}',[Index::class,'viewindex']);
Route::get('/about/{id}',[Index::class,'viewabout']);
Route::get('/menu/{id}',[Index::class,'viewmenu']);
Route::get('/contact/{id}',[Index::class,'viewcontact']);
// Route::get('/contact',[Index::class,'viewcontact']);

Route::get('/fullmenu',[Index::class,'viewfullmenu']);
Route::get('/contactus',[Index::class,'viewcontactus']);

Route::post('/addcart/{id}',[AddCartController::class,'addcart']);

Route::get('/cart',[AddCartController::class,'viewcart']);
Route::get('/deletecart/{id}',[AddCartController::class,'deletecart']);


Route::view('/checkout','checkout');
Route::get('/profile/{id}',[UserController::class,'profile']);
Route::get('/orders/{id}',[PlaceOrderController::class,'vieworders']);
Route::view('/about','about');
Route::view('/contact','contact');

Route::get('/checkout',[CheckoutController::class,'viewcheckout']);
Route::post('/place_order/{id}',[PlaceOrderController::class,'placeorder']);

Route::view('/viewsuccessfulorders/{id}',[PlaceOrderController::class,'viewsuccessfulorders']);
Route::get('/deletesuccessorder/{id}',[PlaceOrderController::class,'deletesuccessorder']);



Route::get('/deleteorder/{id}',[PlaceOrderController::class,'deleteorder']);

Route::put('/update_order/{id}',[PlaceOrderController::class,'updateorder']);
