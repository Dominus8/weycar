<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

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

    // Подкатегории и товары
    public function admin(){
        return view('admin');
    }

    //Создание карточки направления
    public function create_product(Request $request){

        // $valid = $request->validate([
        //     'direction_card_image'=>'required',
        //     'direction_card_title'=>'required|max:40',
        //     'direction_card_link'=>'required|max:40',
        // ]);

        // $image = $request->file('direction_card_image')->store('storage', 'directions_image');

        // Image::make( $request->file('direction_card_image'))->fit(398, 263)->save('storage/directions_image/mob_img/'.$image);
        // Image::make( $request->file('direction_card_image'))->fit(190)->save('storage/directions_image/'.$image);

        $product = new Product();
        $product ->image = 'image';
        $product ->subcategory_id = $request->input('product_subcategory_id');
        $product ->name = $request->input('product_name');
        $product ->description = $request->input('product_description');
        $product ->specifications = $request->input('product_specifications');
        $product ->accessories = $request->input('product_accessories');
        $product ->price = $request->input('product_price');
        $product ->code = $request->input('product_code');

        $product ->save();

        return redirect()->route('admin');
    }
}//закрывает класс
