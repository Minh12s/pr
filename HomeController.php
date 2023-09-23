<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function quanlynhanvien(){
        return view("pages.admin.quanlynhanvien");
    }
    public function quanlykhachhang(){
        return view("pages.nhanvien.quanlykhachhang");
    }

    public function homeCustomer(){
        return view("pages.customer.home");
    }

    public function shop(){
        return view("pages.customer.shop");
    }

    public function favorites_list(){
        return view("pages.customer.favorites_list");
    }

    public function product(){
        return view("pages.customer.product");
    }
    public function cart(){
        return view("pages.customer.cart");
    }

    public function checkout(){
        return view("pages.customer.checkout");
    }

    public function about(){
        return view("pages.customer.about");
    }

    public function contact(){
        return view("pages.customer.contact");
    }


}
