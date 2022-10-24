<?php

namespace App\Http\Controllers;

use App\Models\UsersViewVacant;
use App\Models\Vacant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class VacantController
 * @package App\Http\Controllers
 */
class VacantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $position_filter = $request->input('position');
        $modality_filter = $request->input('modality');
        $position_availables = [
            'Desarrollador Backend',
            'Desarrollador Frontend',
            'Desarrollador FullStack',
            'Desarrollador Móvil',
            'DevOps',
            'Desarrollador IA/ML',
            'Desarrollador BlockChain',
            'Otro'
        ];
        $modalities = [
            'Remoto',
            'Presencial',
            'Hibrida'
        ];

        $city =[
            'Amazonas',
            'Antioquia',
            'Arauca',
            'Atlantico',
            'Bogotá',
            'Bolivar',
            'Boyocá',
            'Caldas',
            'caquetá',
            'casanare',
            'Cauca',
            'Cesar',
            'chocó',
            'Córdoba',
            'Cundinamarca',
            'Guainía',
            'Guaviare',
            'Huila',
            'La Guajira',
            'Magdalena',
            'Meta',
            'Nariño',
            'Norte de Santander',
            'Putumayo',
            'Quindío',
            'Risaralda',
            'San Andrés y Providencia',
            'Santander',
            'Sucre',
            'Tolima',
            'Valle del Cauca',
            'Vaupés',
            'Vichada'
        ];

        $vacants = Vacant::position($position_filter)->modality($modality_filter)->paginate();

        return view('vacant.index', compact('vacants', 'position_availables', 'modalities', 'city'))
            ->with('i', (request()->input('page', 1) - 1) * $vacants->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacant = new Vacant();
        $position_availables = [
            'Desarrollador Backend',
            'Desarrollador Frontend',
            'Desarrollador FullStack',
            'Desarrollador Móvil',
            'DevOps',
            'Desarrollador IA/ML',
            'Desarrollador BlockChain',
            'Otro'
        ];
        $modalities = [
            'Remoto',
            'Presencial',
            'Hibrida'
        ];
        $cities =[
            'Amazonas',
            'Antioquia',
            'Arauca',
            'Atlantico',
            'Bogotá',
            'Bolivar',
            'Boyocá',
            'Caldas',
            'caquetá',
            'casanare',
            'Cauca',
            'Cesar',
            'chocó',
            'Córdoba',
            'Cundinamarca',
            'Guainía',
            'Guaviare',
            'Huila',
            'La Guajira',
            'Magdalena',
            'Meta',
            'Nariño',
            'Norte de Santander',
            'Putumayo',
            'Quindío',
            'Risaralda',
            'San Andrés y Providencia',
            'Santander',
            'Sucre',
            'Tolima',
            'Valle del Cauca',
            'Vaupés',
            'Vichada'
        ];

        return view('vacant.create', compact('vacant', 'position_availables', 'modalities', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vacant::$rules);

        $vacant = Vacant::create($request->all());

        return redirect()->route('vacants.index')
            ->with('success', 'Vacant created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vacant = Vacant::find($id);
        $saveView = UsersViewVacant::saveView(Auth::user()->id, $id);

        return view('vacant.show', compact('vacant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vacant = Vacant::find($id);

        return view('vacant.edit', compact('vacant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vacant $vacant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacant $vacant)
    {
        request()->validate(Vacant::$rules);

        $vacant->update($request->all());

        return redirect()->route('vacants.index')
            ->with('success', 'Vacant updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vacant = Vacant::find($id)->delete();

        return redirect()->route('vacants.index')
            ->with('success', 'Vacant deleted successfully');
    }
}
