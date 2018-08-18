<?php

Route::get('/', [
  'uses' => 'Blog\BlogController@index'
]);

Route::get('/read/artikel', function(){
  return view('blog.show');
});

