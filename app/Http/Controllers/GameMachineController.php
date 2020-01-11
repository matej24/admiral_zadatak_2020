<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameMachine;
use App\GameType;
use Redirect;

class GameMachineController extends Controller
{
    public function index(){
        $gameMachines = GameMachine::with('gameType')->get();

        //dd(compact('gameMachines'));

        return view('game-machines', compact('gameMachines'));
    }

    public function create() {
        $gameTypes = GameType::all();
        return view('add-game-machine', compact('gameTypes'));
    }

    public function store(Request $request) {
        //dd($request->all());

        $request->validate([
            'name' => 'required',
            'serial_number' => 'required',
            'end_of_guarantee_date' => 'required',
            'game_type_id' => 'required|integer'

        ]);

        GameMachine::create($request->all());

        return Redirect::to('/');
    }

    public function delete($id) {
        $gameMachine = GameMachine::find($id);

        //dd($gameMachine);

        if(!$gameMachine) {
            return Redirect::to('/');
        }

        $gameMachine->delete();

        return Redirect::to('/');
    
    }


}
