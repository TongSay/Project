<?php
namespace App\Traits;

trait permissionTrait{

    public function hasPermission(){

        //For User
        if (!isset(auth()->user()->role->permission['name']['user']['can-add']) && \Route::is('users.create')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['user']['can-edit']) && \Route::is('users.edit')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['user']['can-list']) && \Route::is('users.index')){
            return abort(401);
        }

        //For Department
        if (!isset(auth()->user()->role->permission['name']['department']['can-add']) && \Route::is('departments.create')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['department']['can-edit']) && \Route::is('departments.edit')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['department']['can-list']) && \Route::is('departments.index')){
            return abort(401);
        }

        //For Role
        if (!isset(auth()->user()->role->permission['name']['role']['can-add']) && \Route::is('roles.create')){
            return abort(401);
        }
        if (!isset(auth()->user()->role->permission['name']['role']['can-edit']) && \Route::is('roles.edit')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['role']['can-list']) && \Route::is('role.index')){
            return abort(401);
        }

        //For Permission
        if (!isset(auth()->user()->role->permission['name']['permission']['can-add']) && \Route::is('permissions.create')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['permission']['can-list']) && \Route::is('permissions.index')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['permission']['can-edit']) && \Route::is('permissions.edit')){
            return abort(401);
        }

        //For Leave
        if (!isset(auth()->user()->role->permission['name']['leave']['can-list']) && \Route::is('leaves.index')){
            return abort(401);
        }

        //For Profile
        if (!isset(auth()->user()->role->permission['name']['profile']['can-list']) && \Route::is('profile.show')){
            return abort(401);
        }

        //For Loan Type
        if (!isset(auth()->user()->role->permission['name']['loantype']['can-list']) && \Route::is('loantypes.index')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['loantype']['can-add']) && \Route::is('loantypes.create')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['loantype']['can-edit']) && \Route::is('loantypes.edit')){
            return abort(401);
        }

        //For Loans
        if (!isset(auth()->user()->role->permission['name']['loan']['can-list']) && \Route::is('loans.index')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['loan']['can-add']) && \Route::is('loans.create')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['loan']['can-edit']) && \Route::is('loans.edit')){
            return abort(401);
        }


        //For Apply Loans 


        if (!isset(auth()->user()->role->permission['name']['applyloan']['can-list']) && \Route::is('applyed-loan')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['applyloan']['can-view']) && \Route::is('applyed-loan.viewapplyedloan')){
            return abort(401);
        }


        //For News
        if (!isset(auth()->user()->role->permission['name']['news']['can-list']) && \Route::is('news.index')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['news']['can-add']) && \Route::is('news.create')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['news']['can-edit']) && \Route::is('news.edit')){
            return abort(401);
        }


        //For Reports
        if (!isset(auth()->user()->role->permission['name']['report']['can-list']) && \Route::is('reports.index')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['report']['can-add']) && \Route::is('reports.create')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['report']['can-edit']) && \Route::is('reports.edit')){
            return abort(401);
        }


        //For Job Types
        if (!isset(auth()->user()->role->permission['name']['jobtype']['can-list']) && \Route::is('jobtypes.index')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['jobtype']['can-add']) && \Route::is('jobtypes.create')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['jobtype']['can-edit']) && \Route::is('jobtypes.edit')){
            return abort(401);
        }

        //For Jobs
        if (!isset(auth()->user()->role->permission['name']['job']['can-list']) && \Route::is('job.index')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['job']['can-add']) && \Route::is('job.create')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['job']['can-edit']) && \Route::is('job.edit')){
            return abort(401);
        }


        //For Apply Jobs

        if (!isset(auth()->user()->role->permission['name']['applyjob']['can-list']) && \Route::is('applyed-job')){
            return abort(401);
        }

        if (!isset(auth()->user()->role->permission['name']['applyjob']['can-view']) && \Route::is('applyed-job.viewapplyedjob')){
            return abort(401);
        }

        //For Compliants
        if (!isset(auth()->user()->role->permission['name']['compliant']['can-list']) && \Route::is('applyed-compliant')){
            return abort(401);
        }


        if (!isset(auth()->user()->role->permission['name']['compliant']['can-view']) && \Route::is('applyed-compliant.viewapplyedcompliant')){
            return abort(401);
        }

    }
}