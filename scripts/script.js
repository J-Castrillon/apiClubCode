'use strict';

window.addEventListener('load', () => {
    let formulario = document.querySelector('#form-login');

    formulario.addEventListener('submit', (event) => {
        event.preventDefault();

        let url = '../php/index.php';
        let formData = new FormData(formulario);

        fetch(url, {
            method: 'POST', // Envía la información por debajo sin ser visible;
            body: formData
        })
        .then(response=>response.json())
        .then(data=>{
            console.log(data);
            data == "Registered" ? 
            window.location.href="https://www.google.com/" : 
            alert("No se pudo registrar");
        }); 
    });
}); 