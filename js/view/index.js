document.getElementById('frm').addEventListener("submit", function(e){
    const user =  document.getElementById('usr').value;
    const password = document.getElementById('pass').value;
    if(user === '' || password === ''){
        e.preventDefault();
        return window.alert("Todos los datos son obligatorios")
    }
})