function verificar(){
    alert("Los datos se han guardado con exito");
}

function confirmar(){
    let respuesta = confirm("Seguro que quieres eliminar este registro?");
    if (respuesta)
    {
        return true;
    }
    else{
        return false;
    }
}