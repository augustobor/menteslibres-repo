const menuIcon = document.querySelector('#menuIcon')
menu = document.querySelector('#menu-content')

menuIcon.addEventListener('click', (e) => {

    menu.classList.toggle('activate');
    document.body.classList.toggle('opacity')

    const route = e.target.getAttribute('src');

    if(route == "../../imgs/burger-menu.svg") {
        e.target.setAttribute('src', "../../imgs/burger-menu-clear.svg")
    } else {
        e.target.setAttribute('src', "../../imgs/burger-menu.svg")
    }
})