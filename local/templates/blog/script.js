var body = document.querySelector("body"), menuTrigger = document.querySelector("#toggle-menu-main-mobile"),
    menuContainer = document.querySelector("#menu-main-mobile"), hamburgerIcon = document.querySelector(".hamburger");
menuTrigger !== null && menuTrigger.addEventListener("click", function () {
    menuContainer.classList.toggle("open"), hamburgerIcon.classList.toggle("is-active"), body.classList.toggle("lock-scroll")
})