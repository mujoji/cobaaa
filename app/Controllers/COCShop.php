<?php

namespace App\Controllers;

class COCShop extends BaseController
{
    public function index(): string
    {
        return view('shopcoc');
    }
}
