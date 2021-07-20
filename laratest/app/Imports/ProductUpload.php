<?php
  
namespace App\Imports;
  
use App\Physical_store_channel;
use Maatwebsite\Excel\Concerns\ToModel;
  
class ProductUpload implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Physical_store_channel([
            //
             'id' => $row[0],
             'customer_name'=> $row[1],
             'customer_address'=> $row[2],
             'phone'=> $row[3],
             'product_name'=> $row[4],
             'product_id'=> $row[5],
             'unit_price'=> $row[6],
             'quantity'=> $row[7],
             'total_price'=> $row[8],
             'date_sold'=> $row[9],
             'payment_type'=> $row[10],
             'status'=> $row[11],
        ]);
    }
}