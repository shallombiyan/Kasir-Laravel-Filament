<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Invoice Transaksi</title>
  <style>
    /* Global Styles */
    body {
    font-family: 'Courier New', Courier, monospace;
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
      color: #333;
    }
    .invoice-container {
      max-width: 600px;
      margin: 30px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
    }
    .invoice-header {
      text-align: center;
      margin-bottom: 20px;
      border-bottom: 2px solid #eee;
      padding-bottom: 10px;
    }
    .invoice-header h1 {
      margin: 0;
      font-size: 24px;
      color: #333;
    }
    .invoice-header p {
      margin: 5px 0;
      font-size: 14px;
      color: #666;
    }
    .invoice-details {
      margin-bottom: 20px;
    }
    .invoice-details p {
      margin: 5px 0;
      font-size: 14px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    table th, table td {
      padding: 10px;
      border: 1px solid #ddd;
      font-size: 14px;
    }
    table th {
      background-color: #f0f0f0;
      text-align: left;
    }
    .text-right {
      text-align: right;
    }
    .total-row {
      font-weight: bold;
      background-color: #f9f9f9;
    }
    .thank-you {
      text-align: center;
      font-size: 16px;
      margin-top: 20px;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="invoice-container">
    <!-- Header Invoice -->
    <div class="invoice-header">
      <h1>Invoice Transaksi</h1>
      <p>Tanggal: {{ $transaksi->created_at->format('d/m/Y H:i') }}</p>
    </div>
    
    <!-- Tabel Item Transaksi -->
    <table>
      <thead>
        <tr>
          <th>Produk</th>
          <th>Jumlah</th>
          <th class="text-right">Total Harga</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($transaksi->items as $item)
          <tr>
            <td>
              {{ $item->produk ? $item->produk->name : 'Produk tidak ditemukan' }}
            </td>
            <td>{{ $item->jumlah }}</td>
            <td class="text-right">Rp {{ number_format($item->total_harga, 0, ',', '.') }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    
    <!-- Tabel Ringkasan Pembayaran -->
    <table>
      <tbody>
        <tr>
          <th>Total Transaksi</th>
          <td class="text-right">Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}</td>
        </tr>
        <tr>
          <th>Bayar</th>
          <td class="text-right">Rp {{ number_format($transaksi->bayar, 0, ',', '.') }}</td>
        </tr>
        <tr>
          <th>Kembalian</th>
          <td class="text-right">Rp {{ number_format($transaksi->kembalian, 0, ',', '.') }}</td>
        </tr>
        <tr>
          <th>Status</th>
          <td class="text-right">{{ ucfirst($transaksi->status) }}</td>
        </tr>
      </tbody>
    </table>
    
    <!-- Pesan Terima Kasih -->
    <div class="thank-you">
      <p>Terima kasih telah berbelanja!</p>
    </div>
  </div>
</body>
</html>
