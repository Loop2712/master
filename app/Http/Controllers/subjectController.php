<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\subject;
use Illuminate\Http\Request;

class subjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $subject = subject::where('id_sub', 'LIKE', "%$keyword%")
                ->orWhere('sub_name', 'LIKE', "%$keyword%")
                ->orWhere('professor', 'LIKE', "%$keyword%")
                ->orWhere('day', 'LIKE', "%$keyword%")
                ->orWhere('time_start', 'LIKE', "%$keyword%")
                ->orWhere('time_end', 'LIKE', "%$keyword%")
                ->orWhere('sub_room_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $subject = subject::latest()->paginate($perPage);
        }

        return view('subject.index', compact('subject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('subject.create');
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
        
        $requestData = $request->all();
        
        subject::create($requestData);

        return redirect('subject')->with('flash_message', 'subject added!');
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
        $subject = subject::findOrFail($id);

        return view('subject.show', compact('subject'));
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
        $subject = subject::findOrFail($id);

        return view('subject.edit', compact('subject'));
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
        
        $requestData = $request->all();
        
        $subject = subject::findOrFail($id);
        $subject->update($requestData);

        return redirect('subject')->with('flash_message', 'subject updated!');
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
        subject::destroy($id);

        return redirect('subject')->with('flash_message', 'subject deleted!');
    }
}
