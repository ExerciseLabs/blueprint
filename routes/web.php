<?php

require_once(app_path('helpers.php'));

Route::get('/', function () {
    return redirect()->route('projects.index');
});

Route::resource('projects', 'ProjectsController');

Route::post(
    '/upload',
    'FileuploadController@store'
)->name('file.store');

Route::get(
    '/download/{filename}',
    'FileuploadController@downloadFile'
);

Route::get('/files', 'FileuploadController@viewAllFiles');
