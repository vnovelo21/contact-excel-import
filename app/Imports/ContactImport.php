<?php

namespace App\Imports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\ToModel;

class ContactImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Contact([
            'firstname' => $row[0],
            'lastname' => $row[1],
            'email' => $row[2]
            // 'password'=> Hash::make('password')
        ]);
    }
}
