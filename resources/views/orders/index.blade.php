@extends('layouts.panel')

@section('title', 'Orders')

@section('content')
  <div class="page-head">
    <h1>Orders</h1>
    <button type="button" class="btn primary">+ Tambah Order</button>  </div>

  <div class="card table-card">
    <table class="data">
      <thead>
        <tr>
          <th>ID</th><th>Customer</th><th>Layanan</th><th>Berat</th>
          <th>Total</th><th>Status</th><th>Bayar</th><th>Tanggal</th><th></th>
        </tr>
      </thead>
      <tbody>
        <tr><td colspan="9" class="empty">Belum ada order.</td></tr>
      </tbody>
    </table>
  </div>
@endsection