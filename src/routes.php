<?php
use Illuminate\Support\Facades\Route;

// Route::get('greeting', function () {
//     return 'Hi, this is your awesome package!';
// });

// Route::get('test', 'EdgeWizz\Fillup\Controllers\FillupController@test')->name('test');

Route::post('cma/store', 'EdgeWizz\Cma\Controllers\CmaController@store')->name('fmt.cma.store');
Route::post('cma/update/{id}', 'EdgeWizz\Cma\Controllers\CmaController@update')->name('fmt.cma.update');
Route::any('cma/delete/{id}', 'EdgeWizz\Cma\Controllers\CmaController@delete')->name('fmt.cma.delete');
Route::post('cma/csv-upload', 'EdgeWizz\Cma\Controllers\CmaController@uploadFile')->name('fmt.cma.csv-upload');

Route::any('fmt/cma/inactive/{id}',  'EdgeWizz\Cma\Controllers\CmaController@inactive')->name('fmt.cma.inactive');
Route::any('fmt/cma/active/{id}',  'EdgeWizz\Cma\Controllers\CmaController@active')->name('fmt.cma.active');

// Route::post('fmt/Mcq/uploadFile', 'EdgeWizz\Mcq\Controllers\McqController@uploadFile')->name('fmt.mcq.csv');