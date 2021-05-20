const form = document.getElementById('data')
const h3 = document.getElementById('res')
form.addEventListener('submit', e =>{
    e.preventDefault()
    let dataF = new FormData(form)
    fetch('../PHP/newuser.php', {
        method: 'POST',
        body: dataF
    })
    .then(res => res.json())
    .then(data =>{
        let aux = data
        if(aux === '1'){
            window.location.assign('../')
        }else if(aux === '2'){
            h3.innerHTML = 'Llenar campos'
            h3.className = 'bad'
        }else{
            h3.innerHTML = 'El correo ya existe'
        }
    }).catch(err =>{
        h3.innerHTML = 'correo existente'
    })
})