const inputRange = document.querySelector('.price')
const valor = document.querySelector('.valor')
inputRange.addEventListener('input', (e) => {
    valor.innerText =  `$${e.target.value}`
})