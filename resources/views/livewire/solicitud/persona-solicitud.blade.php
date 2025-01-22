<div wire:ignore.self id="solicitud" class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" style="display: block">
    <div class="widget widget-table-three">

        <div class="widget-heading">
            <h5 class="">Detalle Solicitud</h5>
        </div>

        <div class="widget-content">

            <div class="form-row">

                <div class="col-md-4 mb-4">
                    <label for="">Tipo de Prestamo</label>
                    <select wire:model.defer="tipo_prestamo_1" class="form-control">
                        @foreach ($tipo_prestamo as $item)
                            <option value="{{$item->id}}">{{$item->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="">Monto Solicitado</label>
                    <input wire:model.defer="monto_solicitado" type="text" class="form-control text-right" id="monto_solictado" maxlength="9" onkeyup="punto_decimal(this)" onchange="punto_decimal(this)">
                    <input wire:model.defer="solicitud_id" type="hidden" name="">
                </div>

                <div class="col-md-4 mb-4">
                    <label for="">Plazo</label>
                    <input wire:model.defer="plazo" type="text" class="form-control" id="plazo" value="">
                </div>

                <div class="col-md-4 mb-4">
                    <label for="">Tasa</label>
                    <input wire:model.defer="tasa" type="text" class="form-control" readonly>
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
