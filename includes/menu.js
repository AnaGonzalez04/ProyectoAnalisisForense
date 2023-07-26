document.getElementById("user-icon").addEventListener("click", function() {
    var menu = document.getElementById("user-menu");
    if (menu.style.display === "none") {
        menu.style.display = "block";
    } else {
        menu.style.display = "none";
    }
});