<?php

use App\Models\Role;
use App\Models\User;
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
});

Route::get('/create', function () {
    $user = User::find(1);
    $user->roles()->save(new Role(['name'=>'administrator']));
});

Route::get('/read', function () {
    $user = User::findOrFail(1);
    dd($user->roles);
//    foreach ($user->roles as $role) {
//        echo $role->name;
//    }

});

Route::get('/update', function () {
    $user = User::findOrFail(1);
//    $user->roles()->updateExistingPivot(1, ['name'=>'administrator']);

    if($user->has('roles')){
        foreach ($user->roles as $role) {
            if ($role->name == 'administrator') {
                $role->name = 'user';
                $role->save();
            }
        }
    }
});

Route::get('/update2', function () {
    $user = User::findOrFail(1);
//    $user->roles()->updateExistingPivot(1, ['name'=>'administrator']);

    if($user->has('roles')){
        foreach ($user->roles as $role) {
            if ($role->name == 'user') {
                $role->name = 'administrator';
                $role->save();
            }
        }
    }
});

Route::get('/delete', function () {
    $user = User::findOrFail(1);
    $user->roles()->delete();
});

Route::get('/delete2', function () {
    $user = User::findOrFail(1);
    foreach ($user->roles as $role) {
        $role->whereId(2)->delete();
    }
});

//attaches a role to a user

Route::get('/attach', function () {
    $user = User::findOrFail(1);
//    $user->roles()->attach(3);
    $user->roles()->detach(3);
});

Route::get('/sync', function () {
    $user = User::findOrFail(1);
    $user->roles()->sync([1,6]);
});
