document.getElementById('formIngresar').addEventListener('submit', async (e) => {
    e.preventDefault();

    try {

        var datos = new FormData(document.getElementById('formIngresar'));
        datos.append('ingresar', 'OK');

        var peticion = await fetch('../Controllers/LoginController.php', {
            method: 'POST',
            body: datos
        })

        var resjson = await peticion.json();

        if (resjson.respuesta == "OK") {
            console.log("Bien");
            window.location = "admin.php";
        } else {
            console.log(resjson.respuesta);
        }

    } catch (error) {
       console.log(error);
    }

})

