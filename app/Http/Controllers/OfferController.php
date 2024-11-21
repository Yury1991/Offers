<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;

class OfferController extends Controller
{
    public function index() {
        return view('offers');  
    }
}