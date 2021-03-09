<?php

use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Login_Controller;
use App\Http\Controllers\Admin\Languages;
use App\Http\Controllers\Admin\MainCategory;
use Illuminate\Support\Facades\Route;

define("PAGINATION_COUNT",10);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|http://localhost/lar.com/admin/login
*/

Route::group(["middleware"=>"auth:admin","namespace"=>"Admin"],function (){
  ## GET
    Route::get('/', [Dashboard::class,"indexPage"])->name("admin.dashboard");

    ## LOGOUT
        Route::get("logout",[Dashboard::class,"logout"])->name("admin.logout");

    ###############################  START LANGUAGES ROUTES ###############################
    Route::group(["prefix"=>"LangS","namespace"=>"Admin"],function (){
    ## GET
        Route::get('/', [Languages::class,"allLang"])->name("all.admin.langS");
    ## GET
        Route::get('/newLang', [Languages::class,"createLang"])->name("newLang");
    ## POST
        Route::post('/setNewLang',[Languages::class,"_addNewLang"])->name("setNewLang");
    ## GET
        Route::get('/editLang/{id}', [Languages::class,"editLang"])->name("editLang");
    ## POST
        Route::post('/setUpdateLang/{id}',[Languages::class,"_updateLang"])->name("setUpdateLang");
    ## DELETE
        Route::get('/DeleteLang/{id}',[Languages::class,"_deleteLang"])->name("setDeleteLang");
    });
    ###############################  END LANGUAGES ROUTES ###############################

    ###############################  START MAIN CATEGORIES ROUTES ###############################
    Route::group(["prefix"=>"MCategories","namespace"=>"Admin"],function (){
    ## GET
        Route::get('/', [MainCategory::class,"getAll"])->name("all.admin.MCategories");
    ## GET
        Route::get('/addNew', [MainCategory::class,"createNew"])->name("newMCategories");
    ## POST
        Route::post('/setNew',[MainCategory::class,"_addNew"])->name("setNewMCategories");
    ## GET
        Route::get('/editData/{id}', [MainCategory::class,"editData"])->name("editMCategories");
    ## POST
        Route::post('/setUpdate/{id}',[MainCategory::class,"_setUpdate"])->name("setUpdateMCategories");
    ## DELETE
        Route::get('/DeleteLang/{id}',[MainCategory::class,"_deleteLang"])->name("setDeleteMCategories");

    });
    ###############################  END MAIN CATEGORIES ROUTES ###############################

    ###############################  START VENDORS ROUTES ###############################

    Route::group(["prefix"=>"vendors","namespace"=>"Admin"],function (){
    ## GET
        Route::get('/', [MainCategory::class,"getAll"])->name("all.admin.vendors");
    ## GET
        Route::get('/addNew', [MainCategory::class,"createNew"])->name("newVendor");
    ## POST
        Route::post('/setNew',[MainCategory::class,"_addNew"])->name("setNewVendor");
    ## GET
        Route::get('/editData/{id}', [MainCategory::class,"editData"])->name("editVendor");
    ## POST
        Route::post('/setUpdate/{id}',[MainCategory::class,"_setUpdate"])->name("setUpdateVendor");
    ## DELETE
        Route::get('/DeleteLang/{id}',[MainCategory::class,"_deleteLang"])->name("setDeleteVendor");

    });
    ###############################  END VENDORS ROUTES ###############################

});

Route::group(['middleware'=>'guest:admin',"namespace"=>"Admin"],function (){
    ## GET
    Route::get('/login', [login_Controller::class,'get_login'])->name("admin.login.form");
    ## POST
    Route::post('/Post_login', [login_Controller::class,'_login'])->name("admin_login");
});
