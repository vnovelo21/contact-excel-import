<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ContactImport;
use Maatwebsite\Excel\Facades\Excel;

class ContactImportController extends Controller
{
    
    public function show(){
        return view('welcome');
    }
    
    public function store(Request $request){
        $file = $request->file('file');

        Excel::import(new ContactImport, $file);

        return back()->withStatus('Excel file imported successfully');
    }
}
