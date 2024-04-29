<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('login','Auth\AuthAdminController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AuthAdminController@login')->name('admin.login.submit');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('logout', 'Auth\AuthAdminController@logout')->name('admin.logout');
        Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
        Route::get('user/{id}', 'Admin\AdminController@edit')->name('admin.edit.user');
        Route::put('user/{id}', 'Admin\AdminController@update')->name('admin.update.user');
        Route::resource('blogs', 'Blog\BlogController');
        Route::resource('events', 'Event\EventController');
        Route::middleware(['CheckAdmin'])->group(function ()
        {
            Route::resource('users', 'User\UserController');
            Route::resource('admins', 'User\AdminController');
            Route::resource('departments', 'Department\DepartmentController');
            Route::resource('courses', 'Course\CourseController');
          
            Route::resource('buildings', 'Building\BuildingController'); 
          
            Route::resource('levels', 'Level\LevelController');
            Route::resource('halls', 'Hall\HallController');
            Route::resource('semesters', 'Semester\SemesterController');
            Route::resource('abouts', 'About\AboutController');
            Route::resource('infos', 'Info\InfoController');
            Route::resource('sliders', 'Slider\SliderController'); 
            Route::resource('contacts', 'Contact\ContactController')->only(['index','destroy','edit','update']);
        });

        Route::middleware(['CheckTeacher'])->group(function ()
        {
            Route::resource('schedules', 'Schedule\ScheduleController');
            Route::resource('appointments', 'Appointment\AppointmentController');
            // Route::get('blogs', 'Blog\BlogController@getBlogs')->name('get-blogs');
            // Route::post('blog', 'Blog\BlogController')->name('add-blog');

            Route::post('get-halls', 'Schedule\ScheduleController@getHalls')->name('get-halls');
            Route::resource('officeHours', 'OfficeHour\OfficeHourController'); 
        });
    });

});
