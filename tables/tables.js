const table = document.getElementById('main');
const button1 = document.getElementById('eliminar')
fetch('../PHP/sessioncheck.php')
.then(res => res.json())
.then(ans =>{
    let aux = ans
    if(aux === '1'){
    }else{
        window.location.assign('../')
    }
})

button1.addEventListener('click', e=>{
    e.preventDefault()
    let aux = confirm('¿Desea eliminar el proceso?')
    console.log(aux)
    console.log(button1.getAttribute('value'))
})