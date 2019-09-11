<?php

namespace App\Http\Controllers\JobQuery;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use function GuzzleHttp\Psr7\str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\Facades\DataTables;
use App\JobQuery;
use Illuminate\Http\Request;

class JobQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if (!Gate::allows('view-jobquery')) {
                return abort(401);
        }

        $jobquery = new JobQuery();
        $columns = $jobquery->getColumns();

        return view('job_queries.job-query.index', compact('columns'));
    }


     public function getData(Request $request)
        {
             $jobquery = JobQuery::all();

            return DataTables::of($jobquery)
//                ->addIndexColumn()
                ->addColumn('id', function ($query){
                    return $query->id;
                })
                ->addColumn('title', function ($query){
                    return $query->title;
                })
                ->addColumn('job_date', function ($query){
                    return $query->job_date;
                })
                ->addColumn('user_id', function ($query){
                    return User::find($query->user_id)->name;
                })
                ->addColumn('user_name', function ($query){
                    return User::find($query->user_id)->name;
                })
                ->addColumn('user_price', function ($query){
                    return $query->user_price;
                })
                ->addColumn('admin_price', function ($query){
                    return $query->admin_price;
                })
                ->addColumn('status', function ($query){
                    return $query->status;
                })
                ->addColumn('actions', function ($q) use ($request) {
                    $view = "";
                    $assign = view('backend.datatable.action-assign')
                        ->with(['route' => asset('requetes/job-query/'.$q->id),'label' => 'jobquery'])
                        ->render();
                    $view .= $assign;
                    $show = view('backend.datatable.action-view')
                        ->with(['route' => asset('requetes/job-query/'.$q->id),'label' => 'jobquery'])
                        ->render();
                    $view .= $show;
                    $edit = view('backend.datatable.action-edit')
                        ->with(['route' => asset('requetes/job-query/'.$q->id.'/edit'), 'label' => 'jobquery'])
                        ->render();
                    $view .= $edit;

                    $delete = view('backend.datatable.action-delete')
                        ->with(['route' => asset('requetes/jobquery/'.$q->id),'label' => ' jobquery'])
                        ->render();
                    $view .= $delete;

                    return $view;

                })
                ->rawColumns(['actions'])
                ->make();
        }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if (!Gate::allows('add-jobquery')) {
                    return abort(401);
        }
        return view('job_queries.job-query.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
         if (!Gate::allows('add-jobquery')) {
             return abort(401);
         }

        $this->validate($request, [
			'status' => 'required'
		]);
        $requestData = $request->all();
        $requestData['user_id'] = Auth::user()->id;
        $requestData['job_date'] = (string) Carbon::createFromFormat('m/d/Y', $requestData['job_date'])->format('Y-m-d');
//        dd($requestData);
        JobQuery::create($requestData);

        return redirect('requetes/job-query')->with('message', 'JobQuery added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        if (!Gate::allows('view-jobquery')) {
             return abort(401);
        }

        $jobquery = JobQuery::findOrFail($id);

        return view('job_queries.job-query.show', compact('jobquery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        if (!Gate::allows('edit-jobquery')) {
                 return abort(401);
        }
        $jobquery = JobQuery::findOrFail($id);

        return view('job_queries.job-query.edit', compact('jobquery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
       if (!Gate::allows('edit-jobquery')) {
           return abort(401);
       }

        $this->validate($request, [
			'status' => 'required'
		]);
        $requestData = $request->all();
        
        $jobquery = JobQuery::findOrFail($id);
        $jobquery->update($requestData);

        return redirect('requetes/job-query')->with('message', 'JobQuery updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        if (!Gate::allows('delete-jobquery')) {
           return abort(401);
        }

        JobQuery::destroy($id);

        return redirect('requetes/job-query')->with('message', 'JobQuery deleted!');
    }
}
