<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <td>{{ $item->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $item->email }}</td>
    </tr>
    <tr>
        <th>Nomor Telp</th>
        <td>{{ $item->number }}</td>
    </tr>
    <tr>
        <th>Pengiriman ke</th>
        <td>{{ $item->district }} dengan ongkos kirim Rp {{ number_format($item->shipFee) }}</td>
    </tr>
    <tr>
        <th>Alamat Lengkap</th>
        <td>{{ $item->address }}</td>
    </tr>
    <tr>
        <th>Total Harga</th>
        <td>Rp {{ number_format($item->transaction_total) }} | <a href="{{ $item->proof }}"> Bukti</a></a> </td>
    </tr>
    <tr>
        <th>Status Transaksi</th>
        <td>{{ $item->transaction_status }}</td>
    </tr>
    <tr>
        <th>Pembelian Produk</th>
        <td>
            <table class="table table-bordered w-100">

                <tr>
                    <th>Nama</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                </tr>
                @foreach ($item->details as $detail)

                <tr>
                    <td>{{ $detail->product->name }}</td>
                    <td>{{ $detail->product->type }}</td>
                    <td>Rp {{ number_format($detail->product->price) }}</td>
                </tr>

                @endforeach
            </table>
        </td>
    </tr>
</table>
<div class="row">
    <div class="col-4">
        <a href="{{ route('transactions.status', $item->id) }}?status=SUCCESS" class="btn btn-success btn-block">
            <i class="fa fa-check"></i> Set Sukses
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transactions.status', $item->id) }}?status=FAILED" class="btn btn-warning btn-block">
            <i class="fa fa-times"></i> Set Gagal
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transactions.status', $item->id) }}?status=PENDING" class="btn btn-info btn-block">
            <i class="fa fa-spinner"></i> Set Pending
        </a>
    </div>
</div>