<?php



Route::get('/set_language/{lang}', 'Controller@setLanguage')->name('set_language');

Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider')->name('social_auth');

Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['prefix' => 'curso'], function (){
Route::get('/{course}','CourseController@show')->name('courses.detail');
});

Route::get('/images/{path}/{attachment}', function($path, $attachment){
	$file = sprintf('storage/%s/%s', $path, $attachment);
	if(File::exists($file)){
		return Image::make($file)->response();
	}

});
