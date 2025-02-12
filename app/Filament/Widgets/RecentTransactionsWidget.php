<?php

namespace App\Filament\Widgets;

use App\Models\Transaksi;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class RecentTransactionsWidget extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(Transaksi::query()->latest()->limit(5))
            ->columns([
                TextColumn::make('produk.name')
                    ->label('Produk')
                    ->searchable()
                    ->sortable(),
                    
                TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable(),
                    
                TextColumn::make('total_harga')
                    ->money('IDR')
                    ->sortable(),
                    
                BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'selesai',
                    ])
                    ->sortable(),
                    
                TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->label('Waktu Transaksi')
                    ->sortable(),
            ]);
    }
}
