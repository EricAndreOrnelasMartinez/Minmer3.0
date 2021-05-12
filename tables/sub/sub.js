
function deleteP(id){
    let form = document.getElementById(id)
    let data = new FormData(form)
    let aux = confirm('¿Desea eliminar el proceso?')
    if(aux){
        fetch('../../PHP/deletesub.php', {
            method: 'POST',
            body: data
        })
        .then( res => res.json())
        .then(dataF =>{
            if(dataF === '1'){
                window.location.reload()
            }else{
                alert('Error 500')
            }
        })
    }
}