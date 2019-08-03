<div class="jumbotron text-center" style="margin-bottom:0">
    <center><h1>Consultas Especificas</h1></center>
    <p>Sin Descripción</p>
</div>
      @include('nav')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row" style="margin-top:30px">
                <div class="col-sm-12">
                    <h2>Predios</h2>
                    <h6>Chile, Agosto, 2019</h6>
                    <div>
                      <img style="border:3px solid gray" src="https://i.ibb.co/stqyt5B/002.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <p>Some text..</p>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum con</p>
                </div>
            </div>
        </div>
        <div class="col">
            <section class="content" style="margin-top:30px">
                <div class="tablas" id="tablas" style="margin-bottom:50px">
                                @yield("contenido")
                </div>
            </section>
        </div>
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
        <center><h1>Tablas Generales</h1></center>
</div>

<div class="container">
     <div class="row">
        <div class="container">
             <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Tabla<b> Usuarios</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Registro</span></a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Borrar</span></a>
                        </div>
                     </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                             </th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Nombre Usuario</th>
                                <th>Email</th>
                                <th>Acción</th>
                        </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="custom-checkbox">
                                                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                            <label for="checkbox1"></label>
                                                        </span>
                                                    </td>
                                                    <td>Leon</td>
                                                    <td>Cifuentes</td>
                                                    <td>Li93</td>
                                                    <td>cifuentes@gmail.com</td>
                                                    <td>
                                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="custom-checkbox">
                                                            <input type="checkbox" id="checkbox2" name="options[]" value="1">
                                                            <label for="checkbox2"></label>
                                                        </span>
                                                    </td>
                                                    <td>Lorena</td>
                                                    <td>Valverde</td>
                                                    <td>LoreVal</td>
                                                    <td>valverde@gmail.com</td>
                                                    <td>
                                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="custom-checkbox">
                                                            <input type="checkbox" id="checkbox3" name="options[]" value="1">
                                                            <label for="checkbox3"></label>
                                                        </span>
                                                    </td>
                                                    <td>Maria</td>
                                                    <td>Torres</td>
                                                    <td>MariaT</td>
                                                    <td>mariatorres@gmail.com</td>
                                                    <td>
                                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="custom-checkbox">
                                                            <input type="checkbox" id="checkbox4" name="options[]" value="1">
                                                            <label for="checkbox4"></label>
                                                        </span>
                                                    </td>
                                                    <td>Francisco</td>
                                                    <td>Parra</td>
                                                    <td>Pancho32</td>
                                                    <td>parra@gmail.com</td>
                                                    <td>
                                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="custom-checkbox">
                                                            <input type="checkbox" id="checkbox5" name="options[]" value="1">
                                                            <label for="checkbox5"></label>
                                                        </span>
                                                    </td>
                                                    <td>Martin</td>
                                                    <td>Zambrano</td>
                                                    <td>Zaza</td>
                                                    <td>Zambrano@gmail.com</td>
                                                    <td>
                                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="clearfix">
                                            <div class="hint-text">Mostrando <b>5</b> de <b>25</b> Entradas</div>
                                            <ul class="pagination">
                                                <li class="page-item disabled"><a href="#">Anterior</a></li>
                                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                                <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit Modal HTML -->
                                <div id="addEmployeeModal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form>
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Agregar Registro</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Nombre</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Apellido</label>
                                                        <input type="email" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nombre Usuario</label>
                                                        <textarea class="form-control" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                    <input type="submit" class="btn btn-success" value="Add">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit Modal HTML -->
                                <div id="editEmployeeModal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form>
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Registro</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Nombre</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Apellido</label>
                                                        <input type="email" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nombre Usuario</label>
                                                        <textarea class="form-control" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                    <input type="submit" class="btn btn-info" value="Save">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Delete Modal HTML -->
                                <div id="deleteEmployeeModal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form>
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Borrar Registro</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Esta seguro que desea borrar el registro?</p>
                                                    <p class="text-warning"><small>Esta acción no puede ser cancelada</small></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
    </div>
</div>




