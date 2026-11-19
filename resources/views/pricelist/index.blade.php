@extends('layouts.panel')

@section('title', 'Pricelist')

@section('content')
  <div class="page-head">
    <h1>Pricelist</h1>
    <button type="button" class="btn primary">+ Tambah Layanan</button>
  </div>

  <div class="card table-card">
    <table class="data">
      <thead><tr><th>Layanan</th><th>Harga per kg</th><th></th></tr></thead>
      <tbody>
        <tr><td colspan="3" class="empty">Belum ada layanan.</td></tr>
      </tbody>
    </table>
  </div>
@endsection