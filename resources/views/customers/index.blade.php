@extends('layouts.panel')

@section('title', 'Customers')

@section('content')
  <div class="page-head">
    <h1>Customers</h1>
    <button type="button" class="btn primary">+ Tambah Customer</button>
  </div>

  <div class="card table-card">
    <table class="data">
      <thead><tr><th>Nama</th><th>No. HP</th><th>Alamat</th><th>Jumlah order</th><th></th></tr></thead>
      <tbody>
        <tr><td colspan="5" class="empty">Belum ada customer.</td></tr>
      </tbody>
    </table>
  </div>
@endsection