<!-- Button trigger modal -->
<a  class="btn btn-link"  data-toggle="modal" data-idUpdate="'$tipos1->tipo'" data-target="#exampleModal">
    <i class="fa fa-edit" style="color:rgb(251, 255, 0);font-size:16px;"></i>{{ __('ModalEdit') }}
</a>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-write">
                <h5 class="modal-title">Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> <i class="fa fa-close"></i></span>
                </button>
            </div>
            <form action="{{ route('tipos.update', ['tipo' => $tipos1->tipo]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                  
                    <div class="form-row">
                        <label>Tipo {{ $tipos1->tipo }}</label>
                        {{-- <input class="form-control" type="text" name="tipo"  value="{{ old('tipo') ?? $tipo->tipo}}" > --}}
                    </div>
                    <div class="form group row">
                        <label>Nombre Tipo</label>
                        <input class="form-control" type="text" name="descripcion" value="{{ old('descripcion') ?? $tipos1->descripcion }}"
                            required>
                    </div>
                    <div class="form-row">
                        <label>Fecha de Vencimiento</label>
                        <input class="form-control" type="text" name="fecven"
                            value="{{ old('fecven') ?? $tipos1->fecven }}" required>
                    </div>
                    <div class="form-row">
                        <label>Documentos Totales</label>
                        <input class="form-control" type="text" name="doctot"
                            value="{{ old('doctot') ?? $tipos1->doctot }}" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="name" class="btn btn-success waves-light"><i class="icofont icofont-check-circled"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

