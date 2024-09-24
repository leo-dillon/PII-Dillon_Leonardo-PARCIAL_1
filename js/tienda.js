const inputRange = document.querySelector('.price')
const valor = document.querySelector('.price .small')
inputRange.addEventListener('input', (e) => {
    valor.innerText =  `$${e.target.value}`
})
// Generar Carrito para enviar portafolio
// const btn_productos = document.querySelectorAll('.agregarCarrito')
// btn_productos.forEach(producto => {
//     producto.addEventListener('click', (e) => {
//         console.log(e.target.offsetParent.querySelector('.id'))
//     })
// });