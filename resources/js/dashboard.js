const todayEl = document.getElementById("today");
const now = new Date();
todayEl.textContent =
  now.toLocaleDateString("en-GB", { day: "numeric", month: "short", year: "numeric" }) +
  ", " + now.toLocaleDateString("en-US", { weekday: "long" });

document.querySelectorAll(".eye").forEach((btn) => {
  btn.addEventListener("click", () => {
    document.getElementById(btn.dataset.target).classList.toggle("masked");
  });
});

document.querySelectorAll("#supplyList li").forEach((item) => {
  item.querySelector(".fill").style.setProperty("--w", item.dataset.level + "%");
});

document.querySelectorAll(".menu-item:not(.logout)").forEach((link) => {
  link.addEventListener("click", (e) => {
    if (link.getAttribute("href") === "#") e.preventDefault();
    document.querySelectorAll(".menu-item.active").forEach((el) => el.classList.remove("active"));
    link.classList.add("active");
  });
});


document.querySelector(".logout").addEventListener("click", (e) => {
  if (!confirm("Apakah Anda yakin ingin keluar?")) e.preventDefault();
});

const setText = (id, value) => { document.getElementById(id).textContent = value; };
