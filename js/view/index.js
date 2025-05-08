document.getElementById('frm').addEventListener("submit", function(e){
    const user =  document.getElementById('usr').value;
    const password = document.getElementById('pass').value;
    if(user === '' || password === ''){
        e.preventDefault();
        return window.alert("Todos los datos son obligatorios")
    }
    fetch('../model/view/iniciarsession.php', {
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            user,
            password
        })
    })
    .then(rpta => {
        if(!rpta.ok){
            return window.alert(`Error la respuesta no es un json ${rpta}`);
        }
        switch(rpta.status){
            case 500:
                return window.alert("Error internal server");
            default:
                console.log(`Estado: ${rpta.status}`);
        }
        return rpta.json();
    })
    .then(datos => {
        if(datos.fail){
            return window.alert(datos.fail);
        }
    })
    .catch(err => {
        return window.alert(`Error desconocido: ${err}`);
    })
    e.preventDefault();
})