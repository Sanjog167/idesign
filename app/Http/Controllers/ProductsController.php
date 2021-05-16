<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Input;
use Image;

class ProductsController extends Controller
{
    public function addProduct(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            $product = new Product();
            $product->category_id = $data['category_id'];
            $product->product_name = $data['name'];
            $product->product_code = $data['code'];
            $product->product_color = $data['color'];
            $product->description = $data['description'];
            $product->price= $data['price'];

            if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $large_image_path = 'assets/images/back_images/products/large/'.$filename;
                    $medium_image_path = 'assets/images/back_images/products/medium/'.$filename;
                    $small_image_path = 'assets/images/back_images/products/small/'.$filename;

                    //Resize Images
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    //Store image name in products table 
                    $product->image = $filename;

                }
            }


            $product->save();
            return redirect('/admin/view-products')->with('flash_message_success','Product has been added successfully!');
        }
        $categories = Category::where(['parent_id'=>0])->get();
        $categories_dropdown  = "<option select disabled></option>";
        foreach($categories as $cat){
    		$categories_dropdown .= "<option value='".$cat->id."'>".$cat->name."</option>";
    		$sub_categories = Category::where(['parent_id'=>$cat->id])->get();
    		foreach($sub_categories as $sub_cat){
    			$categories_dropdown .= "<option value='".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
    		}
    	}
        return view('admin.products.add_product')->with(compact('categories_dropdown'));
    }

    public function viewProducts(){
        $products = Product::get();
        foreach($products as $key => $val){
            $category_name = Category::where(['id'=>$val->category_id])->first();
            $products[$key]->category_name = $category_name['name'];
        }
        return view('admin.products.view_products')->with(compact('products'));
    }

    public function editProduct(Request $request, $id=null){

        if($request->isMethod('post')){
            $data = $request->all();
           


                      //image upload
            if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $large_image_path = 'assets/images/back_images/products/large/'.$filename;
                    $medium_image_path = 'assets/images/back_images/products/medium/'.$filename;
                    $small_image_path = 'assets/images/back_images/products/small/'.$filename;

                    //Resize Images
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } else{
                $filename = $data['current_image'];
            }

                  

              
              
              Product::where(['id'=>$id])->update(['category_id'=>$data['category_id'],'product_name'=>$data['name'],'product_code'=>$data['code'],'product_color'=>$data['color'],'description'=>$data['description'],'price'=>$data['price'],'image'=>$filename]);


            return redirect('/admin/view-products')->with('flash_message_success','Product updated successfully!');
        }

        // Get Product Details
        $productDetails = Product::where(['id'=>$id])->first();

                // Categories dropdown start

        $categories = Category::where(['parent_id'=>0])->get();
        $categories_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($categories as $cat){
            if($cat->id==$productDetails->category_id){
                $selected = "selected";
            }
            else{
                $selected = "";
            }
            $categories_dropdown .= "<option value='".$cat->id."' ".$selected.">".$cat->name."</option>";
            $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
            foreach($sub_categories as $sub_cat){
                            if($sub_cat->id==$productDetails->category_id){
                $selected = "selected";
            }
            else{
                $selected = "";
            }
                $categories_dropdown .= "<option value= '".$sub_cat->id."' ".$selected.">&nbsp;--&nbsp;".$sub_cat->name."</option>";
            }
        }

        // Categories dropdown ends

        return view('admin.products.edit_product')->with(compact('productDetails','categories_dropdown'));
    }

    public function deleteProduct($id = null){
        Product::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Product has been deleted successfully');
    
    }

    public function products($url = null){

        //Get all categroeies and subcategories  
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();

        $categoryDetails = Category::where(['url' => $url])->first();

        //$mainCategory = Category::where(['cat' => $$cat])->get();

        if($categoryDetails->parent_id==0){

            //For main category url
            $subCategories = Category::where(['parent_id'=>$categoryDetails->id])->get();
            foreach($subCategories as $subcat){
                $cat_ids[] = $subcat->id;
            }
             $productsAll = Product::whereIn('category_id', $cat_ids)->get();
             $productsAll = json_decode(json_encode($productsAll));

        }else{
            // If url is sub category url
              $productsAll = Product::where(['category_id'=> $categoryDetails->id])->get();
        }
      

      
        return view('products.listing')->with(compact('productsAll', 'categoryDetails', 'categories'));
    }

    public function product($id = null){
        $productDetails = Product::where('id',$id)->first();
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        return view('products.detail')->with(compact('categories','productDetails'));
    }



}
