<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ContactImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Contact;

class ContactImportController extends Controller
{
    public function get(Request $request)
    {
        $contacts = Contact::orderBy('firstname', 'desc')->get();
        return response()->json($contacts);
    }
    
    public function store(Request $request){
        $file = $request->file('file');

        Excel::import(new ContactImport, $file);

        return back()->withStatus('Excel file imported successfully');
    }
}
