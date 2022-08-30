<?php

namespace App\Http\Controllers;

use App\Http\Requests\FightRequest;
use App\Models\Fight;
use App\Models\FightType;
use App\Models\Hero;
use Illuminate\Http\Request;
use App\Repositories\FightRepository;

class FightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fight.index', [

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fight_types = FightType::all();
        $heros = Hero::all();
        return view('fight.create', [
            'fight_types' => $fight_types,
            'heros' => $heros,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\FightRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FightRequest $request)
    {
        $request->flash();
        $repository = new FightRepository($request);
        if (!$repository->checkProtectedHeros()) {
            return back()->with('error', 'В команде защиты повторяющиеся герои.');
        }
        if (!$repository->checkAttackHeros()) {
            return back()->with('error', 'В команде атаки повторяющиеся герои.');
        }
        $repository->save();
        return redirect()->route('fight.index')->with('success', 'Бой добавлен.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fight  $fight
     * @return \Illuminate\Http\Response
     */
    public function show(Fight $fight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fight  $fight
     * @return \Illuminate\Http\Response
     */
    public function edit(Fight $fight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fight  $fight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fight $fight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fight  $fight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fight $fight)
    {
        //
    }
}
