function validateRegister()
{
    register_user = document.getElementById('register_user').value;
    register_email = document.getElementById('register_email').value;
    register_name = document.getElementById('register_name').value;
    register_tel = document.getElementById('register_tel').value;
    register_pass1 = document.getElementById('register_pass1').value;
    register_pass2 = document.getElementById('register_pass2').value;

    if (register_user=='' || register_email=='' || register_name=='' || register_tel=='' || register_pass1=='' || register_pass2=='')
    {
        alert("Debe Ingresar todos los campos");        
    }else if (register_pass1!=register_pass2)
    {
        alert("Las contraseñas deben ser iguales");
    }else
    {
        let url = 'add_user.php';
        let method = 'POST';
        let params = 'user='+register_user;
        params += '&email='+register_email;
        params += '&name='+register_name;
        params += '&pass='+register_pass1;
        params += '&tel='+register_tel;
        var container_id = 'another_container' ;
        var loading_text = '<img src="https://c.tenor.com/tEBoZu1ISJ8AAAAC/spinning-loading.gif">' ;
        // llamamos ajax function
        ajax (url, method, params, container_id, loading_text) ;
        alert("Usuario registrado con éxito");        
    }

}


function showAddModal()
{
    $("#add_items_modal").modal("show");
}

function addItem()
{	
    $("#add_items_modal").modal("hide");
    
    add_nombre = document.getElementById("add_nombre").value;
    add_tipo = document.getElementById("add_tipo").value;
    add_ataque = document.getElementById("add_ataque").value;
    add_defensa = document.getElementById("add_defensa").value;
    add_vida = document.getElementById("add_vida").value;
    add_precio = document.getElementById("add_precio").value;
    add_username = document.getElementById("add_username").value;
    add_url = document.getElementById("add_url").value;

    let url = 'add_item.php';
    let method = 'POST';
    let params = 'nombre='+add_nombre;
    params += '&tipo='+add_tipo;
    params += '&ataque='+add_ataque;
    params += '&defensa='+add_defensa;
    params += '&vida='+add_vida;
    params += '&precio='+add_precio;
    params += '&username='+add_username;
    params += '&url_item='+add_url;
    var container_id = 'list_container' ;
    var loading_text = '<img src="https://c.tenor.com/tEBoZu1ISJ8AAAAC/spinning-loading.gif">' ;
    // llamamos ajax function
    ajax (url, method, params, container_id, loading_text) ;
}

function delete_item(id)
{
    if (confirm('Confirma eliminar registro de alumno ?')) {
        // initialisation
        var url = 'delete_item.php';
        var method = 'POST';
        var params = 'id='+id;
        var container_id = 'list_container' ;
        var loading_text = '<img src="https://c.tenor.com/tEBoZu1ISJ8AAAAC/spinning-loading.gif">' ;
        // call ajax function
        ajax (url, method, params, container_id, loading_text) ;
    }
}

function showUpdateModal(id,nombre,tipo,ataque,defensa,vida,precio,propietario,url_item)
{
    $("#update_items_modal").modal("show");
    document.getElementById("update_id").value = id;
    document.getElementById("update_nombre").value = nombre;
    document.getElementById("update_tipo").value = tipo;
    document.getElementById("update_ataque").value = ataque;
    document.getElementById("update_defensa").value = defensa;
    document.getElementById("update_vida").value = vida;
    document.getElementById("update_precio").value = precio;
    document.getElementById("update_username").value = propietario;
    document.getElementById("update_url").value = url_item;
}

function update_item()
{
    $("#update_items_modal").modal("hide");
    id = document.getElementById("update_id").value;
    nombre = document.getElementById("update_nombre").value;
    tipo = document.getElementById("update_tipo").value;
    ataque = document.getElementById("update_ataque").value;
    defensa = document.getElementById("update_defensa").value;
    vida = document.getElementById("update_vida").value;
    precio = document.getElementById("update_precio").value;
    username = document.getElementById("update_username").value;
    url_item = document.getElementById("update_url").value;

    var url = 'update_item.php';
    var method = 'POST';
    var params = 'id='+id;
    params += '&nombre='+nombre;
    params += '&tipo='+tipo;
    params += '&ataque='+ataque;
    params += '&defensa='+defensa;
    params += '&vida='+vida;
    params += '&precio='+precio;
    params += '&username='+username;
    params += '&url_item='+url_item;
    var container_id = 'list_container' ;
    var loading_text = '<img src="https://c.tenor.com/tEBoZu1ISJ8AAAAC/spinning-loading.gif">' ;
    // call ajax function
    ajax (url, method, params, container_id, loading_text) ;
}
// ajax : basic function for using ajax easily
function ajax (url, method, params, container_id, loading_text) {
    try { // For: chrome, firefox, safari, opera, yandex, ...
    	xhr = new XMLHttpRequest();
    } catch(e) {
	    try{ // for: IE6+
	    	xhr = new ActiveXObject("Microsoft.XMLHTTP");
	    } catch(e1) { // if not supported or disabled
		    alert("Not supported!");
		}
	}
	xhr.onreadystatechange = function() {
						       if(xhr.readyState == 4) { // when result is ready
							       document.getElementById(container_id).innerHTML = xhr.responseText;
							   } else { // waiting for result 
							       document.getElementById(container_id).innerHTML = loading_text;
							   }
						   	}
	xhr.open(method, url, true);
	xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhr.send(params);
}