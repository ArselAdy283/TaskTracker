const sidebar = document.getElementById("sidebar");
const listMenu = document.getElementById("list-menu");

listMenu.addEventListener("click", () => {
    sidebar.classList.toggle("hidden");
});
