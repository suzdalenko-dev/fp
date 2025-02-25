$(document).ready(function () {
  // URL de la API
  let url = "https://jsonplaceholder.typicode.com/todos";

  // Realizar la petición AJAX con jQuery
  $.getJSON(url, function (data) {
    console.log(data);

    let content = '';
    // Recorrer los datos y construir el contenido
    data.forEach(item => {
      content += "<div>";
      content += `<p>Int id: ${item.id}</p>`;
      content += `<p>String título: ${item.title}</p>`;
      content += `<p>Boolean completado: ${item.completed}</p>`;
      content += "</div><br><hr><br>";
    });

    // Mostrar el contenido en la página
    $("#content").html(content);
  }).fail(function (jqXHR, textStatus, errorThrown) {
    // Manejo de errores
    $("#content").text(`Error al obtener los datos: ${jqXHR.status} ${errorThrown}`);
  });
});