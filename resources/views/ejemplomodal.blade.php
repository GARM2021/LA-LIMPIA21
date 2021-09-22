<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $tipos1->tipo }}">
    Launch demo modal
  </button>

  <a class="btn btn-link" href="{{ route('tipos.edit', ['tipo' => $tipos1->tipo]) }}">
    Edit</a>  

    <form action="{{ route('tipos.edit', ['tipo' => $tipos1->tipo]) }}" method="post" enctype="multipart/form-data">
      {{ method_field('patch') }}
  {{ csrf_field() }}
     <div class="modal fade" id="exampleModal'$tipos1->tipo'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
                @csrf 
                @method('PUT')
                <div class="form-row">
                    <label>Tipo {{$tipos1->tipo}}</label>
                     {{-- <input class="form-control" type="text" name="tipo"  value="{{ old('tipo') ?? $tipo->tipo}}" >  --}}
                </div>
                <div class="form-row"> 
                    <label>Nombre Tipo</label>
                    <input class="form-control" type="text" name="tipo" value="{{ old('tipo') ?? $tipo->tipo}}" required>
                </div>
                <div class="form-row"> 
                    <label>Fecha de Vencimiento</label>
                    <input class="form-control" type="text" name="fecven" value="{{ old('fecven') ?? $tipo->fecven}}" required>
                </div>
                <div class="form-row"> 
                    <label>Documentos Totales</label>
                    <input class="form-control" type="text" name="doctot" value="{{ old('doctot') ?? $tipo->doctot}}" required>
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </form>

@endsection


<a class="btn btn-link" href="{{ route('tipos.edit', ['tipo' => $tipos1->tipo]) }}">
  Edit</a>
