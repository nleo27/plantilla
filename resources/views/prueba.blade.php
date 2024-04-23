@extends('adminlte::page')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card w-100" style="margin-top: 60px;">
                    <div class="card-header">
                        <h3 class="card-title">Todos los periodos registrados</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarPeriodoModal">
                                Agregar Nuevo
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>No tienes periodos registrados.aqui en donde hemos cargado</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para agregar un nuevo periodo -->
<div class="modal fade" id="agregarPeriodoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Período</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formAgregarPeriodo">
                    <div class="form-group">
                        <label for="periodo">Período:</label>
                        <input type="text" class="form-control" id="periodo" name="periodo" placeholder="Ej: 2023 - 2026">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripción del período"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="guardarPeriodo()">Guardar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function guardarPeriodo() {
        var periodo = document.getElementById('periodo').value;
        var descripcion = document.getElementById('descripcion').value;
        // Aquí puedes agregar la lógica para guardar el período utilizando JavaScript o AJAX
        // Por ejemplo, puedes enviar los valores del formulario a tu backend utilizando AJAX
        console.log('Período:', periodo);
        console.log('Descripción:', descripcion);
        // Aquí puedes agregar la lógica para limpiar el formulario después de guardar el período
        document.getElementById('formAgregarPeriodo').reset();
        // Cierra el modal después de guardar el período
        $('#agregarPeriodoModal').modal('hide');
    }
</script>
@endsection