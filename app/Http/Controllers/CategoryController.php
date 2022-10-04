<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {          
      $categories = Category::where('category_id', NULL)->get();
     
      return view('welcome', compact('categories'));
    } 
       
    public function subCat(Request $request)
    {
         
        $category_id = $request->cat_id;
         
        $subcategories = Category::where('id', $category_id)
                              ->with('subcategories')
                              ->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }
}
