const sidebarStuff = () => {
    const sidebar = document.getElementById("side-bar");
    const bars = document.getElementById("bar");
    const cross = document.getElementById("cross");
    const body = document.getElementsByTagName("body");

    const sidebarToggler = () => sidebar.classList.toggle("side-bar-enlarge");
    const bodyScrollToggler = () => body.classList.toggle("no-scroll");
    bars.addEventListener("click", sidebarToggler);
    cross.addEventListener("click", sidebarToggler);
}
sidebarStuff();

