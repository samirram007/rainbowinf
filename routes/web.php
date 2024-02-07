<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\News\NewsController;
use App\Http\Controllers\Backend\Setup\OfficeController;
use App\Http\Controllers\Backend\Notice\NoticeController;
use App\Http\Controllers\Backend\Gallery\GalleryController;
use App\Http\Controllers\Backend\Setup\DepartmentController;
use App\Http\Controllers\Backend\Setup\DesignationController;
use App\Http\Controllers\Backend\Employee\EmployeeLeaveController;
use App\Http\Controllers\Backend\Employee\MonthlySalaryController;
use App\Http\Controllers\Backend\Employee\EmployeeSalaryController;
use App\Http\Controllers\Backend\Employee\EmployeeAttendanceController;
use App\Http\Controllers\Backend\Employee\EmployeeRegistrationController;
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
Route::get('/down', function() {
    $exitCode = Artisan::call('down');
    return '<h1>Site in maintainence</h1>';
});
Route::get('/up', function() {
    $exitCode = Artisan::call('up');
    return '<h1>Site in live</h1>';
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('admin.index');})->name('dashboard');
});

Route::get('/admin/login', [Admincontroller::class, 'adminlogin'])->name('admin.login');
Route::get('/admin/logout', [AdminController::class, 'Logout'])
    ->name('admin.logout');

    // Route::get('/auth/login', function () {
    //     return view('auth.login');
    // })->name('login');

    // Route::get('login', [AdminController::class, 'adminlogin'])->name('admin.login');




