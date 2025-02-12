<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Produk;
use App\Models\Transaksi;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use App\Filament\Resources\TransaksiResource\Pages;
use Filament\Tables\Actions\Action;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationLabel = 'Kasir';
    protected static ?string $navigationGroup = 'Transaksi';
    protected static ?string $pluralModelLabel = 'Transaksi';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                // Repeater untuk memasukkan detail barang
                Forms\Components\Repeater::make('items')
                    ->relationship('items')
                    ->schema([
                        Forms\Components\Select::make('produk_id')
                            ->label('Produk')
                            ->options(Produk::all()->pluck('name', 'id'))
                            ->searchable()
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                $produk = Produk::find($state);
                                if ($produk) {
                                    // Set harga satuan ke field sementara
                                    $set('harga', $produk->harga);
                                }
                            }),
                        Forms\Components\TextInput::make('jumlah')
                            ->label('Jumlah')
                            ->numeric()
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $set, callable $get) {
                                $harga = $get('harga') ?? 0;
                                $total = $harga * (int) $state;
                                $set('total_harga', $total);

                                // Validasi stok produk
                                $produkId = $get('produk_id');
                                if ($produkId) {
                                    $produk = Produk::find($produkId);
                                    if ($produk && (int)$state > $produk->stok) {
                                        $set('jumlah', $produk->stok);
                                        Notification::make()
                                            ->title('Stok tidak mencukupi!')
                                            ->danger()
                                            ->send();
                                    }
                                }
                            }),
                        Forms\Components\TextInput::make('harga')
                            ->label('Harga Satuan')
                            ->numeric()
                            ->disabled(),
                        Forms\Components\TextInput::make('total_harga')
                            ->label('Total Harga')
                            ->numeric()
                            ->disabled(),
                    ])
                    ->minItems(1)
                    ->createItemButtonLabel('Tambah Barang'),
                // Field pembayaran dan kembalian
                Forms\Components\TextInput::make('bayar')
                    ->label('Jumlah Bayar')
                    ->numeric()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        // Hitung total keseluruhan dari semua item
                        $items = $get('items') ?? [];
                        $totalTransaksi = collect($items)->sum(fn ($item) => $item['total_harga'] ?? 0);
                        $set('kembalian', max((int)$state - (int)$totalTransaksi, 0));
                    }),
                Forms\Components\TextInput::make('kembalian')
                    ->label('Kembalian')
                    ->numeric()
                    ->disabled(),
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'selesai' => 'Selesai',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                // Menampilkan total transaksi, status, tanggal, dan jumlah barang
                Tables\Columns\TextColumn::make('total_harga')
                    ->label('Total Harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->timezone('Asia/jakarta')
                    ->sortable(),
                Tables\Columns\TextColumn::make('items_count')
                    ->counts('items')
                    ->label('Jenis Barang'),
            ])
            ->filters([
                // Filters jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('cetak')
                    ->label('Cetak Struk')
                    ->icon('heroicon-o-printer')
                    ->url(fn ($record) => route('transaksi.cetak', $record->id))
                    ->openUrlInNewTab(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}
