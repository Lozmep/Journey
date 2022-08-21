function validarRegistro()
{
    user = document.getElementById('reg_user').value;
    email = document.getElementById('reg_email').value;
    nombre = document.getElementById('reg_name').value;
    tel = document.getElementById('reg_tel').value;
    pass1 = document.getElementById('reg_pass1').value;
    pass2 = document.getElementById('reg_pass2').value;
    tipo = 'Player';

    if (user=='' || email=='' || nombre=='' || tel=='' || pass1=='' || pass2=='')
    {
        alert('Todos los campos son obligatorios');
    }else
    {
        if (pass1!=pass2)
        {
            alert('Las contraseñas deben coincidir');
        }else
        {
            var url = 'add_user.php';
            var method = 'POST';
            var params = 'user='+user;
            params += '&email='+email;
            params += '&nombre='+nombre;
            params += '&tel='+tel;
            params += '&tipo='+tipo;
            params += '&pass='+pass1;
            var container_id = 'register-container' ;
            var loading_text = '<img src="https://c.tenor.com/tEBoZu1ISJ8AAAAC/spinning-loading.gif">' ;
            // call ajax function
            ajax (url, method, params, container_id, loading_text);
        }
    }

}