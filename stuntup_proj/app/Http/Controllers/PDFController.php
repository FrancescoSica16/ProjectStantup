<?php

namespace App\Http\Controllers;

use App\Bill;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($bill_number)
    {
        $data = DB::table('bills')->select('bill_attr_name', 'bill_attr_value')->where('bill_number', '=' , $bill_number)->get(); 

         $data1 = [
             'number' => $bill_number,
             'collection' => $data
            //'bill_attr_name' => $data[0]->bill_attr_name,
            // 'bill_attr_value' => $data[0]->bill_attr_value
         ];

        $pdf = PDF::loadView('myPDF', $data1);

        return $pdf->download('Fattura.pdf');
    }
}