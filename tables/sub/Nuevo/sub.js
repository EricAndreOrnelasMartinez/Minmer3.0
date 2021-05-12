const form = document.getElementById('data')

form.addEventListener('submit', e =>{
    e.preventDefault()

    let data = new FormData(form)
    fetch('../../../PHP/newRS.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(dataR =>{
        if(dataR === '1'){
            window.location.assign('../')
        }
    })
})