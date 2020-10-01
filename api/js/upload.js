window.addEventListener('DOMContentLoaded', function() {
    const formImagen = document.getElementById('form-imagen');
    const inputImagen = document.getElementById('imagen');
    const divRespuesta = document.getElementById('respuesta');
    const previewImage = document.getElementById('preview-image');
    const data = {
        imagen: null
    };

    // Vamos a leer el archivo que el usuario seleccione en el campo de "imagen" cada vez que cambie el valor.
    inputImagen.addEventListener('change', function() {
        // Para obtener los archivos que estén en el campo de file podemos acceder a la propiedad "files".
        // "files" es un array que contiene todos los archivos (en el caso de tener el atributo multiple)
        // del input. Si no es "multiple", siempre va a ser un array de una única posición.
        const file = inputImagen.files[0];

        console.log("Archivo elegido por el usuario: ", file);
        // Vemos que cada archivo viene como una instancia de "File".
        // "File" representa un archivo, y nos da algunas propiedades de solo lectura sobre el mismo.
        // Pero vamos a notar que no figura el contenido del archivo entre ellas.
        // Para leerlo y obtener ese contenido, necesitamos ayudarnos de otra clase: FileReader.

        const reader = new FileReader();

        console.log(reader);

        // Seteamos el evento "load" para indicar lo que queremos que haga cuando la imagen se termine de
        // "leer".
        reader.addEventListener('load', function() {
            // El resultado de la lectura va a figurar en la propiedad "result" del reader.

            console.log("Resultado de lectura: ", reader.result);

            // Ponemos el resultado como "src" de la imagen de preview.
            previewImage.src = reader.result;

            // Guardamos el base64 en el objeto de data para Ajax.
            data.imagen = reader.result;
        });

        // Habiendo configurado el evento, podemos leer el archivo usando el método "readAsDataURL" que
        // recibe el archivo como parámetro, y lo lee en formato base64.
        reader.readAsDataURL(file);
    });

    formImagen.addEventListener('submit', function(ev) {
        ev.preventDefault();

        fetch('api/subir-imagen.php', {
            method: 'POST',
            body: JSON.stringify(data)
        })
            .then(rta => rta.json())
            .then(respuesta => {
                if(respuesta.success) {
                    divRespuesta.innerHTML = "La imagen se subió exitosamente.";
                } else {
                    divRespuesta.innerHTML = "Ocurrió un error al subir la imagen. Mala leche.";
                }
            });
    });
});