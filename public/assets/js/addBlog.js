let title = document.querySelector("#title");
let desc = document.querySelector("#desc");

function validateTitle() {
    if (title.innerHTML.toLowerCase() === "title") {
        // pertama kali di klik
        title.innerHTML = "";
        title.autofocus;
        title.classList.remove("text-blackSec/50");
        title.classList.add("text-black");
    }
}

function validateTitleBlur() {
    if (title.innerHTML.toLowerCase() === "") {
        title.innerHTML = "Title";
        title.classList.remove("text-black");
        title.classList.add("text-blackSec/50");
    }
}

function validateDesc() {
    if (desc.innerHTML.toLowerCase() === "description") {
        // pertama kali di klik
        desc.innerHTML = "";
        desc.autofocus;
        desc.classList.remove("text-blackSec/50");
        desc.classList.add("text-blackSec");
    }
}

function validateDescBlur() {
    if (desc.innerHTML.toLowerCase() === "") {
        desc.innerHTML = "Description";
        desc.classList.remove("text-black");
        desc.classList.add("text-blackSec/50");
    }
}
