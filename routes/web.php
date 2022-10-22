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

Route::get('/', function () {
    return view('welcome');
})->name('');

Route::prefix('admin')->group(function() {
    Route::get('/contacts', function() {
        $contacts = [
            1 => ['name' => 'Name 1', 'phone' => '1234567890'],
            2 => ['name' => 'Name 2', 'phone' => '2345678901'],
            3 => ['name' => 'Name 3', 'phone' => '3456789012'],
        ];
        return view( 'contacts.index', compact('contacts') );
    })->name('contacts.index');
    
    Route::get('/contacts/create', function() {
        return view('contacts.create');
    })->name('contacts.create');
    
    // php artisan route:list --except-vendor // To see in console the routes displayed
    // php artisan route:list --path=contacts -r // To show the paths with contacts related
    
    Route::get('/contacts/{id}', function( $id ) {
        return view('contacts.show');
    })->where('id', '[0-9]+')->name('contacts.show'); //->whereNumber('id');
    
    Route::get('/companies/{name?}', function( $name = null ) {
        if ( $name ){
            return "Company: " . $name;
        } else{
            return "All companies";
        }
    })->where('name', '[a-zA-Z]+'); //->whereAlpha('name'); || ->whereAlphaNumeric('name');
});

Route::fallback(function() {
    return "<h1>Sorry, the page does not exist :(</h1>";
});