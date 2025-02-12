<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function cetak($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $pdf = Pdf::loadView('pdf.struk', compact('transaksi'));

        return $pdf->download('struk_transaksi_'.$transaksi->id.'.pdf');
    }
}
