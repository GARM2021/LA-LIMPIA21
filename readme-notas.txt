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


