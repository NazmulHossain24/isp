<?php

namespace App\Providers;

use App\Area;
use App\Bankbook;
use App\Banks;
use App\Billing;
use App\BillMonth;
use App\Cashbook;
use App\CustomerCategory;
use App\Customers;
use App\CustomerTransaction;
use App\Employee;
use App\EmployeeTransaction;
use App\InOutCategory;
use App\InOutTransaction;
use App\Package;
use App\Salary;
use App\SalaryMonth;
use App\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //###################------###########################
        Area::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        Area::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        Bankbook::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        Bankbook::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        Banks::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        Banks::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        Billing::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        Billing::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        BillMonth::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        BillMonth::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        Cashbook::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        Cashbook::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        CustomerCategory::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        CustomerCategory::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        Customers::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        Customers::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        CustomerTransaction::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        CustomerTransaction::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        Employee::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        Employee::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        EmployeeTransaction::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        EmployeeTransaction::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        InOutCategory::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        InOutCategory::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        InOutTransaction::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        InOutTransaction::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        Package::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        Package::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        Salary::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        Salary::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        SalaryMonth::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        SalaryMonth::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

        //###################------###########################
        Services::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });

        Services::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
			$model->sector = 'ISP';
        });
        //###################################################

    }
}
