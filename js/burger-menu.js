const toggleBtn = document.querySelector('.hamicon');
const mySidenav = document.getElementById("sidenav");
const close = document.getElementById('close');
const open = document.getElementById('open');

var flag = true; // for nav
var flagDrop = false; // for elements on nav



toggleBtn.addEventListener('click', () => {
    if (flag) {
        showNav();
    }
    else {
        hideNav();
    }
    flag = !flag
})


const hideNav = () => {
    mySidenav.classList.remove('left-0');
    mySidenav.classList.add('-left-full');
    open.classList.remove('hidden');
    open.classList.add('block');
    close.classList.remove('block');
    close.classList.add('hidden');
}

const showNav = () => {
    mySidenav.classList.remove('-left-full');
    mySidenav.classList.add('left-0');
    open.classList.remove('block');
    open.classList.add('hidden');
    close.classList.remove('hidden');
    close.classList.add('block');
}


/* Profile */

function changeDropdown(itemID) {
    var dropdown = document.getElementById(itemID);

    if (!flagDrop) {
        dropdown.classList.add('block');
        dropdown.classList.remove('hidden');
        document.querySelector('#dropdown-ids').classList.remove("block");
        document.querySelector('#dropdown-ids').classList.add("hidden");
    }
    else {
        dropdown.classList.remove('block');
        dropdown.classList.add('hidden');
    }

    flagDrop = !flagDrop;

}


// When screen size changes

window.addEventListener("resize", function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
        hideNav();
        flag = true;
        flagDrop = false;
        document.getElementById('dropdownItemSide').classList.remove('block');
        document.getElementById('dropdownItemSide').classList.add('hidden');
        document.getElementById('dropdownItem').classList.remove('block');
        document.getElementById('dropdownItem').classList.add('hidden');

    }
})


/// Notifications
const hideElement = () => {
    const closeNotify = document.getElementById('closeNotify');
    const notification = document.getElementById('defaultModal');

    closeNotify.addEventListener('click', () => {
        notification.classList.remove('block');
        notification.classList.add('hidden');
    })


    document.querySelectorAll('.menu-item').forEach(item => {
        item.addEventListener('click', () => {
            document.querySelector('.hideNotifyDiv').classList.add('hidden');

        })
    })


}
hideElement();

