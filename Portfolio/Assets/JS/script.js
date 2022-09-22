// /* Set the width of the side navigation to 250px */
// function openNav() {
// document.getElementById("sliding-menu").style.width = "250px";
// document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
// }



function toggleNav() {
    let button = document.getElementById("menu-icon")
    let menu = document.getElementById("sliding-menu");
    let main = document.getElementById("main");
    menu.classList.toggle("active");
    button.classList.toggle("active");
    main.classList.toggle("dark");
}
function closeNav() {
    let button = document.getElementById("menu-icon")
    let menu = document.getElementById("sliding-menu");
    let main = document.getElementById("main");
menu.classList.remove("active");
button.classList.remove("active");
main.classList.remove("dark");
}
