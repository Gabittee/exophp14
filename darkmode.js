var darkSwitch = document.getElementById("darkmode");

function check() {
    switch (darkSwitch.checked) {
        case true:
            document.body.setAttribute("data-theme", "dark");
            localStorage.setItem('dark', true);
            break;
        case false:
            document.body.removeAttribute("data-theme");
            localStorage.setItem('dark', "false");
            break;
        default:
            return;
            break;
    }
}

if (!localStorage.getItem('dark')) {
    localStorage.setItem('dark', "false");
}

if (localStorage.getItem('dark') == "true") {
    darkSwitch.checked = true;
}

check();

darkSwitch.addEventListener('change', () => {
    check();
});
