function crear_cuenta() {
    let name = document.getElementById('name').value;
    let ap_p = document.getElementById('ap_p').value;
    let ap_m = document.getElementById('ap_m').value;
    let dni = document.getElementById('dni').value;
    let cel = document.getElementById('cel').value;
    let email = document.getElementById('email').value;
    let pass = document.getElementById('password').value;
    let pass2 = document.getElementById('password2').value;
    let empresa = document.getElementById('select_empresa').value;

    //return console.log(estado);
    $.ajax({

        url: '../controller/usuario/crear_usu.php',
        type: 'POST',
        data: {
            dni: dni,
            name: name,
            ap_p: ap_p,
            ap_m: ap_m,
            cel: cel,
            email: email,
            pass: pass,
            empresa: empresa,
        }
    }).done(function (e) {
        console.log(e);
        if (e == 1) {
            return Swal.fire("Mensaje de Confirmacion", "Registro Exitoso", "success").then((value) => {
                window.location.href = "/";
            });
            
        }
    })

}
function regresar() {
    window.location.href = "/";
}
function listar_empresa() {
    $.ajax({
        url: '../controller/empresa/listar_empr.php',
        type: 'POST',
        async: 'false'
    }).done(function (resp) {
        console.log(resp);

        let data = JSON.parse(resp);
        console.log(data);
        if (data.length > 0) {
            llenardata = "<option value='0'>Seleccionar Empresa </option>";
            for (let i = 0; i < data.length; i++) {
                llenardata += "<option value='" + data[i]['empr_name'] + "'>" + data[i]['empr_name'] + " </option>";
                // console.log(data[i]['usua_dni']);
                //break;
            }
            document.getElementById('select_empresa').innerHTML = llenardata;
            //console.log(data);
        } else
            llenardata = "<option value='0'>Seleccionar Empresa </option>";
        document.getElementById('select_empresa').innerHTML = llenardata;
        console.log("N o");
    });
}