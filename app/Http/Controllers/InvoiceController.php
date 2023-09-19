<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    // create invoice

    public function Create(){
        return view('backend.admin.invoice.create');
    }
}
