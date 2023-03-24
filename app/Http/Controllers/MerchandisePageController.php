<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandisePageController extends Controller
{
    public function index() {
        $merchandises = Merchandise::latest()->get();
        return view('frontend.merchandise.index', compact('merchandises'));
    }
}
