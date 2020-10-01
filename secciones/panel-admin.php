<section id="list-cars" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Panel de control</h2>
            </div>

            <div class="col-12 col-md-7">

                <article id="listadoAutos">
                    <h3>Autos reparados</h3>
                    <p>Listados de los autos que fueron atendidos en el taller</p>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Patente</th>
                                <th scope="col">Marca</th>
                                <th scope="col" colspan="2">Modelo</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">2</th>
                                <td>Patente</td>
                                <td>Marca</td>
                                <td>Modelo</td>
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
                            </tbody>
                        </table>
                    </div>

                </article>
            </div>

            <div class="col-12 col-md-5">
                <article id="altaAuto">
                    <h3>Registrar auto reparado</h3>
                    <p>Ingresa los datos del auto</p>
                    <form action="#" id="form-reparacion">
                        <div class="form-group">
                            <input type="text" class="form-control" id="patente" aria-describedby="patente"
                                   placeholder="Patente">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" id="fechaReparacion"
                                   aria-describedby="fechaReparacion">
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="marca" id="selectMarca">
                                <option>Elegí el modelo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="modelo" id="selectModelo">
                                <option>Elegí la marca</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="descripcionDeReparacion" rows="3"
                                      placeholder="Descripción de la reparación"></textarea>
                        </div>
                        <div class="text-right">

                            <button type="submit" class="btn btn-outline-primary mb-2">Registrar auto</button>
                        </div>
                    </form>
                </article>
            </div>

        </div>
    </div>
</section>

<script src="api/js/reparaciones.js"></script>
