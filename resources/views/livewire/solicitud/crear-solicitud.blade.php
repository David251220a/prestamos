<div class="col-lg-12 col-12 layout-spacing">

    <div class="widget-content widget-content-area">
        <div class="widget widget-table-two">
            <div class="widget-heading">
                <h5 class="">Datos Personales</h5>
            </div>

            <div class="widget-content">
                <div class="form-row">
                    <div class="col-md-3 mb-4">
                        <label for="documento">Documento</label>
                        <input type="text" wire:model.defer="documento" class="form-control text-right" placeholder="Documento" 
                        onchange="puntos_decimal(this)" onkeyup="puntos_decimal(this)">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="nombre">Nombre</label>
                        <input type="text" wire:model.defer="nombre" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="apellido">Apellido</label>
                        <input type="text" wire:model.defer="apellido" class="form-control" placeholder="Apellido">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="direccion">Direccion</label>
                        <input type="text" wire:model.defer="direccion" class="form-control" placeholder="Direccion">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="email">Email</label>
                        <input type="email" wire:model.defer="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="celular">Celular</label>
                        <input type="text" wire:model.defer="celular" class="form-control" placeholder="Celular">
                    </div>
                </div>
            </div>
        </div>

        
    </div>

</div>
