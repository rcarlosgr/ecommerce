const { reduce } = require("lodash")

// require('./bootstrap');
const id = document.getElementById.bind(document)
const q = document.querySelector.bind(document)
const all = document.querySelectorAll.bind(document)

const openCloseMenu = () => {
    id('menu').classList.toggle('open-menu')
}
const closeMenu = (e) => {
    if (e.target === id('menu')) {
        openCloseMenu()
    }
}
const openCloseLogin = () => {
    id('modalLogin').classList.toggle('open-modal-login')
}
const closeLogin = (e) => {
    if(e.target === id('modalLogin')){
        openCloseLogin()
    }
}
const openCloseSearch = () => {
    id('containerSearch').classList.toggle('open-search')
    id('search').focus()

}
const showHideArrow = (element) => {
    element.addEventListener('click', () => {
        all('.menu-item-deploy > .icon-up').forEach(el => {
            if (el.parentNode === element) {
                el.classList.toggle('icon-hide')
            }
        })
        all('.menu-item-deploy > .icon-down').forEach(el => {
            if (el.parentNode === element) {
                el.classList.toggle('icon-hide')
            }
        })

    })
}
const openSubmenu = (element) => {
    element.addEventListener('click', () => {
        all('.menu-item-deploy ~ .submenu').forEach(el => {
            if (el.parentNode === element.parentNode){
                el.classList.toggle('open-submenu')
            }
        })
    })

}
// const validateCustomer = (e) => {
//     // data = new FormData(id('formRegisterCustomer'))
//     fetch('/messageSuccess', {
//         method: 'GET',
//         // body: data
//     })
//     .then(res => res.text())
//     .then(res => {
//         e.preventDefault()
//         console.log(res)
//         // window.location = "/jaj"
//     })

// }
//desplegar los submenu
let menuItemDeploy = all('.menu-item-deploy')
menuItemDeploy.forEach(element => openSubmenu(element))
//mostrar y quitar las flechas arriba y abajo
menuItemDeploy.forEach(element => showHideArrow(element))
//abrir menu
id('openMenu').addEventListener('click', openCloseMenu)
//cerrar menu haciendo click fuera del menu
id('menu').addEventListener('click', closeMenu)
//abrir modal login
id('openLogin').addEventListener('click', openCloseLogin)
//cerrar modal login haciendo clic fuera del login
id('modalLogin').addEventListener('click', closeLogin)
//mostrar modal para buscar
id('openSearch').addEventListener('click', openCloseSearch)
//cerrar buscardor en el header
id('closeSearch').addEventListener('click', openCloseSearch)


//validar cliente al registrar
const url = window.location.pathname
if (url === '/registro') {

}

