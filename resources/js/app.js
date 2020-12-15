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
const openLogin = () => {

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
id('openLogin').addEventListener('click', openLogin)
