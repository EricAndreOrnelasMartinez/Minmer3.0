const form = document.getElementById('main')
fetch('../PHP/getprofile.php')
.then(res => res.json())
.then(dataF =>{
    for(i in dataF){
        let output = `
        <input type="text" value="${dataF[i].Mail}"/>
        <input type="text" value="${dataF[i].Nombre}"/>
        <input type="text" value="${dataF[i].Apellido}"/>
        <input type="number" value="${dataF[i].rowN}"/>
        <input type="submit" value="Actualizar"/>
        `
        
    }
})