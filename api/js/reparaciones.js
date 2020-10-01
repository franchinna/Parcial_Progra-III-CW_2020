window.addEventListener('DOMContentLoaded', function () {
    const tableReparacion = document.querySelector('#listadoAutos .table-responsive');
    const inputPatente = document.getElementById('patente');
    const inputFecha = document.getElementById('fechaReparacion');
    const inputDescript = document.getElementById('descripcionDeReparacion');
    const formReparacion = document.getElementById('form-reparacion');
    const selectMarca = document.getElementById('selectMarca');
    const selectModelo = document.getElementById('selectModelo');

    window.addEventListener('load', function () {
        fetch('api/reparaciones.php')
            .then(res => res.json())
            .then(rta => {
                const reparaciones = rta.data;
                const filasReparaciones = reparaciones.map(item =>
                    `<tbody>
                        <tr>
                            <th scope="row">${item.id}</th>
                            <td>${item.patente}</td>
                            <td>${item.marca}</td>
                            <td>${item.modelo}</td>
                            <td>${item.fecha}</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img class="edit-user" title="Detalles del auto"
                                                     src="res/img/detalles.svg"
                                                     alt="Edit User">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="edit-user" title="Editar el auto" src="res/img/edit.svg"
                                                     alt="Edit User">
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                        </tr>
                    </tbody></table>`).join('');

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
                              ${filasReparaciones}`;
            });
    });


    window.addEventListener('load', function (){
        fetch('api/marcas.php')
            .then(res => res.json())
            .then(rta => {
                const marcas = rta.data;
                const optionSelect = marcas.map(item => `
                <option>${item.marca}</option>`).join('');
                console.log(optionSelect)
                selectMarca.innerHTML = optionSelect;
            });

    });
/*
    formLogin.addEventListener('submit', function (ev) {
        ev.preventDefault();
        const data = {
            email: inputEmail.value,
            password: inputPassword.value,
        };

        fetch('api/acciones/login.php', {
            method: 'post',
            body: JSON.stringify(data)
        })
            .then(rta => rta.json())
            .then(respuesta => {
                if (respuesta.success) {
                    location.href = "index.php?s=panel-admin";
                } else {
                    console.log("error");
                }
            });
    });*/
});