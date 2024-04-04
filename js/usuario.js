function iniciar_Sesion() {
    let usu = document.getElementById('txtUsu').value;
    let pass = document.getElementById('txtPass').value;
    if (usu.length == 0 || pass.length == 0) {
        return Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '!LLENE LOS CAMPOS DE LA SESSION!',

        });
    }

    $.ajax({
        url: 'controller/usuario/iniciar_sesion.php',
        type: 'POST',
        data: {
            u: usu,
            p: pass,
        }

    }).done(function (resp) {
        console.log(resp);
        let data = JSON.parse(resp);
        console.log(data);
        if (data.length > 0) {
            $.ajax({
                url: 'controller/usuario/crear_sesion.php',
                type: 'POST',
                data: JSON.stringify(data),

            }).done(function (resp) {
                console.log(resp);
                location.reload();
            })
        }
    })
}