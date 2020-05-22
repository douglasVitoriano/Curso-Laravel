
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::ResourceVerbs([
//     'create' => 'cadastro',
//     'edit' => 'editar'
// ]);

Route::get('/', function () {
    return view('welcome');
}); 

// Route::view('/form', 'form');

// Route::redirect('/users/add', url('/form'), 301);

// Route::get('/posts', 'PostController@index')->name('posts.index');
// Route::get('posts/index', 'PostController@indexRedirect')->name('posts.indexRedirect');

// Route::get('/users/{id}/comments/{comment?}', function($id, $comment = null){
//     var_dump($id, $comment);
// })->where([
//     'id'=>'[0-9]+',
//     'comment'=>'[a-zA-Z]+'
// ]);

/**
 * Route::verbo_http('URI', 'Controller@metodo');
 * 
 * Verbo _http = [GET, POST, PUT, PATCH, DELETE, OPTIONS ];
 * 
 * GET: Utilizado para obter dados do servidor e não altera o estado do recurso.
 *       Quando um formulario GET é disparado, os dados ficam presentes na URL.
 * 
 *      Router::get($url, $callback);
 * 
 * POST: Utilizado para criação de recursos ou envio de dados ao servidor para validação.
 *       Os dados ficam no corpo da requisição e não na url.
 * 
 *      Router::post($url, $callback);
 * 
 * Passo a passo: Definir rota -> Criar controllador -> Criação de método -> Camada View 
 * Route::options($uri, $callback);
 */

 /**
  * GET
  */
//  Route::get('/users/1', 'UserController@index');
//  Route::get('/getData', 'UserController@getData');

 /**
  * POST
  */
//  Route::post('/postData', 'UserController@postData');

  /**
  * PUT
  */
//  Route::put('/users/1', 'UserController@testPut');

 /**
  * PATCH
  */
//   Route::patch('/users/1', 'UserController@testPatch');

  /**
   * MATCH PUT/PATCH
   */
//   Route::match(['put', 'patch'],'/users/2', 'UserController@testMatch');

   /**
   * Delete
   */
//   Route::delete('/users/1', 'UserController@destroy');

// Route::get('/posts/premium', 'PostController@premium');

// Route::resource('posts', 'PostController');

// Route::prefix('admin')->group(function(){
//     Route::view('/form', 'form');
// });

// Route::name('posts.')->group(function(){
//     Route::get('/admin/posts/index', 'PostController@index')->name('index');
//     Route::get('/admin/posts', 'PostController@show')->name('show');
// });

/**
 * Quantidade de requisições permitidas por minuto .
 */
// Route::middleware(['throttle:10,1'])->group(function(){
//     Route::view('/form', 'form');
// });

// Route::namespace('Admin')->group(function(){
//     Route::get('/users', 'UserController@index');
// });

Route::group(['namespace' => 'Admin', 'prefix' =>  'admin', 'middleware' => ['throttle:10,1'], 'as' => 'admin'], function(){
    Route::resource('users', 'UserController');
});




