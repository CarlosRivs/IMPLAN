$(document).ready(function () {
    $('input[type=radio][name=flexRadioDefault]').change(function () {
        var valor = $(this).val(); // Obtenemos el valor del input seleccionado
      if (this.id == 'Seccion-BdP') {
        $.ajax({
          type: 'POST',
          url: '/Admin/mapa/layers',
          data: {valor: valor},
          success: function (data) {
            console.log(data);
          },
          error: function (xhr, status, error) {
            console.error(xhr.responseText);
          }
        });
      }
      else if (this.id == 'Seccion-OP') {
        $.ajax({
          type: 'POST',
          url: '/Admin/mapa/layers',
          data: {valor: valor},
          success: function (data) {
              var objetosJSON = [];
              data.forEach(function (data) {
                  // buscar el archivo JSON en la ruta especificada
                  var nombreArch = data.map_Archivo
                  var nombre = data.map_Nombre
                  $.ajax({
                      type: "GET",
                      url: "/resources/JSON/" + nombreArch,
                      dataType: "json",
                      success: function (data) {
                          var objetoConNombre = { nombre: nombre,nombreArch: nombreArch, datos: data };
                          objetosJSON.push(objetoConNombre);
                          CargarMapa(objetosJSON);
                          ////////////////////////////////////////////////////////////////////////////////////
                      },
                  })
              });
          },
          error: function (xhr, status, error) {
            console.error(xhr.responseText);
          }
        });
      }
      else if (this.id == 'Seccion-PIC') {
        $.ajax({
          type: 'POST',
          url: '/Admin/mapa/layers',
          data: {valor: valor},
          success: function (data) {
            // hacer algo con la respuesta del servidor
            console.log(data);
          },
          error: function (xhr, status, error) {
            console.error(xhr.responseText);
          }
        });
      }
    });
  });
  



