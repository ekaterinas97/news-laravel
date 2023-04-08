<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomePageController extends Controller
{
    public function index(): View
    {
        $info = "Информация о новостном сайте";
        return view('about', [
            'info' => $info
        ]);
    }
}
