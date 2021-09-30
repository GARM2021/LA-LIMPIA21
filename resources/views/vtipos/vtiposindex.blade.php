@extends('layouts.master')
@section('css') {{-- C 13.3 --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endsection{{-- C2 L30 --}}



@section('content')
    <h1>List of Tipos</h1>

    <a class="btn btn-success mb-3" href="{{ route('tipos.create') }}">Create</a>

    @if (empty($tipos))
        <div class="alert alert-warning">La lista de tipos esta vacia</div>

    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Tipos</th>
                        <th>Nombre Tipos</th>
                        <th>Fecha vencimiento</th>
                        <th>Doc totales</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tipos as $tipos1)
                        <tr trtipo="{{ $tipos1->tipo }}" trdescripcion="{{ $tipos1->descripcion }}"
                            trfecven="{{ $tipos1->fecven }}" trdoctot="{{ $tipos1->doctot }}">
                                
                            <td>{{$tipos1->tipo }}</td>
                            <td>{{ $tipos1->descripcion }}</td>
                            <td>{{ $tipos1->fecven }}</td>
                            <td>{{ $tipos1->doctot }}</td>

                            <td>
                                <a class="btn btn-link" data-toggle="modal" data-idUpdate={{ $tipos1->tipo }}
                                    data-target="#exampleModal" onclick='myFunction(this)'>
                                    <i class="fa fa-edit"
                                        style="color:rgb(251, 255, 0);font-size:16px;"></i>{{ __('ModalEdit') }}
                                </a>
                                <a class="btn btn-link"
                                    href="{{ route('tipos.show', ['tipo' => $tipos1->tipo]) }}">Show</a>

                                <a class="btn btn-link"
                                    href="{{ route('tipos.cuentastiposshow', ['tipo' => $tipos1->tipo]) }}">
                                    Cuentas</a>


                                {{-- <a class="btn btn-link"
                                    href="{{ route('tipos.edit', ['tipo' => $tipos1->tipo]) }}">Edit</a> --}}


                                <form method="POST" class="d-inline"
                                    action="{{ route('tipos.destroy', ['tipo' => $tipos1->tipo]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    @endif




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
                            {{--   <label id="e_tipo"></label>  --}}

                            <label>Tipo </label> >
                           <input id="e_tipo" class="form-control" type="text" name="tipo"  value="" > 
                            {{-- --}}
                            

                            
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
                                class="icofont icofont-check-circled" ></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>





@endsection
