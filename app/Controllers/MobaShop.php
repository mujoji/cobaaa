<?php

namespace App\Controllers;

class MobaShop extends BaseController
{
    public function index(): string
    {
        return view('shopml');
    }
}