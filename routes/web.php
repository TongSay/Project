<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DepartmentController;

use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\PermissionController;

use App\Http\Controllers\Admin\LoanTypeController;

use App\Http\Controllers\Admin\LoanController;

use App\Http\Controllers\Admin\NewsController;

use App\Http\Controllers\Admin\ReportController;

use App\Http\Controllers\Admin\JobTypeController;

use App\Http\Controllers\Admin\JobController;

use App\Http\Controllers\Admin\ProfileController;



use App\Http\Controllers\FrontEnd\AboutController;

use App\Http\Controllers\FrontEnd\ApplyLoanController;
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


Route::get('/',[App\Http\Controllers\FrontEnd\FrontEndController::class, 'homepage']);

// =============== Product ===============
Route::get('product', [App\Http\Controllers\FrontEnd\ProductController::class, 'index'])->name('product');

Route::get('/product/{id}', [App\Http\Controllers\FrontEnd\ProductController::class, 'detail'])->name('details');


// =============== Apply Loan ===============

Route::get('applyotherloan', [App\Http\Controllers\Admin\ApplyLoanController::class, 'applyotherloan'])->name('applyotherloan');

Route::get('getState', [App\Http\Controllers\Admin\ApplyLoanController::class, 'getState'])->name('getState');

Route::get('getCity', [App\Http\Controllers\Admin\ApplyLoanController::class, 'getCity'])->name('getCity');



Route::post('applyotherloanid', [App\Http\Controllers\Admin\ApplyLoanController::class, 'storeapplyotherloan'])->name('applyotherloanid.storeapplyotherloan');

Route::get('applyloan/{id}', [App\Http\Controllers\Admin\ApplyLoanController::class, 'applyloan'])->name('applyloan');

Route::post('applyloanid/{id}', [App\Http\Controllers\Admin\ApplyLoanController::class, 'storeapplyloan'])->name('applyloanid.storeapplyloan');


// =============== Report ===============

Route::resource('eadmin/reports', ReportController::class);
Route::get('report', [App\Http\Controllers\FrontEnd\ReportController::class, 'report'])->name('report');

// =============== News ===============

Route::get('news', [App\Http\Controllers\FrontEnd\NewsController::class, 'news'])->name('news');

Route::get('/news/{id}', [App\Http\Controllers\FrontEnd\NewsController::class, 'detail'])->name('detail');

// =============== Job ===============

Route::get('applyjob/{id}', [App\Http\Controllers\FrontEnd\JobController::class, 'applyjob'])->name('applyjob');

Route::get('job', [App\Http\Controllers\FrontEnd\JobController::class, 'job'])->name('job');

Route::post('applyjobid/{id}', [App\Http\Controllers\Admin\JobController::class, 'storeapplyjob'])->name('applyjobid.storeapplyjob');

Route::get('/job/{id}', [App\Http\Controllers\FrontEnd\JobController::class, 'detailjob'])->name('detailjob');

Route::get('job-category/{title_en}', [App\Http\Controllers\FrontEnd\JobController::class, 'jobcategory'])->name('jobcategory');

// =============== Contact ===============

Route::get('contact', [App\Http\Controllers\FrontEnd\ContactController::class, 'index'])->name('contact');


// =============== Compliant ===============

Route::get('applycompliant', [App\Http\Controllers\FrontEnd\CompliantController::class, 'applycompliant'])->name('applycompliant');

Route::post('applycompliant', [App\Http\Controllers\FrontEnd\CompliantController::class, 'storecompliant'])->name('applycompliant.storecompliant');




// =============== About ===============

Route::get('/about/license', [App\Http\Controllers\FrontEnd\AboutController::class, 'license'])->name('license');


Route::get('/about/organizational', [App\Http\Controllers\FrontEnd\AboutController::class, 'organizational'])->name('organizational');

Route::get('/about/management', [App\Http\Controllers\FrontEnd\AboutController::class, 'management'])->name('management');

Route::get('/about/background', [App\Http\Controllers\FrontEnd\AboutController::class, 'background'])->name('background');

Route::get('/about', [App\Http\Controllers\FrontEnd\AboutController::class, 'index'])->name('about');

Route::resource('profile', ProfileController::class);


// ================= Route Back End ================= 
//======================================================

Route::group(['middleware' => ['auth','has.permission']], function() {

    
    // =============== Home ===============

    Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])
        ->name('home');


   
    

    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class)
        ->only('create', 'store');

    Route::resource('departments', DepartmentController::class);

    Route::resource('roles', RoleController::class);

    Route::resource('permissions', PermissionController::class);

    Route::resource('users', UserController::class);

    // =============== Loan Type ===============

    Route::resource('eadmin/loantypes', LoanTypeController::class);

    // =============== Loans =============== 
    
    Route::resource('eadmin/loans', LoanController::class);

    // =============== Apply Loans =============== 
    Route::get('eadmin/applyed-loan', [App\Http\Controllers\Admin\ApplyLoanController::class, 'applyedloan'])->name('applyed-loan');

    Route::get('eadmin/applyed-loan/{id}', [App\Http\Controllers\Admin\ApplyLoanController::class, 'viewapplyedloan'])->name('applyed-loan.viewapplyedloan');

    // =============== News ===============

    Route::resource('eadmin/news', NewsController::class);

    // =============== Report ===============

    Route::resource('eadmin/reports', ReportController::class);

    // =============== Jobs Type ===============

    Route::resource('eadmin/jobtypes', JobTypeController::class);

    // =============== Job ===============

    Route::resource('eadmin/job', JobController::class);

    Route::get('eadmin/applyed-job', [App\Http\Controllers\Admin\JobController::class, 'applyedjob'])->name('applyed-job');

    Route::get('eadmin/applyed-job/{id}', [App\Http\Controllers\Admin\JobController::class, 'viewapplyedjob'])->name('applyed-job.viewapplyedjob');

     // =============== Compliant ===============

     Route::get('eadmin/applyed-compliant', [App\Http\Controllers\FrontEnd\CompliantController::class, 'applyedcompliant'])->name('applyed-compliant');

     

     Route::get('eadmin/applyed-compliant/{id}', [App\Http\Controllers\FrontEnd\CompliantController::class, 'viewapplyedcompliant'])->name('applyed-compliant.viewapplyedcompliant');

     Route::patch('eadmin/aprove-compliant/{id}', [App\Http\Controllers\FrontEnd\CompliantController::class, 'aprove'])->name('aprove-compliant.aprove');

     Route::patch('eadmin/aprove-apply-job/{id}', [App\Http\Controllers\Admin\JobController::class, 'aprove'])->name('aprove-apply-job.aprove');
     Route::patch('eadmin/aprove-apply-loan/{id}', [App\Http\Controllers\Admin\ApplyLoanController::class, 'aprove'])->name('aprove-apply-loan.aprove');

});

require __DIR__.'/auth.php';