Route::group(['middleware' => 'auth'], function () {
    // User Management All Routes::
    Route::prefix('users')->group(function () {
        Route::get('/view',         [UserController::class, 'UserView'])->name('user.view');
        Route::get('/add',         [UserController::class, 'UserAdd'])->name('user.add');
        Route::post('/store',         [UserController::class, 'UserStore'])->name('users.store');
        Route::get('/edit/{id}',        [UserController::class, 'UserEdit'])->name('users.edit');
        Route::post('/update/{id}',         [UserController::class, 'UserUpdate'])->name('users.update');
        Route::get('/delete/{id}',        [UserController::class, 'UserDelete'])->name('users.delete');
    });

    // User Profile & Password::
    Route::prefix('profile')->group(function () {
        Route::get('/view',         [ProfileController::class, 'ProfileView'])->name('profile.view');
        Route::get('/edit',         [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
        Route::post('/store',         [ProfileController::class, 'ProfileStore'])->name('profile.store');
        Route::get('/password/view',         [ProfileController::class, 'PasswordView'])->name('password.view');
        Route::post('/password/update',         [ProfileController::class, 'PasswordUpdate'])->name('password.update');
    });

    Route::prefix('setups')->group(function () {

        //Designation Route
        Route::get('/designation/view', [DesignationController::class, 'ViewDesignation'])->name('designation.view');
        Route::get('/designation/add', [DesignationController::class, 'DesignationAdd'])->name('designation.add');
        Route::post('/designation/store', [DesignationController::class, 'DesignationStore'])->name('store.designation');
        Route::get('/designation/edit/{id}', [DesignationController::class, 'DesignationEdit'])->name('designation.edit');
        Route::post('/designation/update/{id}', [DesignationController::class, 'DesignationUpdate'])->name('update.designation');
        Route::get('/designation/delete/{id}', [DesignationController::class, 'DesignationDelete'])->name('designation.delete');

        //Department Route
        Route::get('/department/view', [DepartmentController::class, 'ViewDepartment'])->name('department.view');
        Route::get('/department/add', [DepartmentController::class, 'DepartmentAdd'])->name('department.add');
        Route::post('/department/store', [DepartmentController::class, 'DepartmentStore'])->name('store.department');
        Route::get('/department/edit/{id}', [DepartmentController::class, 'DepartmentEdit'])->name('department.edit');
        Route::post('/department/update/{id}', [DepartmentController::class, 'DepartmentUpdate'])->name('update.department');
        Route::get('/department/delete/{id}', [DepartmentController::class, 'DepartmentDelete'])->name('department.delete');

        //Department Route
        Route::get('/office/view', [OfficeController::class, 'ViewOffice'])->name('office.view');
        Route::get('/office/add', [OfficeController::class, 'OfficeAdd'])->name('office.add');
        Route::post('/office/store', [OfficeController::class, 'OfficeStore'])->name('store.office');
        Route::get('/office/edit/{id}', [OfficeController::class, 'OfficeEdit'])->name('office.edit');
        Route::post('/office/update/{id}', [OfficeController::class, 'OfficeUpdate'])->name('update.office');
        Route::get('/office/delete/{id}', [OfficeController::class, 'OfficeDelete'])->name('office.delete');
    });

    Route::prefix('employees')->group(function () {
        Route::get('/reg/employee/view',         [EmployeeRegistrationController::class, 'EmployeeView'])->name('employee.registration.view');
        Route::get('/reg/employee/add',         [EmployeeRegistrationController::class, 'EmployeeAdd'])->name('employee.registration.add');
        Route::post('/reg/employee/store',         [EmployeeRegistrationController::class, 'EmployeeStore'])->name('store.employee.registration');
        Route::get('/reg/employee/edit/{id}',         [EmployeeRegistrationController::class, 'EmployeeEdit'])->name('employee.registration.edit');
        Route::post('/reg/employee/update/{id}',         [EmployeeRegistrationController::class, 'EmployeeUpdate'])->name('update.employee.registration');
        Route::get('/reg/employee/details/{id}',         [EmployeeRegistrationController::class, 'EmployeeDetails'])->name('employee.registration.details');

        // Employee Salary Route::
        Route::get('/employee/salary/view',         [EmployeeSalaryController::class, 'SalaryView'])->name('employee.salary.view');
        Route::post('/employee/salary/view',         [EmployeeSalaryController::class, 'SalaryView'])->name('employee.salary.add');
        Route::get('/employee/salary/increment/{id}',         [EmployeeSalaryController::class, 'SalaryIncrement'])->name('employee.salary.increment');
        Route::post('/employee/salary/increment/store/{id}',         [EmployeeSalaryController::class, 'SalaryIncrementStore'])->name('store.salary.increment');
        Route::get('/employee/salary/details/{id}',         [EmployeeSalaryController::class, 'SalaryDetails'])->name('employee.salary.details');

        //Employee leave Route
        Route::get('/employee/leave/view',         [EmployeeLeaveController::class, 'LeaveView'])->name('employee.leave.view');
        Route::get('/employee/leave/add',         [EmployeeLeaveController::class, 'LeaveAdd'])->name('employee.leave.add');
        Route::post('/employee/leave/store',         [EmployeeLeaveController::class, 'LeaveStore'])->name('store.employee.leave');
        Route::get('/employee/leave/edit/{id}',         [EmployeeLeaveController::class, 'LeaveEdit'])->name('employee.leave.edit');
        Route::post('/employee/leave/update/{id}',         [EmployeeLeaveController::class, 'LeaveUpdate'])->name('update.employee.leave');
        Route::get('/employee/leave/delete/{id}',         [EmployeeLeaveController::class, 'LeaveDelete'])->name('employee.leave.delete');

        //Employee Attendance Route
        Route::get('/employee/attandance/view',         [EmployeeAttendanceController::class, 'AttendanceView'])->name('employee.attendance.view');
        Route::get('/employee/attandance/add',         [EmployeeAttendanceController::class, 'AttendanceAdd'])->name('employee.attendance.add');
        Route::post('/employee/attandance/store',         [EmployeeAttendanceController::class, 'AttendanceStore'])->name('store.employee.attendance');
        Route::get('/employee/attandance/edit/{date}',         [EmployeeAttendanceController::class, 'AttendanceEdit'])->name('employee.attendance.edit');
        Route::get('/employee/attandance/details/{date}',         [EmployeeAttendanceController::class, 'AttendanceDetails'])->name('employee.attendance.details');


        //Monthly Salary Route
        Route::get('/monthly/salary/view',         [MonthlySalaryController::class, 'MonthlySalaryView'])->name('monthly.salary.view');
        Route::get('/monthly/salary/get',         [MonthlySalaryController::class, 'MonthlySalaryGet'])->name('monthly.salary.get');
        Route::get('/monthly/salary/payslip/{id}',         [MonthlySalaryController::class, 'MonthlySalaryPayslip'])->name('monthly.salary.payslip');
        //Salary Manage using PDF forr rainbowInf
        Route::get('/monthly/salary/manage',         [MonthlySalaryController::class, 'MonthlySalaryManage'])->name('monthly.salary.manage');
        Route::get('/monthly/salary/search',         [MonthlySalaryController::class, 'MonthlySalarySearch'])->name('monthly.salary.search');
        // Route::get('/monthly/salary/upload/{id}',[MonthlySalaryController::class, 'show'])->name('monthly.salary.show');
        Route::post('/monthly/salary/upload',[MonthlySalaryController::class,'pdfupload'])->name('monthly.salary.upload');
    });
    Route::prefix('news')->group(function () {
        //Employee Attendance Route
        Route::get('/news/view',         [NewsController::class, 'NewsView'])->name('news.view');
        Route::get('/news/add',         [NewsController::class, 'NewsAdd'])->name('news.add');
        Route::post('/news/store',         [NewsController::class, 'NewsStore'])->name('store.news');
        Route::get('/news/edit/{id}',         [NewsController::class, 'NewsEdit'])->name('news.edit');
        Route::get('/news/single/{id}',         [NewsController::class, 'NewsEdit'])->name('news.single');
        Route::post('/news/update/{id}',         [NewsController::class, 'NewsUpdate'])->name('update.news');
        Route::get('/news/delete/{id}',         [NewsController::class, 'NewsDelete'])->name('news.delete');
    });

    Route::prefix('gallery')->group(function () {
        //Employee Attendance Route
        Route::get('/gallery/view',         [GalleryController::class, 'GalleryView'])->name('gallery.view');
        Route::get('/album/add',         [GalleryController::class, 'AlbumAdd'])->name('album.add');
        Route::post('/album/store',         [GalleryController::class, 'AlbumStore'])->name('store.album');

        Route::get('/album/edit/{id}',         [GalleryController::class, 'AlbumEdit'])->name('album.edit');
        Route::post('/album/update/{id}',         [GalleryController::class, 'AlbumUpdate'])->name('update.album');
        Route::get('/album/view/{id}',         [GalleryController::class, 'AlbumView'])->name('album.view');
         Route::post('/gallery/store/{id}',         [GalleryController::class, 'GalleryStore'])->name('store.gallery');
         Route::get('/image/edit/{id}',         [GalleryController::class, 'ImageEdit'])->name('image.edit');
         Route::post('/image/update/{id}',         [GalleryController::class, 'ImageUpdate'])->name('update.image');
         Route::get('/image/view/{id}',         [GalleryController::class, 'Imageview'])->name('image.view');
        Route::get('/gallery/delete/{id}',         [GalleryController::class, 'GalleryDelete'])->name('gallery.delete');
    });

    Route::prefix('notice')->group(function () {
        //Notice Route
        Route::get('/notice',         [NoticeController::class, 'NoticeIndex'])->name('notice.index');
        Route::get('/notice/view',         [NoticeController::class, 'NoticeView'])->name('notice.view');
        Route::get('/notice/add',         [NoticeController::class, 'NoticeAdd'])->name('notice.add');
        Route::post('/notice/store',         [NoticeController::class, 'NoticeStore'])->name('store.notice');
        Route::get('/notice/edit/{id}',         [NoticeController::class, 'NoticeEdit'])->name('notice.edit');
        Route::get('/notice/single/{id}',         [NoticeController::class, 'NoticeEdit'])->name('notice.single');
        Route::post('/notice/update/{id}',         [NoticeController::class, 'NoticeUpdate'])->name('update.notice');
        Route::get('/notice/delete/{id}',         [NoticeController::class, 'NoticeDelete'])->name('notice.delete');
    });

});
Route::get('/', [HomeController::class, 'index'])->name('empty');
Route::prefix('frontend')->group(function () {

    Route::get('/index', [HomeController::class, 'index']);

    Route::get('/list', function () {
        return view('frontend.list');
    })->name('list');
    Route::prefix('gallery')->group(function () {
        //Employee Attendance Route
        Route::get('/gallery/view',         [GalleryController::class, 'GalleryView'])->name('gallery.view');
        // Route::get('/album/add',         [GalleryController::class, 'AlbumAdd'])->name('album.add');
        // Route::post('/album/store',         [GalleryController::class, 'AlbumStore'])->name('store.album');

        // Route::get('/album/edit/{id}',         [GalleryController::class, 'AlbumEdit'])->name('album.edit');
        // Route::post('/album/update/{id}',         [GalleryController::class, 'AlbumUpdate'])->name('update.album');
        Route::get('/album/view/{id}',         [GalleryController::class, 'FrontendAlbumView'])->name('frontend.view.album');
        //  Route::post('/gallery/store/{id}',         [GalleryController::class, 'GalleryStore'])->name('store.gallery');
        //  Route::get('/image/edit/{id}',         [GalleryController::class, 'ImageEdit'])->name('image.edit');
        //  Route::post('/image/update/{id}',         [GalleryController::class, 'ImageUpdate'])->name('update.image');
         Route::get('/image/view/{id}',         [GalleryController::class, 'Imageview'])->name('image.view');
        // Route::get('/gallery/delete/{id}',         [GalleryController::class, 'GalleryDetails'])->name('gallery.delete');
    });
    // Route::get('/album/{id}', [GalleryController::class, "FrontendAlbumView"])->name('frontend.view.album');

    // Route::get('/dashboard', function () {
    //     return view('frontend.dashboard');
    // })->name('dashboard');

    Route::get('/cmd', [HomeController::class, 'cmd'])->name('cmd');

    Route::get('/mission', function () {
        return view('frontend.mission');
    })->name('mission');

    // Route::get('/newsroom', function () {
    //     return view('frontend.newsroom');
    // })->name('newsroom');
    // Route::resource('news', NewsController::class)
    //     ->missing(function (Request $request) {
    //         return Redirect::route('admin.news.list');
    //     });;

    Route::get('/management_team', function () {
        return view('frontend.management_team');
    })->name('management_team');

    Route::get('/clients', function () {
        return view('frontend.clients');
    })->name('clients');

    Route::get('/equipments', function () {
        return view('frontend.equipments');
    })->name('equipments');

    Route::get('/factory', function () {
        return view('frontend.home');
    })->name('factory');

    Route::get('/turnover', function () {
        return view('frontend.home');
    })->name('turnover');

    Route::get('/conduct', function () {
        return view('frontend.home');
    })->name('conduct');

    Route::get('/corporate_office', function () {
        return view('frontend.corporate_office');
    })->name('corporate_office');

    Route::get('/policies', function () {
        return view('frontend.home');
    })->name('policies');

    Route::get('/quality_policy', function () {
        return view('frontend.quality_policy');
    })->name('quality_policy');

    Route::get('/safety_policy', function () {
        return view('frontend.safety_policy');
    })->name('safety_policy');

    Route::get('/registration_certificate', function () {
        return view('frontend.registration_certificate');
    })->name('registration_certificate');

    Route::get('/business', function () {
        return view('frontend.business');
    })->name('business');

    Route::get('/projects.civil_executive', function () {
        return view('frontend.projects.civil_executive');
    })->name('civil_executive');

    Route::get('/projects.industrial', function () {
        return view('frontend.projects.industrial');
    })->name('industrial');

    Route::get('/building', function () {
        return view('frontend.building');
    })->name('building');

    Route::get('/projects.interior_deco_proj', function () {
        return view('frontend.projects.interior_deco_proj');
    })->name('interior_deco_proj');

    Route::get('/projects.factory_infrastructure', function () {
        return view('frontend.projects.factory_infrastructure');
    })->name('factory_infrastructure');

    Route::get('/projects.structural_project', function () {
        return view('frontend.projects.structural_project');
    })->name('structural_project');

    Route::get('/projects.electrical_project', function () {
        return view('frontend.projects.electrical_project');
    })->name('electrical_project');

    Route::get('/turn_over_inception', function () {
        return view('frontend.turn_over_inception');
    })->name('turn_over_inception');

    // Route::get('/gallery', function () {
    //     return view('frontend.gallery');
    // })->name('gallery');


    Route::get('/touroperations', function () {
        return view('frontend.touroperations');
    })->name('touroperations');

    Route::get('/consultancyservices', function () {
        return view('frontend.consultancyservices');
    })->name('consultancyservices');

    Route::get('/career', function () {
        return view('frontend.home');
    })->name('career');

    Route::get('/contact', function () {
        return view('frontend.home');
    })->name('contact');



    Route::get('/sr_vice_president_civil_architectural', function () {
        return view('frontend.sr_vice_president_civil_architectural');
    })->name('sr_vice_president_civil_architectural');
    Route::get('/architectural', function () {
        return view('frontend.projects.architectural');
    })->name('architectural');

    Route::get('/vice_president_electrical', function () {
        return view('frontend.vice_president_electrical');
    })->name('vice_president_electrical');

    Route::get('/vice_president_industrial', function () {
        return view('frontend.vice_president_industrial');
    })->name('vice_president_industrial');

    Route::get('/director_debasish', function () {
        return view('frontend.director_debasish');
    })->name('director_debasish');

    Route::get('/director_sankhanil', function () {
        return view('frontend.director_sankhanil');
    })->name('director_sankhanil');

    Route::get('/director_soumyajit', function () {
        return view('frontend.director_soumyajit');
    })->name('director_soumyajit');

    Route::get('/financial_advisor_sushanta', function () {
        return view('frontend.financial_advisor_sushanta');
    })->name('financial_advisor_sushanta');

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/send', [ContactController::class, 'send_email'])->name('send.email');

    //Auth::routes();

});
