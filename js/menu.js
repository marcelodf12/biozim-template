window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    header = document.getElementById("header");
    logoImg = document.getElementById("logoImg");
    topbar = document.getElementById("topbar");
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
        if (topbar.style.height !== '0px') {
            header.style.boxShadow = "0 10px 6px -6px #777";
            header.style.backgroundColor = "rgba(255, 255, 255, 1)";
            header.style.height = "100px";
            logoImg.style.width = "200px";
            topbar.style.height = '0px';
        }
    } else {
        if (topbar.style.height !== '50px') {
            header.style.boxShadow = "";
            header.style.backgroundColor = "rgba(255, 255, 255, 0)";
            header.style.height = "150px";
            logoImg.style.width = "200px";
            topbar.style.height = '50px';
        }
    }
}