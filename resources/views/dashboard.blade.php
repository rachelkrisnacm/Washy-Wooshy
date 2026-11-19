<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
  <div class="app">

    <aside class="sidebar">
      <div class="logo">
        <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 7a2 2 0 1 0-2-2"/><path d="M12 7v2l9 6a1 1 0 0 1-.6 1.8H3.6A1 1 0 0 1 3 15l9-6"/></svg>
      </div>
      <nav class="menu">
        <a href="{{ route('dashboard') }}" class="menu-item active">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/></svg>
          <span>Dashboard</span>
        </a>
        <a href="#" class="menu-item">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="5" rx="1"/><path d="M5 8v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8"/><path d="M10 12h4"/></svg>
          <span>Orders</span>
        </a>
        <a href="#" class="menu-item">
          <svg viewBox="0 0 24 24"><path d="M3 12V4h8l10 10-8 8z"/><circle cx="7.5" cy="8.5" r="1"/></svg>
          <span>Pricelist</span>
        </a>
        <a href="#" class="menu-item">
          <svg viewBox="0 0 24 24"><circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14a6.5 6.5 0 0 1 3.5 6"/></svg>
          <span>Customers</span>
        </a>
        <a href="#" class="menu-item">
          <svg viewBox="0 0 24 24"><path d="M12 2.5 20.5 7v10L12 21.5 3.5 17V7z"/><path d="M3.5 7 12 12l8.5-5"/><path d="M12 12v9.5"/></svg>
          <span>Supplies</span>
        </a>
        <a href="#" class="menu-item">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 0 0 .3 1.9l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.7 1.7 0 0 0-1.9-.3 1.7 1.7 0 0 0-1 1.5V21a2 2 0 1 1-4 0v-.1a1.7 1.7 0 0 0-1.1-1.5 1.7 1.7 0 0 0-1.9.3l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1a1.7 1.7 0 0 0 .3-1.9 1.7 1.7 0 0 0-1.5-1H3a2 2 0 1 1 0-4h.1a1.7 1.7 0 0 0 1.5-1.1 1.7 1.7 0 0 0-.3-1.9l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1a1.7 1.7 0 0 0 1.9.3h.1a1.7 1.7 0 0 0 1-1.5V3a2 2 0 1 1 4 0v.1a1.7 1.7 0 0 0 1 1.5 1.7 1.7 0 0 0 1.9-.3l.1-.1a2 2 0 1 1 2.8 2.8l-.1.1a1.7 1.7 0 0 0-.3 1.9v.1a1.7 1.7 0 0 0 1.5 1H21a2 2 0 1 1 0 4h-.1a1.7 1.7 0 0 0-1.5 1z"/></svg>
          <span>Settings</span>
        </a>
      </nav>

      <form method="POST" action="{{ route('logout') }}" class="logout-form">
        @csrf
        <button type="submit" class="menu-item logout">
          <svg viewBox="0 0 24 24"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><path d="M16 17l5-5-5-5"/><path d="M21 12H9"/></svg>
          <span>Logout</span>
        </button>
      </form>
    </aside>

    <div class="content">
      <header class="topbar">
        <label class="search">
          <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg>
          <input type="text" placeholder="Search">
        </label>
        <div class="topbar-right">
          <button class="icon-btn" aria-label="Notifications">
            <svg viewBox="0 0 24 24"><path d="M6 8a6 6 0 1 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.9 1.9 0 0 0 3.4 0"/></svg>
          </button>
          <button class="profile" id="profileBtn">
            <span class="avatar"></span>
            <span class="profile-name" id="userName">{{ Auth::user()->name }}</span>
            <svg class="chev" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></svg>
          </button>
        </div>
      </header>

      <main class="main">
        <div class="title-row">
          <h1>Dashboard</h1>
          <p class="date" id="today"></p>
        </div>

        <div class="grid">
          <!-- KOLOM KIRI -->
          <section class="left">
            <div class="section-head">
              <h2>Orders</h2>
              <a href="#" class="link">View All</a>
            </div>

           <div class="orders-wrap">
  <button class="add-order" aria-label="Tambah order">
    <svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg>
  </button>
  <div class="orders-scroll" id="orderList">
    <article class="order-card">
      <div class="order-top"><span class="order-id"></span></div>
      <p class="order-none">Belum ada pesanan</p>
      <a href="#" class="update">Update</a>
    </article>
    <article class="order-card">
      <div class="order-top"><span class="order-id"></span></div>
      <p class="order-none">Belum ada pesanan</p>
      <a href="#" class="update">Update</a>
    </article>
    <article class="order-card">
      <div class="order-top"><span class="order-id"></span><span class="badge pending">Pending</span></div>
      <p class="order-none">Belum ada pesanan</p>
      <a href="#" class="update">Update</a>
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
                    <span class="value" id="balanceValue">Rp</span>
                    <button class="eye" data-target="balanceValue" aria-label="Tampilkan atau sembunyikan">
                      <svg viewBox="0 0 24 24"><path d="M3 3l18 18"/><path d="M10.6 6.1A9.7 9.7 0 0 1 12 6c6 0 9.5 6 9.5 6a16 16 0 0 1-3 3.6"/><path d="M6.3 7.6A16 16 0 0 0 2.5 12S6 18 12 18a9.6 9.6 0 0 0 4-.9"/><path d="M9.9 9.9a3 3 0 0 0 4.2 4.2"/></svg>
                    </button>
                  </div>
                </div>

                <div class="card unpaid">
                  <div class="card-head">
                    <h3>Unpaid Orders</h3>
                    <button class="range plain">Last 7 Days <svg viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></svg></button>
                  </div>
                  <div class="amount">
                    <span class="value" id="unpaidValue">Rp</span>
                    <button class="eye" data-target="unpaidValue" aria-label="Tampilkan atau sembunyikan">
                      <svg viewBox="0 0 24 24"><path d="M3 3l18 18"/><path d="M10.6 6.1A9.7 9.7 0 0 1 12 6c6 0 9.5 6 9.5 6a16 16 0 0 1-3 3.6"/><path d="M6.3 7.6A16 16 0 0 0 2.5 12S6 18 12 18a9.6 9.6 0 0 0 4-.9"/><path d="M9.9 9.9a3 3 0 0 0 4.2 4.2"/></svg>
                    </button>
                  </div>
                </div>
              </div>

              <div class="card order-status">
                <div class="status-row">
                  <span class="status-icon grey"><svg viewBox="0 0 24 24"><path d="M10.3 3.9 2.4 18a2 2 0 0 0 1.7 3h15.8a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0z"/><path d="M12 9v4M12 17h.01"/></svg></span>
                  <div><p>Pending Orders</p><strong id="pendingCount"></strong></div>
                </div>
                <div class="status-row">
                  <span class="status-icon orange"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9.5"/><path d="M12 7v5l3 2"/></svg></span>
                  <div><p>On Progress Orders</p><strong id="progressCount"></strong></div>
                </div>
                <div class="status-row">
                  <span class="status-icon navy"><svg viewBox="0 0 24 24"><path d="M5 7h14l1 13H4z"/><path d="M9 10V6a3 3 0 0 1 6 0v4"/></svg></span>
                  <div><p>Finished Orders</p><strong id="finishedCount"></strong></div>
                </div>
              </div>
            </div>
          </section>

          <!-- KOLOM KANAN -->
          <aside class="right">
            <div class="card supply">
              <div class="card-head">
                <h3>Supply List</h3>
                <a href="#" class="link small">Update</a>
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
              <p class="legend"><strong id="returningCount"></strong> returning customers<br><strong id="newCount"></strong> new customers</p>
            </div>
          </aside>
        </div>
      </main>
    </div>
  </div>
  <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>