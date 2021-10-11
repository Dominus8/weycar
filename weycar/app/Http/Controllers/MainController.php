<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    // Главная станицаа
    public function index(){
        $product= new Product;
        $product=$product->where('code', 1)->get();
        return view('home', ['product'=>$product]);
    }

    // Все категории
    public function all_category(){
        return view('all-category');
    }

    // Подкатегории и товары
    public function category($catid){
        $product= Product::where('subcategory_id','=',$catid)->get()->values()->all();
        
        

        return view('category',['catid'=>$catid,'product'=>$product]);
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
        
        $image = $request->file('product_image');//->store('storage', 'product_image')
        
        $arr=array();
        foreach($image as $img){
            $x=$img->store('public','product_image');
            array_push($arr,$x);
        }
        

        // Image::make( $request->file('product_image[]'))->fit(398, 263)->save('product_image/mob_img/'.$image);
        // Image::make( $request->file('product_image[]'))->fit(190)->save('product_image/'.$image);

        

        $product = new Product();

        $product ->image = $arr;
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
