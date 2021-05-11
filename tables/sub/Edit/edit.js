const form = document.getElementById('data')

form.addEventListener('submit', e =>{
    e.preventDefault()

    let data = new FormData(form)
    fetch('../../../PHP/edit.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(dataF =>{
        console.log(dataF)
    })
})