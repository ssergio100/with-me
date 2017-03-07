<?php

namespace App\Http\Controllers\Painel\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
class ProductController extends Controller
{
   public function index( Product $product){

       $products = $product->all();
       return view('painel.products.index', compact('products'));
   }
}
