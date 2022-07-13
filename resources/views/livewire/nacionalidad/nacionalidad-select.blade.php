<div class="col-md-3 mb-4">
    <label for="ciudad" data-toggle="modal" data-target="#nacionalidad_modal">Nacionalidad</label>
    <select class="form-control  basic" name="nacionalidad" id="nacionalidad">
        @foreach ($nacionalidad as $item)
            <option value="{{$item->id}}">{{$item->descripcion}}</option>
        @endforeach
    </select>

    <div class="modal fade" id="nacionalidad_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Nacionalidad</h5>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <label for="celular">Nacionalidad</label>
                        <input type="text" wire:model.defer="descripcion" class="form-control" placeholder="Nacionalidad">
                    </div>
                </div>

                <div class="modal-footer">
                    <button wire:click="resetUI" class="btn bnt-cancel" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancelar</button>
                    <button type="button" data-dismiss="modal" wire:click="save" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>

</div>
