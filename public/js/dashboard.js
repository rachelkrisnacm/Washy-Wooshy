// Khusus halaman dashboard
const todayEl = document.getElementById('today');
if (todayEl) {
  const now = new Date();
  todayEl.textContent =
    now.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' }) +
    ', ' + now.toLocaleDateString('en-US', { weekday: 'long' });
}

// ikon mata: sembunyikan / tampilkan angka
document.querySelectorAll('.eye').forEach((btn) => {
  btn.addEventListener('click', () => {
    document.getElementById(btn.dataset.target)?.classList.toggle('masked');
  });
});

// isi lebar progress bar supply sesuai data-level
document.querySelectorAll('#supplyList li[data-level]').forEach((item) => {
  item.querySelector('.fill')?.style.setProperty('--w', item.dataset.level + '%');
});