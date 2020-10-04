window.addEventListener('DOMContentLoaded', function () {
    const tableReparacion = document.querySelector('#listadoAutos .table-responsive');
    const inputPatente = document.getElementById('patente');
    const inputFecha = document.getElementById('fechaReparacion');
    const inputDescript = document.getElementById('descripcionDeReparacion');
    const formReparacion = document.getElementById('form-reparacion');
    const selectMarca = document.getElementById('selectMarca');
    const divAlert = document.querySelector('.alert');

    window.addEventListener('load', function () {
        traerProductos();
    });

    window.addEventListener('load', function (){
        fetch('api/marcas.php')
            .then(res => res.json())
            .then(rta => {
                const marcas = rta.data;
                const optionSelect = marcas.map(item => `
                <option value="${item.id}" >${item.marca}</option>`).join('');
                selectMarca.innerHTML = optionSelect;
            });
    });

    formReparacion.addEventListener('submit', function (ev) {
        ev.preventDefault();
        const data = {
            patente: inputPatente.value,
            fecha: inputFecha.value,
            descripcion: inputDescript.value,
            id_marca: selectMarca.value,
            id_modelo: '0',
        };

        fetch('api/reparaciones.php', {
            method: 'post',
            body: JSON.stringify(data)
        })
            .then(rta => rta.json())
            .then(respuesta => {
                if (respuesta.success) {
                    divAlert.innerHTML = respuesta.mensaje;
                    divAlert.setAttribute('class','alert alert-success');
                    divAlert.style.display = 'block';
                    traerProductos();
                } else {
                    divAlert.innerHTML = respuesta.error;
                    divAlert.setAttribute('class', 'alert alert-danger');
                    divAlert.style.display = 'block';
                    traerProductos();
                }
            });
    });

    function traerProductos() {
        fetch('api/reparaciones.php')
            .then(res => res.json())
            .then(rta => {
                const reparaciones = rta.data;
                const filasReparaciones = reparaciones.map(item =>
                    `<th scope="row">${item.id_reparacion}</th>
                        <td>${item.patente}</td>
                        <td>${item.id_marca}</td>
                        <td>${item.id_modelo}</td>
                        <td>${item.fecha}</td>
                        <td>
                            <ul>
                                <li>
                                    <a href="#" >
                                        <img class="edit-user" title="Detalles del auto"
                                             src="res/img/detalles.svg"
                                             alt="Edit User">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" >
                                        <img class="edit-user" title="Editar el auto" src="res/img/edit.svg"
                                             alt="Edit User">
                                    </a>
                                </li>
                            </ul>
                        </td>
                        </tr>`).join('');

                tableReparacion.innerHTML = `
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Patente</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Modelo</th>
                                <th scope="col" colspan="2">Fecha</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              ${filasReparaciones}

                            </tbody>
                        </table>`;
            });

    }
});