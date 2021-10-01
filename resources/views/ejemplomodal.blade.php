<td>
    <a class="btn btn-link" data-toggle="modal" data-idUpdate={{ $tipos1->tipo }} data-target="#exampleModal"
        onclick='myFunction(this)'>
        <i class="fa fa-edit" style="color:rgb(251, 255, 0);font-size:16px;"></i>{{ __('ModalEdit') }}
    </a>
  



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-write">
                <h5 class="modal-title">Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> <i class="fa fa-close"></i></span>
                </button>
            </div>
            <form id="myFormId" action="" method="post">
                {{-- {{ route('tipos.update', ['tipo' => $tipos1->tipo]) }} --}}
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="form-row">
                        {{-- <label id="e_tipo"></label> --}}

                        <label>Tipo </label> >
                        <input id="e_tipo" class="form-control" type="text" name="tipo" value="">
                        {{--  --}}



                    </div>
                    <div class="form group row">
                        <label>Nombre Tipo</label>
                        <input id="e_descripcion" class="form-control" type="text" name="descripcion" value="">
                    </div>
                    <div class="form-row">
                        <label>Fecha de Vencimiento</label>
                        <input id="e_fecven" class="form-control" type="text" name="fecven" value="">
                    </div>
                    <div class="form-row">
                        <label>Documentos Totales</label>
                        <input id="e_doctot" class="form-control" type="text" name="doctot" value="">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="name" class="btn btn-success waves-light"><i
                            class="icofont icofont-check-circled">Actualiza</i></button>
                </div>
            </form>
        </div>
    </div>
</div>





@endsection
