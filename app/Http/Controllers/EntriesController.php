<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;

class EntriesController extends Controller
{
     
    # Handles "POST /"  request
    public function postIndex(Request $request)
    {
    	$entry = new Entry;

		$entry->username = $request->frmName;
		$entry->email = $request->frmEmail;
		$entry->comment = $request->frmComment;

		$entry->save();

	    return redirect('/demo');
    }
}
