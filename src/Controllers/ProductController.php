<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products=[
            new Product('sirop ABC', '12,000', 10),
            new Product('susu UHT', '16,500', 15),
            new Product('Kopi bubuk', '25,000', 18),
            // array('nama'=>'susu uht'),
        ];
        $this->render('products', ['products'=>$products]);
    }
}
