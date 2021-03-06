<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Owslider;
use App\Mail\feedback;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    // Главная станицаа
    public function index(){
        $product= new Product;
        $product=$product->where('code', 1)->get();
        $subcategory=Subcategory::all();
        $category=Category::all();
        return view('home', ['product'=>$product, 'subcategory'=>$subcategory, 'category'=>$category]);
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
        $subcategory_title= Subcategory::where('subcategory_id','=',$subcatid)->firstOrFail()->title;
        $subcategory_subtitle= Subcategory::where('subcategory_id','=',$subcatid)->first()->subtitle;
        

        return view('category',['catid'=>$catid,'product'=>$product, 'subcategory'=>$subcategory, 'category'=>$category, 'subcatid'=>$subcatid, 'subcategory_title'=>$subcategory_title, 'subcategory_subtitle'=>$subcategory_subtitle ]);
    }

    // Админка
    public function admin(){
        $category = Category::all();
        $subcategory = Subcategory::all();
        $product = Product::all();
        $owslide = Owslider::all();
        // dd($product);
        return view('admin',['category'=>$category, 'subcategory'=>$subcategory, 'product'=>$product, 'owslide' =>$owslide]);
        
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

    // Редактирование продукта
    public function edit_product($id){
        $category = Category::all();
        $subcategory = Subcategory::all();
        $product = Product::where('id', '=', $id)->first();
        return view('editproduct',['category'=>$category, 'subcategory'=>$subcategory, 'product'=>$product]);
    }

    // Обновление продукта
    public function update_product($id, Request $request){
        if($request->file('product_image')){

            $image = Product::find($id)->image;

            foreach($image as $img){
                
                Storage::disk('product_image')->delete($img);

            }

            $image = $request->file('product_image');

            $arr=array();

            foreach($image as $img){
                $x=$img->store('public','product_image');
                array_push($arr,$x);
            }
        }else{
            $arr = Product::find($id)->image;
        }
       
        $product = Product::find($id);
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

    //удаление продукта
    public function delete_product($id){

        $image = Product::find($id)->image;

        foreach($image as $img){
            
            Storage::disk('product_image')->delete($img);

        }

        $product = Product::find($id);

        $product->delete();

        return redirect()->route('admin');
    }

    // Создание подкатегории
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

    // Редактирование подкатегории
    public function edit_subcategory($id){
        $category = Category::all();
        $subcategory = Subcategory::where('id', '=', $id)->first();
        return view('edit-subcategory',['category'=>$category, 'subcategory'=>$subcategory]);
    }

    // Обновление пдкатегории

    public function update_subcategory($id, Request $request){
        $category = Category::all();
        $product = Product::all();
        $owslide = Owslider::all();
        if($request->file('subcategory_image')){

            $image = Subcategory::find($id)->image;

            foreach($image as $img){
                
                Storage::disk('subcategory_image')->delete($img);

            }

            $image = $request->file('subcategory_image');

            $arr=array();

            foreach($image as $img){
                $x=$img->store('public','subcategory_image');
                array_push($arr,$x);
            }
        }else{
            $arr = Subcategory::find($id)->image;
        }


        $subcategory = Subcategory::find($id);
        $subcategory -> image = $arr;
        $subcategory -> category_id = $subcategory->category_id;
        $subcategory -> subcategory_id = $subcategory->subcategory_id;
        $subcategory -> title = $request ->input('subcategory_name');
        $subcategory -> subtitle = $request ->input('subcategory_description');

        $subcategory ->save();

        return view('admin', ['category'=>$category, 'product'=>$product, 'owslide'=>$owslide]);
    }



    public function create_category(Request $request){
        $category = new Category();
        $category -> category_id = $request ->input('category_id');
        $category -> category_name = $request ->input('category_name');

        $category ->save();
        return redirect()->route('admin');
    }

    public function services(){
        return view('services');
    }

    public function ourworks(){
        $owslide = Owslider::all();
        return view('ourworks',["owslide" => $owslide]);
    }

    public function relatedproducts(){
        return view('relatedproducts');
    }

    public function referentlist(){
        return view('referentlist');
    }

    // Создание группы слайдов для наших работ
    public function create_owslidegroup(Request $request){

        $image = $request->file('owimage');
        
        $arr=array();

        foreach($image as $img){
            $x=$img->store('public','owimage');
            array_push($arr,$x);
        }

        $owslide = new Owslider();

        $owslide ->owimage = $arr;
        $owslide ->owtitle = $request->input('owtitle');
        $owslide ->owsubtitle = $request->input('owsubtitle');
        $owslide ->owimage_alt = $request->input('owimage_alt');
        $owslide ->owimage_desc = $request->input('owimage_desc');

        $owslide ->save();

        return redirect()->route('admin');
    }

    // Редактирование подкатегории
    public function edit_owslidegroup($id){
        $owslidegroup = Owslider::where('id', '=', $id)->first();
        return view('edit-owslidegroup',['owslidegroup'=>$owslidegroup]);
    }
    
    // Обновление группы слайдов для наших работ
    public function update_owslidegroup($id, Request $request){

        if($request->file('owimage')){

            $image = Owslider::find($id)->owimage;

            foreach($image as $img){
                
                Storage::disk('owimage')->delete($img);

            }

            $image = $request->file('owimage');

            $arr=array();

            foreach($image as $img){
                $x=$img->store('public','owimage');
                array_push($arr,$x);
            }
        }else{
            $arr = Owslider::find($id)->owimage;
        }

        $owslide = Owslider::find($id);

        $owslide ->owimage = $arr;
        $owslide ->owtitle = $request->input('owtitle');
        $owslide ->owsubtitle = $request->input('owsubtitle');
        $owslide ->owimage_alt = $request->input('owimage_alt');
        $owslide ->owimage_desc = $request->input('owimage_desc');

        $owslide ->save();

        return redirect()->route('admin');
    }

    //удаление продукта
    public function delete_owslidegroup($id){
        $image = Owslider::find($id)->owimage;

        foreach($image as $img){
            
            Storage::disk('owimage')->delete($img);

        }

        $owslider = Owslider::find($id);

        $owslider->delete();

        return redirect()->route('admin');
    }

    //Отправка письма
    public function sendmail(Request $request){
        $name = $request->name;
        $email = $request->email;
        $mess = $request->subject;
        $title = $request->message;
        
        Mail::to('ikari162@mail.ru')->send(new feedback($name, $email, $mess, $title));
        

        return redirect()->route('admin');
    }

    // Для слайдера на главной
    public function foslider($subcatid){
        $categoryforslider = Subcategory::where("subcategory_id", "=", $subcatid)->first()->category_id;
        
        return redirect()->route('category',$categoryforslider);
    }

}//закрывает класс
