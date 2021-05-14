const form = document.getElementById('main')
fetch('../PHP/getprofile.php')
.then(res => res.json())
.then(dataF =>{
    for(i in dataF){
        let output = `
        <input type="text" value="${dataF[i].Mail}" name="mail"/>
        <input type="text" value="${dataF[i].Nombre} name="nombre""/>
        <input type="text" value="${dataF[i].Apellido} name="apellido"/>
        <input type="number" value="${dataF[i].rowN}" name="rowN"/>
        <input type="submit" value="Actualizar"/>
        `
        form.innerHTML = output
    }
})

form.addEventListener('submit', e =>{
    e.preventDefault()
    let data = new FormData(form)
    fetch('../PHP/updateprofile.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .then(dataF =>{
        console.log(dataF)
    })
})