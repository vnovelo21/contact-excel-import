<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ContactImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Contact;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;
use Illuminate\Support\Facades\Validator;

class ContactImportController extends Controller
{
    public function get(Request $request)
    {
        $contacts = Contact::orderBy('firstname', 'desc')->get();
        return response()->json($contacts);
    }
    
    public function store(Request $request){
        
        // Validate that its an excel file
        $validator = Validator::make($request->all(), [
            'file' => 'mimes:xls,csv,.xlsx'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
              ->withErrors($validator)
              ->withInput();
        }  

        $file = $request->file('file');

        try {
            Excel::import(new ContactImport, $file);
        } 
        catch (NoTypeDetectedException $e) {
            return redirect()->back()
              ->withErrors(' Not File Detected')
              ->withInput();
        }

        return back()->withStatus('Excel file imported successfully');
    }
}
