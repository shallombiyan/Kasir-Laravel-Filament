<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice Transaksi</title>
  <style>
    body {
      font-family: 'Courier New', monospace;
      margin: 0;
      padding: 10px;
      text-align: center;
      background-color: #f8f8f8;
    }
    .struk-container {
      width: 500px;
      padding: 20px;
      margin: 30px auto;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
    }
    .header {
      margin-bottom: 15px;
      font-size: 16px;
      border-bottom: 1px dashed #000;
      padding-bottom: 15px;
    }
    .header h2 {
      margin: 0;
      font-size: 24px;
      font-weight: bold;
    }
    .header p {
      margin: 4px 0;
      font-size: 14px;
    }
    .table {
      width: 100%;
      margin: 15px 0;
      padding: 0;
      border-collapse: collapse;
    }
    .table th, .table td {
      padding: 8px;
      text-align: left;
      font-size: 14px;
    }
    .table th {
      border-bottom: 1px solid #000;
    }
    .total {
      margin-top: 15px;
      font-size: 16px;
      font-weight: bold;
      border-top: 1px dashed #000;
      padding-top: 15px;
      text-align: right;
    }
    .footer {
      margin-top: 15px;
      font-size: 14px;
      border-top: 1px dashed #000;
      padding-top: 15px;
    }
    .btn-print {
      margin-top: 15px;
      padding: 8px 15px;
      font-size: 14px;
      background: #000;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }
    .btn-print:hover {
      background: #333;
    }
  </style>
</head>
<body>
  <div class="struk-container">
    <div class="header">
      <h2>Invoice Transaksi</h2>
      <p>Tanggal: {{ $transaksi->created_at->format('d/m/Y H:i') }}</p>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Produk</th>
          <th>Jumlah</th>
          <th>Total Harga</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($transaksi->items as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->produk ? $item->produk->name : 'Produk tidak ditemukan' }}</td>
            <td>{{ $item->jumlah }}</td>
            <td>Rp {{ number_format($item->total_harga, 0, ',', '.') }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="total">
      <p>Total Transaksi: Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}</p>
      <p>Bayar: Rp {{ number_format($transaksi->bayar, 0, ',', '.') }}</p>
      <p>Kembalian: Rp {{ number_format($transaksi->kembalian, 0, ',', '.') }}</p>
      <p>Status: {{ ucfirst($transaksi->status) }}</p>
    </div>
    <div class="footer">
      <p>Terima kasih telah berbelanja!</p>
    </div>
  </div>
</body>
</html>
