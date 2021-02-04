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
const openSearch = () => {
    id('containerSearch').classList.toggle('open-search')
    id('search').focus()
}
const closeSearch = () => {
    id('containerSearch').classList.toggle('open-search')
    id('search').blur()
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
const validate = (regExp, idInput, idMessage, $message) => {
    const value = id(idInput).value.trim()
    const input = id(idInput)
    const contMessage = id(idMessage)
    if (regExp.test(value)) {
        contMessage.innerHTML = ''
        input.classList.remove('input-error')
        return true
    }
    else{
        contMessage.classList.add('message-error')
        input.classList.add('input-error')
        contMessage.innerHTML = $message
        return false
    }
}

const validateCustomer = (e) => {
    e.preventDefault()
    data = new FormData(id('formRegisterCustomer'))
    fetch('/customer/store', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(res => {
        if (res.type === 'success') {
            console.log(res.message)
            // window.location = '/'
        }else{
            id('messageForm').innerHTML = res.message
            id('messageForm').classList.add('alert-error')
        }
    })

}
const validateLoginCustomer = (e) => {
    e.preventDefault()
    data = new FormData(e.target.form)
    fetch('/customer/validate-login', {
        method: 'POST',
        body: data
    })
    .then(res => res.text())
    .then(res => {
        console.log(res)
        if (res === 'true') {
            window.location = '/'
        } else if (res === 'false') {
            id('messageLogin').innerHTML = 'Usuario o contraseña incorrectos'
            id('messageLogin').classList.add('alert-error')
        }
    })
}
const validateLoginCustomerModal = (e) => {
    e.preventDefault()
    data = new FormData(e.target.form)
    fetch('/customer/validate-login', {
        method: 'POST',
        body: data
    })
    .then(res => res.text())
    .then(res => {
        console.log(res)
        if (res === 'true') {
            window.location = '/'
        } else if (res === 'false') {
            id('messageLoginModal').innerHTML = 'Usuario o contraseña incorrectos'
            id('messageLoginModal').classList.add('alert-error')
        }
    })
}
//agregar cantidad
const addAmount = () => {
    let v = id('inputAmount').value
    id('inputAmount').value = parseInt(v) + 1
}
const removeAmount = () => {
    let v = id('inputAmount').value
    id('inputAmount').value = parseInt(v) - 1
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
//mostrar modal para buscar
//abrir modal login
if (id('openLogin')) {
    id('openLogin').addEventListener('click', openCloseLogin)
}
//cerrar modal login haciendo clic fuera del login
id('modalLogin').addEventListener('click', closeLogin)
id('openSearch').addEventListener('click', openSearch)
//cerrar buscardor en el header
id('closeSearch').addEventListener('click', closeSearch)
//iniciar sesion
if (id('btnLogin')) {
    id('btnLogin').addEventListener('click', validateLoginCustomer)
}
if (id('btnLoginModal')) {
    id('btnLoginModal').addEventListener('click', validateLoginCustomerModal)
}

//validar cliente al registrar
if (id('name')) {
    id('name').addEventListener('blur', () => {
        validate(/^[a-zA-Z ]{1,50}$/, 'name', 'messageName', 'Nombre incorrecto')
    })
}
if (id('lastname')) {
    id('lastname').addEventListener('blur', () => {
        validate(/^[a-zA-Z ]{1,50}$/, 'lastname', 'messageLastname', 'Apellido incorrecto')
    })
}
if (id('dni')) {
    id('dni').addEventListener('blur', () => {
        validate(/^[0-9]{8}$/, 'dni', 'messageDni', 'El Dni debe tener 8 digitos')
    })
}
if (id('password')) {
    id('password').addEventListener('blur', () => {
        validate(/^[a-zA-Z0-9]{6,20}$/, 'password', 'messagePassword', 'La contraseña debe tener mayusculas, minusculas o numeros (6 y 20 caracteres)')
    })
}
if (id('btnRegister')) {
    id('btnRegister').addEventListener('click', validateCustomer)
}


//agregar cantidad
if (id('btnAddAmount')) {
    id('btnAddAmount').addEventListener('click', addAmount)
}
if (id('btnRemoveAmount')) {
    id('btnRemoveAmount').addEventListener('click', removeAmount)
}



q('.btn').addEventListener('click', () => {
    id('loader').classList.toggle('loader')
})
