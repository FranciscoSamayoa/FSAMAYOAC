var permisosUsuario = [];

function agregarTabla(etiqueta) {
    etiqueta.remove();
    var etiqueta1 = etiqueta.textContent;
    permisosUsuario.push(etiqueta1);
    var newRow = document.createElement('tr');
    newRow.innerHTML = `
        <td>${etiqueta1}</td>
        <td><button onclick="regresarContenedor(this)">Eliminar</button></td>
    `;
    document.querySelector('#tablaEtiquetas tbody').appendChild(newRow);
}

function regresarContenedor(etiqueta) {
    var row = etiqueta.closest('tr');
    var etiqueta1 = row.querySelector('td').textContent;

    permisosUsuario = permisosUsuario.filter(function(etiqueta) {
        return etiqueta !== etiqueta1;
    });

    var nuevaEtiqueta = document.createElement('span');
    nuevaEtiqueta.className = 'label';
    nuevaEtiqueta.textContent = etiqueta1;
    nuevaEtiqueta.onclick = function() { agregarTabla(this); };

    // Inserta la etiqueta de nuevo al contenedor
    var etiquetaContenedor = document.getElementById('labelContainer');
    etiquetaContenedor.insertBefore(nuevaEtiqueta, etiquetaContenedor.firstChild);
    row.remove();
}

document.getElementById('guardarButton').addEventListener('click', function() {
    // Enviar las etiquetas
    document.getElementById('etiquetasInput').value = permisosUsuario;
    // Enviar el formulario
    document.getElementById('miFormulario').submit();
});