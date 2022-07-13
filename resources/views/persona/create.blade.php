@extends('layouts.admin')

@section('content')

    <div class="mt-4 seperator-header">
        <h4 class="fw-bold" style="font-weight: bold">Crear Persona</h4>
    </div>

    <form class="needs-validation" novalidate action="javascript:void(0);">
        <div class="form-row">
            <div class="col-md-3 mb-4">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                <div class="valid-feedback">
                    Dato correcto!
                </div>
                <div class="invalid-feedback">
                    Por favor complete su nombre.
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                <div class="valid-feedback">
                    Dato correcto!
                </div>
                <div class="invalid-feedback">
                    Por favor complete su apellido.
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <label for="fecha_nacimiento">Fecha Nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                <div class="valid-feedback">
                    Dato correcto!
                </div>
                <div class="invalid-feedback">
                    Por favor complete su fecha de nacimiento.
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-4">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
                <div class="invalid-feedback">
                    Por favor complete la dirección.
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">
            </div>
            <div class="col-md-3 mb-4">
                <label for="celular">Linea baja</label>
                <input type="text" class="form-control" id="linea_baja" name="linea_baja" placeholder="Linea Baja">
            </div>
        </div>


        <button class="btn btn-primary mt-3" type="submit">Crear</button>

    </form>

@endsection

@section('js')
    <script>
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
    </script>
@endsection
