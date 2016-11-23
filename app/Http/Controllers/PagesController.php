<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Entry;
use Request as Req;

class PagesController extends Controller
{	

   # Handles "GET /" request
    public function demo()
    {
    	return View::make('demo')->with('entries', Entry::all());
    }

   public function dashboard()
	{
		$breadcrumb = 'Dashboard';
		$pageTitle = 'CollabUX | Dashboard';
		$currentURL = Req::url();		
		$prepath ='';
		
		return View::make('dashboard')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function addEmployee()
	{
		$breadcrumb = 'Employees > Add Employee';
		$pageTitle = 'CollabUX | Add Employee';
		$saveButtonText = "Add Employee";
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('employee.add')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL,
				'saveButtonText' => $saveButtonText,'prepath' => $prepath));
	}

	public function manageEmployee()
	{
		$breadcrumb = 'Employees > Manage Employees';
		$pageTitle = 'CollabUX | Manage Employees';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('employee.manage')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function viewEmployee()
	{
		$pageTitle = 'CollabUX | Employee';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('employee.view')->with(
			array('pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function compensationEmployee()
	{
		$breadcrumb = 'Employees > <a href="manage">Manage Employees </a> > Compensation';
		$pageTitle = 'CollabUX | Employee Compensation';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('employee.compensation')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function editEmployee()
	{
		$breadcrumb = 'Employees > Manage Employees > Edit';
		$pageTitle = 'CollabUX | Edit Employee';
		$saveButtonText = "Save Changes";
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('employee.add')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL,
				'saveButtonText' => $saveButtonText,'prepath' => $prepath));
	}

	public function addAttendance()
	{
		$breadcrumb = 'Attendance > Daily Time Record';
		$pageTitle = 'CollabUX | Daily Time Record';
		$saveButtonText = "Save Record";
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('attendance.add')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL,
				'saveButtonText' => $saveButtonText,'prepath' => $prepath));
	}

	public function leaveRequestsAttendance()
	{
		$breadcrumb = 'Attendance > Leave Requests';
		$pageTitle = 'CollabUX | Leave Requests';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('attendance.leave-requests')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL,'prepath' => $prepath));
	}

	public function manageAttendance()
	{
		$breadcrumb = 'Attendance > Manage Attendance';
		$pageTitle = 'CollabUX | Manage Attendance';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('attendance.manage')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function generatePayslip()
	{
		$breadcrumb = 'Payslip > Generate Payslip';
		$pageTitle = 'CollabUX | Generate Payslip';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('payslip.generate')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function managePayslip()
	{
		$breadcrumb = 'Payslip > Manage Payslip';
		$pageTitle = 'CollabUX | Manage Payslip';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('payslip.manage')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function generateRemittance()
	{
		$breadcrumb = 'Remittance > Generate Remittance';
		$pageTitle = 'CollabUX | Generate Remittance';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('remittance.generate')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function manageRemittance()
	{
		$breadcrumb = 'Remittance > Manage Remittance';
		$pageTitle = 'CollabUX | Manage Remittance';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('remittance.manage')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function addUser()
	{
		$breadcrumb = 'User > Add User';
		$pageTitle = 'CollabUX | Add User';
		$saveButtonText = "Add User";
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('user.add')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL,
				'saveButtonText' => $saveButtonText,'prepath' => $prepath));
	}

	public function manageUser()
	{
		$breadcrumb = 'User > Manage Users';
		$pageTitle = 'CollabUX | Manage Users';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('user.manage')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function sssSetup()
	{
		$breadcrumb = 'Settings > HR Setup > SSS Setup';
		$pageTitle = 'CollabUX | SSS Setup';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('setting.sss')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function pagibigSetup()
	{
		$breadcrumb = 'Settings > HR Setup > Pag-IBIG Setup';
		$pageTitle = 'CollabUX | Pag-IBIG Setup';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('setting.pagibig')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function philhealthSetup()
	{
		$breadcrumb = 'Settings > HR Setup > Philhealth Setup';
		$pageTitle = 'CollabUX | Philhealth Setup';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('setting.philhealth')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function taxSetup()
	{
		$breadcrumb = 'Settings > HR Setup > Tax Setup';
		$pageTitle = 'CollabUX | Tax Setup';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('setting.tax')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	
	public function projectsWorkLoad()
	{
		$breadcrumb = 'Workload > Projects';
		$pageTitle = 'CollabUX | Projects';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('workload.projects')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function ticketsWorkLoad()
	{
		$breadcrumb = 'Workload > Tickets';
		$pageTitle = 'CollabUX | Tickets';		
		$prepath ='../';
		$currentURL = Req::url();		
		
		return View::make('workload.tickets')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function projectsWorkLoadWithID($id)
	{
		$breadcrumb = 'Workload > Projects';
		$pageTitle = 'CollabUX | Projects';		
		$prepath ='../../';
		$currentURL = Req::url();		
		
		return View::make('workload.projects')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}

	public function detailsWorkLoad($id)
	{
		$breadcrumb = 'Workload > <a href="../../workload/tickets">Tickets</a> > Details';
		$pageTitle = 'CollabUX | Ticket Details';		
		$prepath ='../../';
		$currentURL = Req::url();		
		
		return View::make('workload.details')->with(
			array('breadcrumb' => $breadcrumb,'pageTitle' => $pageTitle,'currentURL' => $currentURL, 'prepath' => $prepath));
	}
}
