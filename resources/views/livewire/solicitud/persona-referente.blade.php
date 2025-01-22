<div wire:ignore.self id="referente" class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" style="display: none">
    <div class="widget widget-table-three">

        <div class="widget-heading">
            <h5 class="">Referencias Personales</h5>
        </div>

        <div class="widget-content">

            <div class="form-row">

                <div class="col-md-4 mb-4">
                    <label for="nombre">Cedula 1</label>
                    <input wire:model.defer="cedula_1" type="text" class="form-control" onkeyup="punto_decimal(this)" onchange="punto_decimal(this)">
                    <input wire:model.defer="referente_1" type="hidden" class="form-control" id="referente_1" name="referente_1">
                    @error('cedula_1')
                        <span class="mensaje">
                            <div class="alert alert-light-danger border-0 mb-4 mt-2" role="alert">
                                Por favor complete este campo
                            </div>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 mb-4">
                    <label for="nombre">Nombre 1</label>
                    <input wire:model.defer="nombre_1" type="text" class="form-control" id="nombre_1" name="nombre_1" required>
                    @error('nombre_1')
                        <span class="mensaje">
                            <div class="alert alert-light-danger border-0 mb-4 mt-2" role="alert">
                                Por favor complete este campo
                            </div>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 mb-4">
                    <label for="nombre">Apellido 1</label>
                    <input wire:model.defer="apellido_1" type="text" class="form-control" id="apellido" name="apellido" required>
                    @error('apellido_1')
                        <span class="mensaje">
                            <div class="alert alert-light-danger border-0 mb-4 mt-2" role="alert">
                                Por favor complete este campo
                            </div>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 mb-4">
                    <label for="nombre">Celular 1</label>
                    <input wire:model.defer="celular_1" type="text" class="form-control ph-number">
                </div>

                <div class="col-md-8 mb-4">
                    <label for="nombre">Direccion 1</label>
                    <input wire:model.defer="direccion_1" type="text" class="form-control" id="direccion" name="direccion" required>
                    @error('direccion_1')
                        <span class="mensaje">
                            <div class="alert alert-light-danger border-0 mb-4 mt-2" role="alert">
                                Por favor complete este campo
                            </div>
                        </span>
                    @enderror
                </div>

                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="nombre">Cedula 2</label>
                    <input wire:model.defer="cedula_2" type="text" class="form-control" onkeyup="punto_decimal(this)" onchange="punto_decimal(this)">
                    <input wire:model.defer="referente_2" type="hidden" class="form-control" id="referente_2" name="referente_2">
                    @error('direccion_1')
                        <span class="mensaje">
                            <div class="alert alert-light-danger border-0 mb-4 mt-2" role="alert">
                                Por favor complete este campo
                            </div>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 mb-4">
                    <label for="nombre">Nombre 2</label>
                    <input wire:model.defer="nombre_2" type="text" class="form-control" id="nombre_2" name="nombre_2" required>
                    @error('nombre_2')
                        <span class="mensaje">
                            <div class="alert alert-light-danger border-0 mb-4 mt-2" role="alert">
                                Por favor complete este campo
                            </div>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 mb-4">
                    <label for="nombre">Apellido 2</label>
                    <input wire:model.defer="apellido_2" type="text" class="form-control" id="apellido" name="apellido" required>
                    @error('apellido_2')
                        <span class="mensaje">
                            <div class="alert alert-light-danger border-0 mb-4 mt-2" role="alert">
                                Por favor complete este campo
                            </div>
                        </span>
                    @enderror
                </div>

                <div class="col-md-4 mb-4">
                    <label for="nombre">Celular 2</label>
                    <input wire:model.defer="celular_2" type="text" class="form-control ph-number">
                </div>

                <div class="col-md-8 mb-4">
                    <label for="nombre">Direccion 2</label>
                    <input wire:model.defer="direccion_2" type="text" class="form-control" id="direccion" name="direccion" required>
                    @error('direccion_2')
                        <span class="mensaje">
                            <div class="alert alert-light-danger border-0 mb-4 mt-2" role="alert">
                                Por favor complete este campo
                            </div>
                        </span>
                    @enderror
                </div>

            </div>

            @if ($continua)
                <div>
                    <button wire:click="save()" class="btn btn-outline-info mb-2">Actualizar</button>
                </div>
            @else
                <div>
                    <button wire:click="save()" class="btn btn-outline-success mb-2">Continua</button>
                </div>
            @endif

        </div>

    </div>
</div>
