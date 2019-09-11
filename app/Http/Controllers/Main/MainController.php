<?php

namespace App\Http\Controllers\Main;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\Facades\DataTables;
use App\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if (!Gate::allows('view-main')) {
                return abort(401);
        }

        $main = new Main();
        $columns = $main->getColumns();

        return view('main.main.index', compact('columns'));
    }


     public function getData(Request $request)
        {
             $main = Main::get();
            return DataTables::of($main)
                ->addIndexColumn()
                ->addColumn('actions', function ($q) use ($request) {
                    $view = "";
                    $show = view('backend.datatable.action-view')
                        ->with(['route' => asset('main/'.$q->id),'label' => 'main'])
                        ->render();
                    $view .= $show;
                    $edit = view('backend.datatable.action-edit')
                        ->with(['route' => asset('main/'.$q->id.'/edit'), 'label' => 'main'])
                        ->render();
                    $view .= $edit;

                    $delete = view('backend.datatable.action-delete')
                        ->with(['route' => asset('main/'.$q->id),'label' => ' main'])
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
        if (!Gate::allows('add-main')) {
                    return abort(401);
        }
        return view('main.main.create');
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
         if (!Gate::allows('add-main')) {
             return abort(401);
         }

        
        $requestData = $request->all();
        
        Main::create($requestData);

        return redirect('main/main')->with('message', 'Main added!');
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
        if (!Gate::allows('view-main')) {
             return abort(401);
        }

        $main = Main::findOrFail($id);

        return view('main.main.show', compact('main'));
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
        if (!Gate::allows('edit-main')) {
                 return abort(401);
        }
        $main = Main::findOrFail($id);

        return view('main.main.edit', compact('main'));
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
       if (!Gate::allows('edit-main')) {
           return abort(401);
       }

        
        $requestData = $request->all();
        
        $main = Main::findOrFail($id);
        $main->update($requestData);

        return redirect('main/main')->with('message', 'Main updated!');
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
        if (!Gate::allows('delete-main')) {
           return abort(401);
        }

        Main::destroy($id);

        return redirect('main/main')->with('message', 'Main deleted!');
    }
}
