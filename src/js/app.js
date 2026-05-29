//THEME TOGGLE
const themeToggle = document.getElementById("theme-toggle");
const themeIcon = document.getElementById("theme-icon");

if (localStorage.theme === "dark") {

    document.documentElement.classList.add("dark");
    
    themeToggle.title = "Light Mode";
    themeIcon.classList.remove("ph-moon");
    themeIcon.classList.add("ph-sun");

} else {

    document.documentElement.classList.remove("dark");

    themeToggle.title = "Dark Mode";
    themeIcon.classList.remove("ph-sun");
    themeIcon.classList.add("ph-moon");
}

themeToggle.addEventListener("click", () => {

    document.documentElement.classList.toggle("dark");

    if (document.documentElement.classList.contains("dark")) {

        localStorage.theme = "dark";
        themeToggle.title = "Light Mode";
        themeIcon.classList.remove("ph-moon");
        themeIcon.classList.add("ph-sun");

    } else {

        localStorage.theme = "light";
        themeToggle.title = "Dark Mode";
        themeIcon.classList.remove("ph-sun");
        themeIcon.classList.add("ph-moon");
    }

});