------------------------------------------------------------------------
20210819 
//C1 
DB FIRST 
1-php artisan make:controller XxxController 
    1.1 use Illuminate\Support\Facades\DB;
    1.2 
        class   XxxController extends Controller
        {
            public function getAllPost()
            {
                $posts = DB::table('xxxenbasededatos')->get();
                return view('vposts',compact('posts'));
            }
        }
2-vposts.blade.php
    2.1 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1> All Colonias</h1>
    @foreach ($posts as $post )
    <h3>{{ $post->titulo }}</h3>
    <p>{{ $post->cuerpo }}</p>
        
    @endforeach
    
</body>
</html>

3- web.php
3.1 Route::get('/posts', [XxxController::class,'getAllPost'])->name('post.getallpost');//!CORRECTO EJEMPLO 

------------------------------------------------------------------------
===================================================================
Model
1-php artisan make:Model Post // primera letra mayuscula
2- <?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

}
3- PostController
 <?php

namespace App\Http\Controllers; //!C1

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post; //!C2

class PostController extends Controller 
{
    ......

    public function getAllPostsUsingModel() //!C2
    {
        $posts = Post::all();
        return $posts;
    }
}
4- web.php
Route::get('all-posts',[BasuramcoloniaController::class,'getAllColoniasUsingModel'])->name('allcolonias-model');
--------------------------------------------------------------------------------------------
 C2 L49
D:\xampp\htdocs\LA-LIMPIA21>php artisan make:request ColoniaRequest  //! C2 L49
--------------------------------------------------------------------------------------------

C3 L48
Si contáis con problemas para añadir los Route::resource();
 mira que no tengáis comentada en
 App\providers\RouteServiceProvider.php -> protected $namespace = 'App\\Http\\Controllers';

 y ademas le di para limpiar el cache 

  php artisan optimize:clear

--------------------------------------------------------------------------------------------
C4
 en GestorRequest modificar: 
public function authorize()
    {
        return true; //! C4 SI NO TE MARCA UN 404 ERROR
    }

    Ojo con RouteServiceProvider 
    Public function map()

{

    $this->mapApiRoutes();

    $this->mapWebRoutes();

}

--------------------------------------------------------------------------------------------
C 10
20210909
npm install
npm run dev 
--------------------------------------------------------------------------------------------
C 13.1 DT Colonias
Tutorial:
01 - Cómo mostrar tablas profesionales con el plugin Datatables y Laravel
Coders Free

https://www.youtube.com/watch?v=xyGriTTRo_o&t=267s

Me marcaba error 
app.js:10601 jQuery.Deferred exception: Cannot read properties of undefined (reading 'mData') TypeError: Cannot read properties of undefined (reading 'mData')

la solucion aqui:
https://es.stackoverflow.com/questions/127460/datatable-error-cannot-read-property-mdata-of-undefined/127474

Me faltaba declarar en la tabla de cuenta-card.blade.php un th para la columna de los botones
---------------------------------------------------------------------------------------------
Activar bootstrap en vcoloniasindex.blade.php  ok C 14.3
1.- inclui en vcoloniasindex.blade.php el @section('css') 
2.- Copy a public\css\app.css desde el de Laravel-Desde-0
----------------------------------------------------------------------------------------------
Para el modal en tipos  se incluyo un boton   ok C 15.1 15.2
 
 ver ejemplomodal.blade.php

----------------------------------------------------------------------------------------------
C 15.4  MODAL DINAMICO UPDATE solucionado asi :

tbody tr:nth-child(odd) {
  background-color: #ff33cc;
}

tbody tr:nth-child(even) {
  background-color: #e495e4;
}

tbody tr {
  background-image: url(noise.png);
}

table {
  background-color: #ff33cc;
}

Very easy solution with jQuery:

$('#myFormId').attr('action', 'myNewActionTarget.html');
Your form:

<form action=get_action() id="myFormId">
...
</form>
<script>
        function myFunction(element) {

            //  myFunction(element)
            //  se activa en el evento onclick de la TABLA  que muestra los elementos 

            // Puebla los datos de los campos del MODAL 
            $('#e_tipo').val(element.parentElement.parentElement.getAttribute("trtipo"));
            $('#e_descripcion').val(element.parentElement.parentElement.getAttribute("trdescripcion"));
            $('#e_fecven').val(element.parentElement.parentElement.getAttribute("trfecven"));
            $('#e_doctot').val(element.parentElement.parentElement.getAttribute("trdoctot"));

            // Con el valor de la llave ya resuelto lo guarda en una variable de paso 
            var tipo = $("#e_tipo").val();

            // Concatena la varaiable  de paso con el string de la ruta ojo con el caracter ` 
           // que resuelve la variable de paso en la sentencia siguiente

        $X = `/tipos/${tipo}`;

            // Asigna la variable con el valor de la ruta a la propiedad .action 
            // del MODAL  para cuando con el submit ya esta definida
            document.getElementById("myFormId").action = $X;
        }
    </script>


Desde ES6 (funciona a partir de >IE11) se puede usar el backtick ` para crear cadenas interpoladas:

var resultado = `Pasado el tiempo, ${nombre} ${apellido} va a tener ${edad}` 
--------------------------------------------------------------------------------------------

C 17.1  <th> de mas en cuenta-card.blade.php puuuuf todo el dia :(
--------------------------------------------------------------------------------------------
C 19

Clase 43 
D:\xampp\htdocs\Laravel-desde-Cero>composer require laravel/ui //re run en casa

D:\xampp\htdocs\Laravel-desde-Cero>php artisan ui --help  //re run en casa

D:\xampp\htdocs\Laravel-desde-Cero>php artisan ui bootstrap --auth  //re run en casa

D:\xampp\htdocs\Laravel-desde-Cero>php artisan migrate:fresh --seed  // genera los usuarios y refresca los productos //re run en casa

                                        fresh    ---> borra todas las bases y las da de alta de nuevo
                                        refresh  ---> borra las tablas que tienen down en los migrates y da de alta las que
                                                      tienen archivo de migrate.php
                                                      

Clase 45
npm --version

npm install 

npm run dev  // me marco erroS







