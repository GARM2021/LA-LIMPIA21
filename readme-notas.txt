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
