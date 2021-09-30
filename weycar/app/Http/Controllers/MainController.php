<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Главная станицаа
    public function index(){
        return view('home');
    }

    // Все категории
    public function all_category(){
        return view('all-category');
    }

    // Подкатегории и товары
    public function category(){
        return view('category');
    }
}
