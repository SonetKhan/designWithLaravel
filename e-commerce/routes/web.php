<?php

use Illuminate\Support\Facades\Route;

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

  route::get('/','SiteController@showHome');

  route::get('/about','SiteController@showAbout');

  route::get('/service','SiteController@showService');

  route::get('/portfolio','SiteController@showPortfolio');
