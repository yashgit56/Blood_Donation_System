const body = document.querySelector("body"),
    nav = document.querySelector("nav"),
    mtoggle = document.querySelector(".darklight"),
    sidebarOpen = document.querySelector(".sidebarOpen"),
    sidebarClose = document.querySelector(".sidebarClose");

sidebarOpen.addEventListener("click", ()=>{
    nav.classList.add("active");
    sidebarClose.classList.toggle("active");
    sidebarOpen.classList.remove("active");
});

sidebarClose.addEventListener("click", e=>{
    let clickedelm = e.target;
    if(!clickedelm.classList.contains("sidebarOpen") && !clickedelm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});

const totop = document.querySelector(".to-top");

window.addEventListener("scroll", ()=>{
    if(window.pageYOffset > 100) {
        totop.classList.add("active");
    }
    else {
        totop.classList.remove("active");
    }
})