function ToggleDarkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}
$('switch').toggleClass(localStorage.toggled);