

Route::get('/articles/{param}', [ArticlesController::class, 'show'])
    ->where('param', '1|2|3')
    ->name('articles.show');
