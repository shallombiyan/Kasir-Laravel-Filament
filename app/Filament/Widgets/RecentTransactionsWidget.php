<?php

namespace App\Filament\Widgets;

use App\Models\Transaksi;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

class RecentTransactionsWidget extends BaseWidget
{
    protected static ?string $heading = 'Transaksi Terbaru';

    /**
     * Mengambil query untuk transaksi terbaru beserta count item.
     */
    protected function getTableQuery(): Builder|Relation|null
    {
        return Transaksi::withCount('items')
            ->latest()
            ->limit(5);
    }

    /**
     * Mendefinisikan kolom-kolom tabel yang akan ditampilkan.
     */
    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('id')
                ->label('ID')
                ->sortable(),
            TextColumn::make('total_harga')
                ->label('Total Harga')
                ->money('idr', true)
                ->sortable(),
            TextColumn::make('status')
                ->label('Status')
                ->sortable(),
            TextColumn::make('created_at')
                ->label('Dibuat')
                ->dateTime('d M Y H:i')
                ->sortable(),
            TextColumn::make('items_count')
                ->label('Jumlah Barang'),
        ];
    }
}
