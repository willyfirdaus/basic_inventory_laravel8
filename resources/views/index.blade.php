<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta  content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu depan </title>
    <style>
.mainmenubtn {
    background-color: gray;
    color: white;
    border: none;
    cursor: pointer;
    padding:10px;
    margin-top:10px;
}
.mainmenubtn:hover {
    background-color: gray;
    }
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-child {
    display: none;
    background-color: gray;
    min-width: 200px;
}
.dropdown-child a {
    color: white;
    padding: 10px;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-child {
    display: block;
}
</style>
</head>
<body>
<p><h1>&emsp;APLIKASI INVENTORY PT RF HIGHTEK INDONESIA</h1></p>

<ul>
<div class="dropdown">
<a href="/dashboard"><button class="mainmenubtn"><h10>Dashboard</h10></button></a>
  <div class="dropdown-child">
</div>
</ul>

<ul>
<div class="dropdown">
  <button class="mainmenubtn"><h10>Data Master</h10></button>
  <div class="dropdown-child">
    <a href="datamaster.html">Barang</a>
    <a href="gudangpenyimpanan.html">Gudang Penyimpanan</a>
    <a href="kantorpabean.html">Kantor Pabean</a>
    <a href="kursmatauang.html">Kurs Mata Uang</a>
    <a href="supplier.html">Supplier</a>
  </div>
</div>
</ul>

<ul>
<div class="dropdown">
  <button class="mainmenubtn"><h10>Pembelian</h10></button>
  <div class="dropdown-child">
    <a href="purchaseorder.html">Purchase Order</a>
    <a href="invoicepembelian.html">Invoice Pembelian</a>
  </div>
</div>
</ul>

<ul>
<div class="dropdown">
  <button class="mainmenubtn"><h10>Penjualan</h10></button>
  <div class="dropdown-child">
    <a href="penerimaanpesanan.html">Penerimaan Pesananan</a>
    <a href="pengirimanpesanan.html">Pengiriman Pesanan</a>
  </div>
</div>
</ul>


<ul>
<div class="dropdown">
  <button class="mainmenubtn"><h10>Gudang</h10></button>
  <div class="dropdown-child">
    <a href="penerimaanbarang.html">Penerimaan Barang</a>
    <a href="">Pengembalian Barang</a>
    <a href="penyesuaianbarang.html">Penyusaian Barang</a>
    <a href="konversi.html">Konversi</a>
    <a href="requestproduksi.html">Request Produksi</a>
  </div>
</div>
</ul>

<ul>
<div class="dropdown">
  <button class="mainmenubtn"><h10>Produksi</h10></button>
  <div class="dropdown-child">
    <a href="consumtion.html">Consumption</a>
    <a href="finishgood.html">Finish Good</a>
    <a href="">Scrap</a>
  </div>
</div>
</ul>

<ul>
<div class="dropdown">
  <button class="mainmenubtn"><h10>Proses CMT</h10></button>
  <div class="dropdown-child">
    <a href="">Pengajuan</a>
    <a href="">Keluar Bahan</a>
    <a href="">Invoice</a>
  </div>
</div>
</ul>

<ul>
<div class="dropdown">
  <button class="mainmenubtn"><h10>Akunting</h10></button>
  <div class="dropdown-child">
    <a href="">Akun</a>
    <a href="">Klien</a>
    <a href="">Tipe Jurnal</a>
    <a href="">Hutang</a>
    <a href="">Piutang</a>
    <a href="">Jurnal</a>
    <a href="">Neraca</a>
    <a href="">Laba Rugi</a>
  </div>
</div>
</ul>

<ul>
<div class="dropdown">
  <button class="mainmenubtn"><h10>Exim</h10></button>
  <div class="dropdown-child">
    <a href="">Kontrak Kerja CMT</a>
    <a href="bcmasuk.html">BC Masuk</a>
    <a href="bckeluar.html">BC Keluar</a>
  </div>
</div>
</ul>

<ul>
<div class="dropdown">
  <button class="mainmenubtn"><h10>Laporan</h10></button>
  <div class="dropdown-child">
    <a href="stockreal.html">Stock Real</a>
    <a href="stockdokumen.html">Stock Dokumen</a>
    <a href="mutasibarang.html">Mutasi Barang</a>
    <a href="bcpemasukanbarang.html">BC Pemasukan Barang</a>
    <a href="bcpengeluaranbarang.html">BC Pengeluaran Barang</a>
    <a href="posisibarangwip.html">Posisi Barang Dalam Proses</a>
  </div>
</div>
</ul>

<ul>
<div class="dropdown">
  <button class="mainmenubtn"><h10>Riwayat Aktifitas</h10></button>
</div>
</ul>

<ul>
<div class="dropdown">
  <button class="mainmenubtn"><h10>Pengaturan</h10></button>
  <div class="dropdown-child">
    <a href="">Manajemen Pengguna</a>
    <a href="">Pengaturan Role</a>
  </div>
</div>
</ul>

</body>
</html>
