<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('users', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('user/{id}', [\App\Http\Controllers\UserController::class, 'show']);
Route::post('createUser', [\App\Http\Controllers\UserController::class, 'store']);
Route::post('updateUser/{id}', [\App\Http\Controllers\UserController::class, 'update']);
Route::delete('deleteUser/{id}', [\App\Http\Controllers\UserController::class, 'destroy']);

Route::get('employees', [\App\Http\Controllers\EmployeeController::class, 'index']);
Route::get('employee/{id}', [\App\Http\Controllers\EmployeeController::class, 'show']);
Route::post('createEmployee', [\App\Http\Controllers\EmployeeController::class, 'store']);
Route::post('updateEmployee/{id}', [\App\Http\Controllers\EmployeeController::class, 'update']);
Route::delete('deleteEmployee/{id}', [\App\Http\Controllers\EmployeeController::class, 'destroy']);

Route::get('hotels', [\App\Http\Controllers\HotelController::class, 'index']);
Route::get('hotel/{id}', [\App\Http\Controllers\HotelController::class, 'show']);
Route::post('createHotel', [\App\Http\Controllers\HotelController::class, 'store']);
Route::post('updateHotel/{id}', [\App\Http\Controllers\HotelController::class, 'update']);
Route::delete('deleteHotel/{id}', [\App\Http\Controllers\HotelController::class, 'destroy']);

Route::get('roles', [\App\Http\Controllers\RoleController::class, 'index']);
Route::get('role/{id}', [\App\Http\Controllers\RoleController::class, 'show']);
Route::post('createRole', [\App\Http\Controllers\RoleController::class, 'store']);
Route::post('updateRole/{id}', [\App\Http\Controllers\RoleController::class, 'update']);
Route::delete('deleteRole/{id}', [\App\Http\Controllers\RoleController::class, 'destroy']);

Route::get('rooms', [\App\Http\Controllers\RoomController::class, 'index']);
Route::get('room/{id}', [\App\Http\Controllers\RoomController::class, 'show']);
Route::post('createRoom', [\App\Http\Controllers\RoomController::class, 'store']);
Route::post('updateUser/{id}', [\App\Http\Controllers\UserController::class, 'update']);
Route::delete('deleteUer/{id}', [\App\Http\Controllers\UserController::class, 'destroy']);


