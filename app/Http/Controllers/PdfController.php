<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    
    public function laundrylaporan()
    {
        $laundry = DB::table('detail_barang')->get();
     
        $pdf = PDF::loadview('laundrylaporan',['laundry'=>$laundry]);
        return $pdf->download('laporanlaundry.pdf');
    
    }
}
