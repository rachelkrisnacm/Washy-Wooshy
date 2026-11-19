@extends('layouts.panel')

@section('title', 'Dashboard')

@section('content')
  <div class="title-row">
    <h1>Dashboard</h1>
    <p class="date" id="today"></p>
  </div>

  <div class="grid">
    <!-- KOLOM KIRI -->
    <section class="left">
      <div class="section-head">
        <h2>Orders</h2>
        <a href="{{ route('orders.index') }}" class="link">View All</a>
      </div>

      <div class="orders-wrap">
        <button type="button" class="add-order" aria-label="Tambah order">
          <svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg>
        </button>

        <div class="orders-scroll" id="orderList">
          <article class="order-card">
            <div class="order-top"><span class="order-id"></span></div>
            <p class="order-none">Belum ada pesanan</p>
            <button type="button" class="update">Update</button>
          </article>
          <article class="order-card">
            <div class="order-top"><span class="order-id"></span></div>
            <p class="order-none">Belum ada pesanan</p>
            <button type="button" class="update">Update</button>
          </article>
          <article class="order-card">
            <div class="order-top"><span class="order-id"></span></div>
            <p class="order-none">Belum ada pesanan</p>
            <button type="button" class="update">Update</button>
          </article>
        </div>
      </div>

      <div class="stats">
        <div class="stats-money">
          <div class="card balance">
            <div class="card-head">
              <h3>Balance</h3>
              <button class="range">Last 7 Days <svg viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></svg></button>
            </div>
            <div class="amount">
              <span class="value masked" id="balanceValue">Rp 0</span>
              <button class="eye" data-target="balanceValue" aria-label="Tampilkan atau sembunyikan"><svg viewBox="0 0 24 24"><path d="M3 3l18 18"/><path d="M10.6 6.1A9.7 9.7 0 0 1 12 6c6 0 9.5 6 9.5 6a16 16 0 0 1-3 3.6"/><path d="M6.3 7.6A16 16 0 0 0 2.5 12S6 18 12 18a9.6 9.6 0 0 0 4-.9"/><path d="M9.9 9.9a3 3 0 0 0 4.2 4.2"/></svg></button>
            </div>
          </div>

          <div class="card unpaid">
            <div class="card-head">
              <h3>Unpaid Orders</h3>
              <button class="range plain">Last 7 Days <svg viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></svg></button>
            </div>
            <div class="amount">
              <span class="value masked" id="unpaidValue">Rp 0</span>
              <button class="eye" data-target="unpaidValue" aria-label="Tampilkan atau sembunyikan"><svg viewBox="0 0 24 24"><path d="M3 3l18 18"/><path d="M10.6 6.1A9.7 9.7 0 0 1 12 6c6 0 9.5 6 9.5 6a16 16 0 0 1-3 3.6"/><path d="M6.3 7.6A16 16 0 0 0 2.5 12S6 18 12 18a9.6 9.6 0 0 0 4-.9"/><path d="M9.9 9.9a3 3 0 0 0 4.2 4.2"/></svg></button>
            </div>
          </div>
        </div>

        <div class="card order-status">
          <div class="status-row">
            <span class="status-icon grey"><svg viewBox="0 0 24 24"><path d="M10.3 3.9 2.4 18a2 2 0 0 0 1.7 3h15.8a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0z"/><path d="M12 9v4M12 17h.01"/></svg></span>
            <div><p>Pending Orders</p><strong>0</strong></div>
          </div>
          <div class="status-row">
            <span class="status-icon orange"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9.5"/><path d="M12 7v5l3 2"/></svg></span>
            <div><p>On Progress Orders</p><strong>0</strong></div>
          </div>
          <div class="status-row">
            <span class="status-icon navy"><svg viewBox="0 0 24 24"><path d="M5 7h14l1 13H4z"/><path d="M9 10V6a3 3 0 0 1 6 0v4"/></svg></span>
            <div><p>Finished Orders</p><strong>0</strong></div>
          </div>
        </div>
      </div>
    </section>

    <!-- KOLOM KANAN -->
    <aside class="right">
      <div class="card supply">
        <div class="card-head">
          <h3>Supply List</h3>
          <a href="{{ route('supplies.index') }}" class="link small">Update</a>
        </div>
        <ul class="supply-list" id="supplyList">
          <li data-level="0"><div class="supply-top"><span>Softener</span><small></small></div><div class="bar"><div class="fill"></div></div></li>
          <li data-level="0"><div class="supply-top"><span>Detergent</span><small></small></div><div class="bar"><div class="fill"></div></div></li>
          <li data-level="0"><div class="supply-top"><span>Plastic wrap</span><small></small></div><div class="bar"><div class="fill"></div></div></li>
          <li data-level="0"><div class="supply-top"><span>Plastic bag</span><small></small></div><div class="bar"><div class="fill"></div></div></li>
          <li data-level="0"><div class="supply-top"><span>Perfume</span><small></small></div><div class="bar"><div class="fill"></div></div></li>
        </ul>
      </div>

      <div class="card customer">
        <div class="card-head">
          <h3>Total Customer</h3>
          <button class="range plain small">Last 7 Days <svg viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></svg></button>
        </div>
        <div class="pie" id="pie"></div>
        <p class="legend">
          <strong>0</strong> returning customers<br>
          <strong>0</strong> new customers
        </p>
      </div>
    </aside>
  </div>
@endsection

@push('scripts')
  <script src="{{ asset('js/dashboard.js') }}"></script>
@endpush