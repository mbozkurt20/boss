<?php

namespace App\Imports;

use App\Images;
use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    public function headingRow(): int
    {
        return 2;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $product = new Product([
            'category_id'    => 1,
            'slug' => 'products',
            'product_name' =>  $row[0],
            'color' => $row[1],
            'coil_length' => (int) $row[2],
            'total_length' => (int) $row[3],
            'unit_price' =>  (int)$row[4],
            'product_price' =>  (int)$row[5],
            'unitWeight' =>  (int)$row[6],
            'totalWeight' =>  (int)$row[7],
            'copperWeight' =>  (int)$row[8],
            'product_detail' =>  $row[9],
            'miktar' =>  (int)$row[10],
            'image' =>  $row[11],

        ]);


            return ['product'=> $product];




    }
}
