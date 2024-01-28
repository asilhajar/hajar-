

Route::get('/articles/{param}', [ArticlesController::class, 'show'])
    ->where('param', '1|2|3')
    ->name('articles.show');
    <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($param)
    {
        return view('articles.show')->with('param', $param);
    }
}
