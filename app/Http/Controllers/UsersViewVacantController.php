<?php

namespace App\Http\Controllers;

use App\Models\UsersViewVacant;
use Illuminate\Http\Request;

/**
 * Class UsersViewVacantController
 * @package App\Http\Controllers
 */
class UsersViewVacantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersViewVacants = UsersViewVacant::paginate();

        return view('users-view-vacant.index', compact('usersViewVacants'))
            ->with('i', (request()->input('page', 1) - 1) * $usersViewVacants->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usersViewVacant = new UsersViewVacant();
        return view('users-view-vacant.create', compact('usersViewVacant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UsersViewVacant::$rules);

        $usersViewVacant = UsersViewVacant::create($request->all());

        return redirect()->route('users-view-vacants.index')
            ->with('success', 'UsersViewVacant created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usersViewVacant = UsersViewVacant::find($id);

        return view('users-view-vacant.show', compact('usersViewVacant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usersViewVacant = UsersViewVacant::find($id);

        return view('users-view-vacant.edit', compact('usersViewVacant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UsersViewVacant $usersViewVacant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersViewVacant $usersViewVacant)
    {
        request()->validate(UsersViewVacant::$rules);

        $usersViewVacant->update($request->all());

        return redirect()->route('users-view-vacants.index')
            ->with('success', 'UsersViewVacant updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usersViewVacant = UsersViewVacant::find($id)->delete();

        return redirect()->route('users-view-vacants.index')
            ->with('success', 'UsersViewVacant deleted successfully');
    }
}
