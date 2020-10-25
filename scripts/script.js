const sidebarStuff = () => {
    const sidebar = document.getElementById("side-bar");
    const bars = document.getElementById("bar");
    const cross = document.getElementById("cross");

    const sidebartoggler = () => sidebar.classList.toggle("side-bar-enlarge");
    bars.addEventListener("click", sidebartoggler);
    cross.addEventListener("click", sidebartoggler);
}
sidebarStuff();

