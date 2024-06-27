<?php

namespace App\Controllers;

class ProductDetails extends BaseController
{
    public function index(): string
    {
        return view('product-details');
    }
}
