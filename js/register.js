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
            empresa:empresa,
        }
    }).done(function (e) {
        console.log(e);
        if(e==1){
            window.location.href = "/";
        }
    })

}