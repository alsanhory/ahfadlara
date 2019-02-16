php artisan make:controller TestingController

app/Http/Controllers/TestingController.php
 public function index(){
        return view('pages.home');
    }

    public function contacts(){
        return view('pages.contacts');
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }
-------------------------------------------------------
Route/web.php

Route::get('/','TestingController@index');
Route::get('about','TestingController@about');
Route::get('services','TestingController@services');
Route::get('contacts','TestingController@contacts');

--------------------------------------------------------

Resources/views
- create pages folder
- create files
  contacts.blade.php, about.blade.php, services.blade.php, home.blade.php
