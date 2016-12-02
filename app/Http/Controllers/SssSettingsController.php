<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SSSSetting;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SssSettingsController extends Controller
{
    /*****************/
	/**** AJAX *******/
	/*****************/

	public function ajaxStore(Request $request)
	{
		$this->validate($request, [
			'salary_from' => 'required',
			'salary_to' => 'required',
			'base_salary' => 'required',
			'ec' => 'required',
			'er' => 'required',
			'ee' => 'required',
			'total' => 'required'
		]);

		$sssSetting = SSSSetting::where(array('salary_from' => $request->salary_from, 'salary_to' => $request->salary_to,
			'base_salary' => $request->base_salary,'ec' => $request->ec,'er' => $request->er,
			'ee' => $request->ee))->first();

		if ($sssSetting)
			return array('status' => 'ERROR', 'error' => 'Record already exists.');

		$sssSetting = new SSSSetting;

		$sssSetting->salary_from = $request->salary_from;
		$sssSetting->salary_to = $request->salary_to;
		$sssSetting->base_salary = $request->base_salary;
		$sssSetting->ec = $request->ec;
		$sssSetting->er = $request->er;
		$sssSetting->ee = $request->ee;
		$sssSetting->total = $request->total;
		$sssSetting->status = 'Active';

		$sssSetting->save();

		return array('status' => 'OK', 'result' => $sssSetting);
	}

	public function ajaxShow(Request $request, $id) {
		$sssSetting = SSSSetting::find($id);

		return array('status' => 'OK', 'result' => $sssSetting);
	}

	public function ajaxUpdate(Request $request, $id)
	{
		$this->validate($request, [
			'salary_from' => 'required',
			'salary_to' => 'required',
			'base_salary' => 'required',
			'ec' => 'required',
			'er' => 'required',
			'ee' => 'required',
			'total' => 'required'
		]);

		$sssSetting = SSSSetting::where('id', '!=', $id)->where(array('salary_from' => $request->salary_from, 'salary_to' => $request->salary_to,
			'base_salary' => $request->base_salary,'ec' => $request->ec,'er' => $request->er,
			'ee' => $request->ee))->first();

		if ($sssSetting)
			return array('status' => 'ERROR', 'error' => 'Record already exists.');
		
		$sssSetting = SSSSetting::find($id);

		if ($sssSetting) {
			$sssSetting->salary_from = $request->salary_from;
			$sssSetting->salary_to = $request->salary_to;
			$sssSetting->base_salary = $request->base_salary;
			$sssSetting->ec = $request->ec;
			$sssSetting->er = $request->er;
			$sssSetting->ee = $request->ee;
			$sssSetting->total = $request->total;

			$sssSetting->save();
		}

		return array('status' => 'OK', 'result' => $sssSetting);
	}

	public function ajaxDestroy($id)
	{
		$sssSetting = SSSSetting::find($id);

		if ($sssSetting) {	
			$sssSetting->status = 'Archive';		
			$sssSetting->save();

			$sssSetting->delete();			
		}

		return array('status' => 'OK');
	}

	public function ajaxMultiDestroy(Request $request)
	{
		$selectedIDs = $request->ids;

		foreach ($selectedIDs as $id) {
			$sssSetting = SSSSetting::find($id);

			if ($sssSetting) {	
				$sssSetting->status = 'Archive';		
				$sssSetting->save();

				$sssSetting->delete();			
			}	
		}		

		return array('status' => 'OK');
	}
}
