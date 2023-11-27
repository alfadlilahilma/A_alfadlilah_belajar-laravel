<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        // Fetch categories using Eloquent ORM
        //Eloquent
        $categories = Category::all();

        //Eloquent with relation
        //$categories = Category::with("products")->get()->toArray();


        //query builder
       // $categories = DB::table('categories')->get()->toArray();

        //query builder with relation
        //$categories = DB::table('categories')->select("categories.*","products.name as product_)name")
        //->join("products","products.category_id","=","categories.id")
       // ->get();


       //raw query
       // $categories = DB::select("SELECT * FROM categories");
        //dd($categories->products);
        // Return the view with the categories
        return view("pages.category", compact("categories"));
    }
}

