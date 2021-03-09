<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vendorController extends Controller
{
    public function getAll(){
        return view("admin.pages.Vendors");
    }
}
