const inputRange = document.querySelector('.inputPrecio')
const valor = document.querySelector('.valor')
inputRange.addEventListener('input', (e) => {
    valor.innerText =  `- ${e.target.value}`
})