<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class MostPurchasedProductsChart extends ChartWidget
{
    protected static ?string $heading = 'Produk Terbanyak Dibeli';

    /**
     * Mengambil data untuk grafik.
     */
    protected function getData(): array
    {
        // Query untuk mendapatkan nama produk dan total jumlah yang terjual,
        // mengambil 10 produk teratas.
        $data = DB::table('transaksi_items')
            ->join('produks', 'transaksi_items.produk_id', '=', 'produks.id')
            ->select('produks.name as product_name', DB::raw('SUM(transaksi_items.jumlah) as total_jumlah'))
            ->groupBy('produks.name')
            ->orderByDesc('total_jumlah')
            ->limit(10)
            ->get();

        $labels = [];
        $values = [];

        foreach ($data as $row) {
            $labels[] = $row->product_name;
            $values[] = $row->total_jumlah;
        }

        return [
            'labels'   => $labels,
            'datasets' => [
                [
                    'label'           => 'Jumlah Terjual',
                    'data'            => $values,
                    'backgroundColor' => 'rgba(54, 162, 235, 0.5)',
                ],
            ],
        ];
    }

    /**
     * Menentukan tipe chart yang akan digunakan (bar chart).
     */
    protected function getType(): string
    {
        return 'bar';
    }
}
