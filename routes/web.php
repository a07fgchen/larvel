<?php
use Illuminate\Support\Facades\Route;
use App\News;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/news','NewsController@index');

Route::get('/new/{id}','NewsController@show');

Route::get('/read',function(){
    $posts = News::all();
    foreach($posts as $post){
        return $post->title;
    }
});
Route::get('/find',function(){
    $post = News::find(4);
    return $post;    
});
Route::get('/updated',function(){
    $updated = DB::update('update news set title ="更新最新消息" where id =?',[3]);
    return "更新成功";
});
Route::get('/delete',function(){
    $deleted = DB::delete('delete  from news where id = ?',[1]);
    return $deleted;
});

Route::get('/findwhere',function(){
    $post = News::where('id','>',1)->orderBy('id','desc')->take(3)->get();
    return $post;
});
Route::get('/insertdata',function(){
    $post = new News();
    $post->title = "goodjob";
    $post->description="這是新增的資料";
    $post->save();
    return "successed";
});
Route::get('/create',function(){
    News::create(['title'=>'利用create新增的','description'=>'利用create的描述']);
    return "successed by create";
});
// Route::get('/new/{id}','NewsController@show_id');

Route::resource('/news','Newscontroller');

Route::get('/insert',function(){
    DB::insert('insert into news(title,description) values(?, ?)',['最新消息','這是一則勁爆的消息']);
});

Route::get('/hello','NewsController@hello');

// Route::get('/users/{id?}',function($id=null){
//     if(!is_null($id)){
//         //如果有id就重導向至/student/profile
//         return redirect()->route('profile');
//     }else{
//         return '無使用者資料';
//     }
// });


// //2號路由
// Route::get('/student/profile',function(){
//     return '已查到使用者資料';
// })->name('profile');