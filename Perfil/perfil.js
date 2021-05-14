const form = document.getElementById('main')

fetch('../PHP/getprofile.php')
.then(res => res.json())
.then(dataF =>{
    console.log(dataF)
})