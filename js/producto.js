let restar = document.querySelector('.restar')
let valor = document.querySelector('.valor')
let sumar = document.querySelector('.sumar')
let stock = document.querySelector('.stock')


restar.addEventListener('click', () => {
    val = parseInt( valor.innerText );
    if(val == 1){
        return ''
    }
    valor.innerText = val - 1
})
sumar.addEventListener('click', () => {
    val = parseInt( valor.innerText );
    if(val == parseInt(stock.innerText)){
        valor.innerHTML = val
        return ''
    }else{
        valor.innerText = val + 1
    }
})