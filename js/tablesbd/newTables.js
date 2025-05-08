document.getElementById('upnewtables').addEventListener("click", function(e){
    fetch('../model/tablesbd/upnewtable.php', {
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(rpt => {
        if(!rpt.ok){
            return window.alert(`La respuesta no es un json`);
        }
        switch(rpt.status){
            case 500:
                return window.alert(`Internal error server`);
            default:
                console.log(`Estado: ${rpt.status}`);
        }
        return rpt.json();
    })
    .then(datos => {
        if(datos.succes){
            return alert(datos.succes);
        }
        if(datos.fail){
            return alert(datos.fail);
        }
    })
    .catch(err => {
        return window.alert(`Error desconocido ${err}`)
    })
    e.preventDefault()
})