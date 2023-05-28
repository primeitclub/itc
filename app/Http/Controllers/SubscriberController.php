<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriberRequest;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(StoreSubscriberRequest $request) {
        Subscriber::create($request->validated());

        return redirect()->back()->with('success','Your subscription has been added successfully!');
    }
}
