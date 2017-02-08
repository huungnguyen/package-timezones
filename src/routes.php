<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 08/02/2017
 * Time: 08:36
 */



Route::get('timezones/{timezone?}', 'laraveldaily\timezones\TimezonesController@index');