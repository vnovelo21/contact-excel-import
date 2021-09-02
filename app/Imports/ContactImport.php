<?php

namespace App\Imports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Maatwebsite\Excel\Concerns\Importable;

// use Illuminate\Support\Facades\Hash;

class ContactImport implements ToModel, WithHeadingRow, WithProgressBar
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    use Importable;

    public function model(array $row)
    {
        return new Contact([
            'firstname' => $row['firstname'],
            'lastname' => $row['lastname'],
            'email' => $row['email']
            //Slows my stuff down so commenting out
            // 'password'=> Hash::make('password')
        ]);
    }
}
