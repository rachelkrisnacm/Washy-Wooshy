@extends('layouts.panel')

@section('title', 'Supplies')

@section('content')
  <div class="page-head">
    <h1>Supplies</h1>
    <button type="button" class="btn primary">+ Tambah Supply</button>
  </div>

  <div class="card table-card">
    <table class="data">
      <thead><tr><th>Nama</th><th>Stok</th><th>Kapasitas</th><th>Level</th><th></th></tr></thead>
      <tbody>
        <tr><td colspan="5" class="empty">Belum ada supply.</td></tr>
      </tbody>
    </table>
  </div>
@endsection