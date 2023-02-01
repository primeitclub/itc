<?php

namespace App\Http\Controllers;
use App\Models\Merchandise;

use Illuminate\Http\Request;

class MerchController extends Controller
{
    public function index() {
        $Merch = Merchandise::all();
    
        return view('frontend.merch', compact('Merch'));
    }
}
