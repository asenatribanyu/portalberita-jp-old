//dropdown
const dropdowns = document.querySelectorAll(".dropdown");

dropdowns.forEach((dropdown) => {
    const select = dropdown.querySelector(".select");
    const caret = dropdown.querySelector(".caret");
    const menu = dropdown.querySelector(".menu");
    const options = dropdown.querySelectorAll(".menu li");
    const selected = dropdown.querySelector(".selected");

    select.addEventListener("click", () => {
        select.classList.toggle("select-clicked");
        caret.classList.toggle("caret-rotate");
        menu.classList.toggle("menu-open");
    });
    options.forEach((option) => {
        option.addEventListener("click", () => {
            selected.innerText = option.innerText;
            select.classList.remove("select-clicked");
            caret.classList.remove("caret-rotate");
            menu.classList.remove("menu-open");
            options.forEach((option) => {
                option.classList.remove("active");
            });
            option.classList.add("active");
        });
    });
});

//navbar
const nav = document.querySelector("nav");
const body = document.querySelector("body");
const searchToggle = document.querySelector(".searchToggle");
const sidebarC = document.querySelector(".side-close");
const sidebarO = document.querySelector(".side-open");

searchToggle.addEventListener("click", () => {
    searchToggle.classList.toggle("active");
});

sidebarO.addEventListener("click", () => {
    nav.classList.add("active");
});

body.addEventListener("click", (e) => {
    let clicked = e.target;

    if (
        !clicked.classList.contains("side-open") &&
        !clicked.classList.contains("menu")
    ) {
        nav.classList.remove("active");
    }
});

//readmore
