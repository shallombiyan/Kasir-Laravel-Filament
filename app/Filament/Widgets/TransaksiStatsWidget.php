<?php

namespace App\Filament\Widgets;

use App\Models\Transaksi;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TransaksiStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $totalPenjualan = Transaksi::where('status', 'selesai')->sum('total_harga');
        $avgTransaksi = Transaksi::where('status', 'selesai')->avg('total_harga');
        $transaksiHariIni = Transaksi::whereDate('created_at', today())->count();

        return [
            Stat::make('Total Penjualan', 'Rp ' . number_format($totalPenjualan, 0, ',', '.'))
                ->icon('heroicon-o-currency-dollar')
                ->description('Total penjualan selesai')
                ->color('success'),
                
            Stat::make('Rata-rata Transaksi', 'Rp ' . number_format($avgTransaksi, 0, ',', '.'))
                ->icon('heroicon-o-chart-bar')
                ->description('Rata-rata nilai transaksi')
                ->color('primary'),
                
            Stat::make('Transaksi Hari Ini', $transaksiHariIni)
                ->icon('heroicon-o-shopping-bag')
                ->description('Transaksi dibuat hari ini')
                ->color('warning'),
                
            Stat::make('Status Transaksi', 
                Transaksi::where('status', 'pending')->count() . ' Pending, ' .
                Transaksi::where('status', 'selesai')->count() . ' Selesai')
                ->icon('heroicon-o-clock')
                ->color('gray'),
        ];
    }
}