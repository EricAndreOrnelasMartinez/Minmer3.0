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

function deleteP(id){
    let form = document.getElementById(id)
    let data = new FormData(form)
    console.log(data.get('city'))
    let aux = confirm('¿Desea eliminar el proceso?')
    if(aux){
        fetch('../PHP/delete.php', {
            method: 'POST',
            body: data
        })
        .then( res => res.json())
        .then(dataF =>{
            alert(dataF)
        })
    }

}


