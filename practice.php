<?php
Route::group(['prefix' => 'admin'], function()
{
    Route::get('admin/XXX', 'Admin\AAAController@bbb');
});