<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]
            ->forgetCachedPermissions();

        // create permissions
        $addEmployee = 'add employee';
        $editEmployee = 'edit employee';
        $deleteEmployee = 'delete employee';
        $approveEmployee = 'approve employee';
        $suspendEmployee = 'suspend employee';
        $viewEmployee = 'view employee';

        Permission::create(['name' => $addEmployee]);
        Permission::create(['name' => $editEmployee]);
        Permission::create(['name' => $deleteEmployee]);
        Permission::create(['name' => $approveEmployee]);
        Permission::create(['name' => $suspendEmployee]);
        Permission::create(['name' => $viewEmployee]);


        $addClient = 'add client';
        $editClient = 'edit client';
        $deleteClient = 'delete client';
        $approveClient = 'approve client';
        $suspendClient = 'suspend client';
        $viewClient = 'view client';

        Permission::create(['name' => $addClient]);
        Permission::create(['name' => $editClient]);
        Permission::create(['name' => $deleteClient]);
        Permission::create(['name' => $approveClient]);
        Permission::create(['name' => $suspendClient]);
        Permission::create(['name' => $viewClient]);

        $addSub = 'add sub';
        $editSub = 'edit sub';
        $deleteSub = 'delete Sub';
        $approveSub = 'approve Sub';
        $suspendSub = 'suspend Sub';
        $viewSub = 'view sub';

        Permission::create(['name' => $addSub]);
        Permission::create(['name' => $editSub]);
        Permission::create(['name' => $deleteSub]);
        Permission::create(['name' => $approveSub]);
        Permission::create(['name' => $suspendSub]);
        Permission::create(['name' => $viewSub]);

        $addWorker = 'add worker';
        $editWorker = 'edit worker';
        $deleteWorker = 'delete worker';
        $approveWorker = 'approve worker';
        $suspendWorker = 'suspend worker';
        $viewWorker = 'view worker';

        Permission::create(['name' => $addWorker]);
        Permission::create(['name' => $editWorker]);
        Permission::create(['name' => $deleteWorker]);
        Permission::create(['name' => $approveWorker]);
        Permission::create(['name' => $suspendWorker]);
        Permission::create(['name' => $viewWorker]);

        $addAccountant = 'add accountant';
        $editAccountant = 'edit accountant';
        $deleteAccountant = 'delete accountant';
        $approveAccountant = 'approve accountant';
        $suspendAccountant = 'suspend accountant';
        $viewAccountant = 'view accountant';

        Permission::create(['name' => $addAccountant]);
        Permission::create(['name' => $editAccountant]);
        Permission::create(['name' => $deleteAccountant]);
        Permission::create(['name' => $approveAccountant]);
        Permission::create(['name' => $suspendAccountant]);
        Permission::create(['name' => $viewAccountant]);

        $addTask = 'add task';
        $editTask = 'edit task';
        $deleteTask = 'delete task';
        $approveTask = 'approve task';
        $approveTaskSub = 'approve task sub';
        $approveTaskWorker = 'approve task worker';
        $viewTask = 'view task';
        $opsManagement = 'ops_management';

        Permission::create(['name' => $addTask]);
        Permission::create(['name' => $editTask]);
        Permission::create(['name' => $deleteTask]);
        Permission::create(['name' => $approveTask]);
        Permission::create(['name' => $approveTaskWorker]);
        Permission::create(['name' => $approveTaskSub]);
        Permission::create(['name' => $viewTask]);
        Permission::create(['name' => $opsManagement]);

        $addProcess = 'add process';
        $editProcess = 'edit process';
        $deleteProcess = 'delete process';
        $approveProcess = 'approve process';
        $viewProcess = 'view process';

        Permission::create(['name' => $addProcess]);
        Permission::create(['name' => $editProcess]);
        Permission::create(['name' => $deleteProcess]);
        Permission::create(['name' => $approveProcess]);
        Permission::create(['name' => $viewProcess]);

        $addInvoice = 'add invoice';
        $editInvoice = 'edit invoice';
        $deleteInvoice = 'delete invoice';
        $approveInvoice = 'approve invoice';
        $approveInvoiceAccountant = 'approve invoice accountant';
        $sendInvoice = 'send invoice';
        $viewInvoice = 'view invoice';

        Permission::create(['name' => $addInvoice]);
        Permission::create(['name' => $editInvoice]);
        Permission::create(['name' => $deleteInvoice]);
        Permission::create(['name' => $approveInvoice]);
        Permission::create(['name' => $approveInvoiceAccountant]);
        Permission::create(['name' => $sendInvoice]);
        Permission::create(['name' => $viewInvoice]);


        $addBilling = 'add Billing';
        $editBilling = 'edit Billing';
        $deleteBilling = 'delete Billing';
        $approveBilling = 'approve Billing';
        $approveBillingAccountant = 'approve Billing Accountant';
        $sendBilling = 'send Billing';
        $viewBilling = 'view Billing';

        Permission::create(['name' => $addBilling]);
        Permission::create(['name' => $editBilling]);
        Permission::create(['name' => $deleteBilling]);
        Permission::create(['name' => $approveBilling]);
        Permission::create(['name' => $approveBillingAccountant]);
        Permission::create(['name' => $sendBilling]);
        Permission::create(['name' => $viewBilling]);

        $addSonst = 'add sonst';
        $deleteSonst = 'delete sonst';
        $editSonst = 'edit sonst';
        $approveSonst = 'approve sonst';
        $sendSonst = 'send sonst';
        $viewSonst = 'view sonst';

        Permission::create(['name' => $addSonst]);
        Permission::create(['name' => $deleteSonst]);
        Permission::create(['name' => $editSonst]);
        Permission::create(['name' => $approveSonst]);
        Permission::create(['name' => $sendSonst]);
        Permission::create(['name' => $viewSonst]);

        $superAdmin = 'super_admin';
        $superVisor = 'super_visor';
        $accountant = 'accountant';
        $hrManager = 'hr_manager';
        $crmManager = 'crm_manager';
        $employee = 'employee';
        $client = 'client';
        $sub = 'sub';
        $worker = 'worker';


        // create roles and assign created permissions
        $manageTimeTracking = 'manage_time_tracking';
        $approveVacation = 'approve_vacation';
        $requestVacation = 'request_vacation';
        $suspendVacation = 'suspend_vacation';
        $viewPerformance = 'view_performance';
        $viewReportWorker = 'view_report_worker';
        $addReportWorker = 'add_report_worker';
        $editReportWorker = 'edit_report_worker';
        $deleteReportWorker = 'delete_report_worker';
        $addAnnouncement = 'add_Announcement';
        $viewAnnouncement = 'view_Announcement';
        $editAnnouncement = 'edit_Announcement';
        $deleteAnnouncement = 'delete_Announcement';
        $liveTracking = 'live_tracking';
        $orderAlert = 'order_alert';
        $budget_alloc = 'budget_alloc';
        $addFinancialReport = 'add_financial_report';
        $editFinancialReport = 'edit_financial_report';
        $deleteFinancialReport = 'delete_financial_report';
        $viewFinancialReport = 'view_financial_report';
        $costAnalysis = 'cost_analysis';
        $marketingCom = 'marketing';
        $roi = 'roi';
        $addCustomerFeedback ='add_customer_feedback';
        $editCustomerFeedback ='edit_customer_feedback';
        $deleteCustomerFeedback ='delete_customer_feedback';
        $viewCustomerFeedback ='view_customer_feedback';
        $crmAlert = 'crm_alert';

        Permission::create(['name' => $manageTimeTracking]);
        Permission::create(['name' => $approveVacation]);
        Permission::create(['name' => $requestVacation]);
        Permission::create(['name' => $suspendVacation]);
        Permission::create(['name' => $viewPerformance]);
        Permission::create(['name' => $viewReportWorker]);
        Permission::create(['name' => $addReportWorker]);
        Permission::create(['name' => $editReportWorker]);
        Permission::create(['name' => $deleteReportWorker]);
        Permission::create(['name' => $addAnnouncement]);
        Permission::create(['name' => $viewAnnouncement]);
        Permission::create(['name' => $editAnnouncement]);
        Permission::create(['name' => $deleteAnnouncement]);
        Permission::create(['name' => $liveTracking]);
        Permission::create(['name' => $orderAlert]);
        Permission::create(['name' => $budget_alloc]);
        Permission::create(['name' => $addFinancialReport]);
        Permission::create(['name' => $editFinancialReport]);
        Permission::create(['name' => $deleteFinancialReport]);
        Permission::create(['name' => $viewFinancialReport]);
        Permission::create(['name' => $costAnalysis]);
        Permission::create(['name' => $marketingCom]);
        Permission::create(['name' => $roi]);
        Permission::create(['name' => $addCustomerFeedback]);
        Permission::create(['name' => $editCustomerFeedback]);
        Permission::create(['name' => $deleteCustomerFeedback]);
        Permission::create(['name' => $viewCustomerFeedback]);
        Permission::create(['name' => $crmAlert]);



        // this can be done as separate statements
        Role::create(['name'=>$superAdmin])->givePermissionTo(Permission::all());

        Role::create(['name'=>$crmManager])->givePermissionTo(
            $addClient,
            $viewClient,
            $editClient,
            $approveClient,
            $suspendClient,
            $addTask,
            $editTask,
            $approveTask,
            $viewTask,
            $marketingCom,
            $addAnnouncement,
            $viewAnnouncement,
            $editAnnouncement,
            $deleteAnnouncement,
            $roi,
            $addCustomerFeedback,
            $editCustomerFeedback,
            $deleteCustomerFeedback,
            $viewCustomerFeedback,
            $crmAlert
        );

        Role::create(['name'=>$hrManager])->givePermissionTo(
            $viewPerformance,
            $suspendVacation,
            $requestVacation,
            $approveVacation,
            $manageTimeTracking,
            $addEmployee,
            $editEmployee,
            $deleteEmployee,
            $approveEmployee,
            $viewReportWorker,
            $addReportWorker,
            $editReportWorker,
            $deleteReportWorker,
            $addAnnouncement,
            $viewAnnouncement,
            $editAnnouncement,
            $deleteAnnouncement
        );

        Role::create(['name'=>$superVisor])->givePermissionTo(
            $opsManagement,
            $liveTracking,
            $viewReportWorker,
            $viewPerformance,
            $suspendVacation,
            $requestVacation,
            $approveVacation,
            $manageTimeTracking,
            $addEmployee,
            $editEmployee,
            $deleteEmployee,
            $approveEmployee,
            $addClient,
            $editClient,
            $approveClient,
            $suspendClient,
            $viewClient,
            $addSub,
            $editSub,
            $deleteSub,
            $approveSub,
            $suspendSub,
            $viewSub,
            $addWorker,
            $editWorker,
            $deleteWorker,
            $approveWorker,
            $suspendWorker,
            $viewWorker,
            $addTask,
            $editTask,
            $deleteTask,
            $approveTask,
            $viewTask,
            $addProcess,
            $editProcess,
            $deleteProcess,
            $approveProcess,
            $viewProcess,
            $addInvoice,
            $editInvoice,
            $deleteInvoice,
            $sendInvoice,
            $viewInvoice,
            $addBilling,
            $editBilling,
            $deleteBilling,
            $approveBilling,
            $sendBilling,
            $viewBilling,
            $addSonst,
            $deleteSonst,
            $editSonst,
            $approveSonst,
            $sendSonst,
            $viewSonst,
            $orderAlert
        );

        Role::create(['name'=>$employee])->givePermissionTo(
            $liveTracking,
            $addClient,
            $editClient,
            $approveClient,
            $suspendClient,
            $viewClient,
            $addSub,
            $editSub,
            $approveSub,
            $suspendSub,
            $viewSub,
            $addWorker,
            $editWorker,
            $approveWorker,
            $suspendWorker,
            $viewWorker,
            $addTask,
            $editTask,
            $approveTask,
            $viewTask,
            $addProcess,
            $editProcess,
            $deleteProcess,
            $approveProcess,
            $viewProcess,
            $addInvoice,
            $editInvoice,
            $sendInvoice,
            $viewInvoice,
            $opsManagement,
            $orderAlert
        );
        Role::create(['name'=>$accountant])
            ->givePermissionTo(
                $approveBillingAccountant,
                $approveInvoiceAccountant,
                $editTask,
                $deleteTask,
                $viewTask,
                $viewEmployee,
                $viewProcess,
                $approveInvoice,
                $viewInvoice,
                $budget_alloc,
                $addFinancialReport,
                $editFinancialReport,
                $deleteFinancialReport,
                $viewFinancialReport,
                $costAnalysis,
            );

        Role::create(['name'=>$client])
            ->givePermissionTo(
                $addTask,
                $editTask,
                $deleteTask,
                $viewTask,
                $viewEmployee,
                $viewProcess,
                $approveInvoice,
                $viewInvoice,
                $viewSonst
            );

        Role::create(['name'=>$worker])
            ->givePermissionTo(
                $viewEmployee,
                $approveTaskWorker,
                $editProcess,
                $addProcess,
                $viewTask
            );
        Role::create(['name'=>$sub])
            ->givePermissionTo(
                $addBilling,
                $editBilling,
                $viewBilling,
                $addWorker,
                $editWorker,
                $suspendWorker,
                $viewWorker,
                $viewTask,
                $approveTaskSub,
                $addProcess,
                $viewProcess,
                $editProcess,
                $viewEmployee,
                $viewSonst
            );
    }
}
