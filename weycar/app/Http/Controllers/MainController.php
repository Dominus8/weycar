<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Category;

class MainController extends Controller
{
    // Главная станицаа
    public function index(){
        $product= new Product;
        $product=$product->where('code', 1)->get();
        $subcategory=Subcategory::all();
        return view('home', ['product'=>$product, 'subcategory'=>$subcategory]);
    }

    // Все категории
    public function all_category(){
        $subcategory=Subcategory::all();
        return view('all-category', ['subcategory'=>$subcategory]);
    }

    // Подкатегории и товары
    public function category($catid){


        $category = Category::where('category_id','=',$catid)->first();
        
        
        $subcategory = Subcategory::where('category_id','=',$catid)->get()->values()->all();

        $arr = array();
            foreach($subcategory as $el){
                $x = $el->subcategory_id;
                $y = Product::where('subcategory_id','=',$x)->get()->values()->all();
                array_push($arr, $y);
            }
          
        
        $product = array();
        
            foreach($arr as $el){
                
                $product =array_merge($product,$el);
                // if(count($el)){                
                //     $x=$el[0];
                //     array_push($product,$x);
                // }

            }
         
        return view('category',['catid'=>$catid,'product'=>$product, 'subcategory'=>$subcategory, 'category'=>$category ]);
    }

    // Подкатегории и товары
    public function subcategory($catid, $subcatid){

        $category = Category::where('category_id','=',$catid)->first();
        
        $subcategory = Subcategory::where('category_id','=',$catid)->get()->values()->all();
        $product= Product::where('subcategory_id','=',$subcatid)->get()->values()->all();
        $subcategory_title= Subcategory::where('subcategory_id','=',$subcatid)->first()->title;
        

        return view('category',['catid'=>$catid,'product'=>$product, 'subcategory'=>$subcategory, 'category'=>$category, 'subcatid'=>$subcatid, 'subcategory_title'=>$subcategory_title ]);
    }

    // Админка
    public function admin(){
        $category = Category::all();
        $subcategory = Subcategory::all();
        return view('admin',['category'=>$category, 'subcategory'=>$subcategory]);
        
    }

    // Создание продукта
    public function create_product(Request $request){

        $image = $request->file('product_image');
        
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

    // Создание категории
    public function create_subcategory(Request $request){
        $subcategory = new Subcategory();
        $subcategory -> image = $request->file('subcategory_image')->store('public','subcategory_image');
        $subcategory -> category_id = $request ->input('category_id');
        $subcategory -> subcategory_id = $request ->input('subcategory_id');
        $subcategory -> title = $request ->input('subcategory_name');
        $subcategory -> subtitle = $request ->input('subcategory_description');

        $subcategory ->save();
        return redirect()->route('admin');
    }

    public function create_category(Request $request){
        $category = new Category();
        $category -> category_id = $request ->input('category_id');
        $category -> category_name = $request ->input('category_name');

        $category ->save();
        return redirect()->route('admin');
    }
}//закрывает класс
