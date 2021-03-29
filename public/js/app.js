/*
    Para validaciones en el formulario de concursantes
*/

function elegirGanador(){
    $.ajax({
    // se toma la ruta que se desea usar
        url: '/sortear',
        // metodo en el que ira a la informacion
        method: 'POST',
        // tipo de dato para la informacion
        dataType: 'json',
        // serializa la informacion ingresada para ponerla dentro de la base
        data: $("#form"+).serialize(),
        // si hay respuesta positiva
        success: function (response) {
            if(response != 0){   
                if(response == 1){

                alert('Se ha añadido el producto al carrito de compras');
                location.reload();
                } else if(response == 2){
                    alert('El producto ya se encuentra en el carrito de compras');
                }             
            } else{
                alert('No se ha podido realizar la acción');
            }
        },
        // si hay respuesta negativa
        error: function (error) {
            console.log(error);
        }
    });
}