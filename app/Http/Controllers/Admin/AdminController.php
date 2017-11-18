<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Trip;
use App\Models\Incident;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page tit
        $incidentCount   = Incident::all()->count();
        $userCount       = User::all()->count();
        $tripCount       = Trip::all()->count();
        return view('backpack::dashboard', compact(['data', 'incidentCount', 'userCount', 'tripCount']));
    }

    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(config('backpack.base.route_prefix').'/dashboard');
    }


}
