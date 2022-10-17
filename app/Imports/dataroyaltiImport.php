<?php

namespace App\Imports;

use App\Models\dataroyalti;
use Maatwebsite\Excel\Concerns\ToModel;

class dataroyaltiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new dataroyalti([
            'kode' => $row[0],
            'judul' => $row[1],
            'penulis' => $row[2],
            'jenis' => $row[3],
            'harga' => $row[4],
            'stok' => $row[5],
            'nilairoyalti' => $row[6],
            'hutangroyalti' => $row[7],
            'terjual' => $row[8],
            'pengurangan' => $row[9],
            'penambahan' => $row[10],
            'saldoroyalti' => $row[11],
            'pphpenulis' => $row[12],
            'adminbank' => $row[13],
            'saldonet' => $row[14],
        ]);
    }
}
