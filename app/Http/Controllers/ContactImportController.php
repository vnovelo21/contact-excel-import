<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ContactImportController extends Controller
{
    // Return 
    // public function show(){
    //     return view('users.import');
    // }
    
    public function store(Request $request){
        $file = $request->file('file');

        Excel::import(new ContactImport,$file);

        return back()-> withStatus('Excel file imported successfully');
    }
}
