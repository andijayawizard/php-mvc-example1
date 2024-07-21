<?php

namespace App\Controllers;

use App\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $this->render('contact');
    }
}
