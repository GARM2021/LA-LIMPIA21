@extends('layouts.master') {{-- C2 --}}
@section('content')
    <div class="content">
        <h1>Create Cuenta </h1>

        <form method="POST" action="{{ route('cuentas.store') }}">
            @csrf
            @method('PUT')


        
          

            <div class="col-xs-2 col-sm-2 col-md-4">
                <div class="form-group row">
                    <label for="cta">Cuenta:</label>
                    <input type="text" class="form-control" id="cta" name="cuenta"  value="{{ old('cuenta') }}">
                </div>
            </div>

            <br>

            <div class="flex-container">
                <div class="form-group row">
                    <label for="gro">Giro:</label>
                    <input type="number"   class="form-control" id="gro"  name="giro" value="{{ old('giro') }}">
                </div>
            </div>

            <br>

            <div class="col-sm-2">
                <div class="form-group row">
                    <label for="sgirocta">Sub Giro:</label>
                    <input type="number"   class="form-control" id="sgirocta"  name="subgiro"
                        value="{{ old('subgiro') }}">
                </div>
            </div>
            <br>

            <div class="col-xs-2 col-sm-2 col-md-4">
                <div class="form-group row">
                    <label for="nom">Nombre:</label>
                    <input type="text"   class="form-control" id="nom"  name="nombre" value="{{ old('nombre') }}">
                </div>
            </div>
            <br>

            <div class="col-xs-2 col-sm-2 col-md-4">
                <div class="form-group row">
                    <label for="dir">Direccion:</label>
                    <input type="text"   class="form-control" id="dir"  name="direccion" value="{{ old('direccion') }}">
                </div>
            </div>
            <br>

            <div class="col-xs-2 col-sm-2 col-md-4">
                <div class="form-group row">
                    <label for="ncd">Nombre de Ciudad:</label>
                    <input type="text"   class="form-control" id="ncd"  name="nomciudad" value="{{ old('nomciudad') }}">
                </div>
            </div>
            <br>

            <div class="col-xs-2 col-sm-2 col-md-4">
                <div class="form-group row">
                    <label for="ncom">Nombre Comercial:</label>
                    <input type="text"   class="form-control" id="ncom"  name="nomcomer" value="{{ old('nomcomer') }}">
                </div>
            </div>
            <br>



           
           



           

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="ubi">Ubicacion:</label>
                    <input  class="form-control" id="ubi" type="text"  name="ubicacion"  value="{{ old('ubicacion') }}">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="col">Colonia:</label>
                    <input  class="form-control" id="col" type="number"  name="colonia"  value="{{ old('colonia') }}">
                </div>
            </div>



            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="rfc">RFC:</label>
                    <input  class="form-control" id="rfc" type="text"  name="rfc"  value="{{ old('rfc') }}">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="tpa">Tel Part:</label>
                    <input  class="form-control" id="tpa" type="text"  name="telpart"  value="{{ old('telpart') }}">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="tneg">Tel Negocio:</label>
                    <input  class="form-control" id="tneg" type="text"  name="telneg"  value="{{ old('telneg') }}">
                </div>
            </div>







            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="exp">Expediente Catastral:</label>
                    <input  class="form-control" id="exp" type="text"  name="expcat"  value="{{ old('expcat') }}">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="cant">Cuenta Anterior:</label>
                    <input  class="form-control" id="cant" type="text"  name="ctaant"  value="{{ old('ctaant') }}">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="fini">F Inicio:</label>
                    <input  class="form-control" id="fini" type="text"  name="finicio"  value="{{ old('finicio') }}">
                </div>
            </div>





            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="nper">Numero de Permiso:</label>
                    <input  class="form-control" id="nper" type="text"  name="numpe"  value="{{ old('numpe') }}">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="fper">F Permiso:</label>
                    <input  class="form-control" id="fper" type="text"  name="fperm"  value="{{ old('fperm') }}">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="fbaj">F Baja:</label>
                    <input  class="form-control" id="fbaj" type="text"  name="fbaja"  value="{{ old('fbaja') }}">
                </div>
            </div>


            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="fnot">F Notificacion:</label>
                    <input  class="form-control" id="fnot" type="text"  name="fnotifica"
                        value="{{ old('fnotifica') }}">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="ges">Gestor:</label>
                    <input  class="form-control" id="ges" type="number"  name="gestor"  value="{{ old('gestor') }}">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="freq">F Requerimiento:</label>
                    <input  class="form-control" id="freq" type="text"  name="freq"  value="{{ old('freq') }}">
                </div>
            </div>




            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="creq">Cve Requerimiento:</label>
                    <input  class="form-control" id="creq" type="number"  name="cvereq"  value="{{ old('cvereq') }}">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="femb">F Embargo:</label>
                    <input  class="form-control" id="femb" type="text"  name="fembargo"  value="{{ old('fembargo') }}">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="gpo">Grupo:</label>
                    <input  class="form-control" id="gpo" type="number"  name="grupo"  value="{{ old('grupo') }}">
                </div>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group row">
                    <label for="tpo">Tipo:</label>
                    <input  class="form-control" id="tpo" type="number"  name="tipo"  value="{{ old('tipo') }}">
                </div>
            </div>
            <button type="submit" class="btn btn-success mb-3">CREATE</button>
        </form>


    </div>
@endsection
