<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductCont extends Controller
{
    public function fetchAll(){
      $res = Product::get();
      return $res;
    }

    public function getAllProduct(){
      return view("product", [
        "product" => $this->fetchAll()
      ]);
    }

    public function getSpecificProduct(String $det){

      $product = Product::where("image", "=", "$det")->get();
      return view("productdetail", [
        "product" => $product[0]
      ]);

    }

    public function getSearchedProduct(Request $req){
      $q = $req->search;

      $product = Product::where("name", "LIKE", "%$q%")->get();
      return view("product", [
        "product" => $product,
        "search" => $q
      ]);
    }

}
