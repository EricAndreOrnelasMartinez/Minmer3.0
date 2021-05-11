const form = document.getElementById('data')
const h3 = document.getElementById('res')

form.addEventListener('submit', e =>{
    e.preventDefault()

    let data = new FormData(form)
    fetch('../../../PHP/edit.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(dataF =>{
        if(dataF === '1'){
            h3.innerHTML = '¡Guardado!'
            h3.className = 'ok'
        }else{
            h3.innerHTML = 'Error 500'
            h3.className = 'bad'
        }
    })
})