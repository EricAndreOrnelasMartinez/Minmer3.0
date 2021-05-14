const form = document.getElementById('main')
const h2 = document.getElementById('res')
fetch('../PHP/getprofile.php')
.then(res => res.json())
.then(dataF =>{
    for(i in dataF){
        let output = `
        Email <input type="text" value="${dataF[i].Mail}" name="mail"/>
        Nombre <input type="text" value="${dataF[i].Nombre}" name="nombre"/>
        Apellido <input type="text" value="${dataF[i].Apellido}" name="apellido"/>
        Número <input type="number" value="${dataF[i].rowN}" name="rowN"/>
        <input type="submit" value="Actualizar"/>
        <a href="../tables/?city=CDMX"><button type="button">Volver</button></a>
        <h2 id="res"></h2>
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
        if(dataF === '1'){
            h2.innerHTML = 'Actualizado!'
            h2.className = 'ok'
        }else{
            h2.innerHTML = 'Error 500'
            h2.className = 'bad'
        }
    })
})