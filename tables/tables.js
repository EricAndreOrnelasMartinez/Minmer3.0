const table = document.getElementById('main');
const button1 = document.getElementsByClassName('eliminar')
fetch('../PHP/sessioncheck.php')
.then(res => res.json())
.then(ans =>{
    let aux = ans
    if(aux === '1'){
    }else{
        window.location.assign('../')
    }
})

function deleteP(id, city){
    let aux = confirm('¿Desea eliminar el proceso?')
    let data = {id,city}
    let dataA = new FormData(data)
    console.log(data)
    if(aux){
        fetch('../PHP/delete.php', {
            method: 'POST',
            body: dataA
        })
        .then(res => res.json())
        .then(dataF => {
            alert(dataF)
        })
    }
}
