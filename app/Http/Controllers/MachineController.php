<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;

class MachineController extends Controller {
    
    public function index() {
        $machines = Machine::all();
        return view('machine.index', compact('machines'));   
    }

    public function create() {        
       return view('machine.create');
    }

    public function store() {
        $data = request()->validate([
            'type'=> 'string',
            'model'=> 'string',
            'standard_equipment'=> 'string',
            'foreign_price'=> 'string',
        ]);
        Machine::create($data);
        return redirect()->route('machine.index');
    }

    public function show(Machine $machine) {
        return view('machine.show', compact('machine'));
    }

    public function edit(Machine $machine) {
        return view('machine.edit', compact('machine'));
    }

    /*
    public function show($id) {
        $machine = Machine::findOrFail($id);
        dd($machine->model);
    }
    */
    public function update(Machine $machine) {
        $data = request()->validate([
            'type'=> 'string',
            'model'=> 'string',
            'standard_equipment'=> 'string',
            'foreign_price'=> 'string',
        ]);
        $machine->update($data);
        return redirect()->route('machine.show', $machine->id);
    }

    public function delete() {
        $machine = Machine::withTrashed()->find(1);
        $machine->restore();
        dd('deleted');
    }

    public function destroy(Machine $machine) {       
        $machine->delete();
        return redirect()->route('machine.index');
    }

    // firstOrCreate
    // updateOrCreate

    public function firstOrCreate() {        
        $seatBoringMachine = [
            'type' =>'Seat boring',
            'model' =>'EC8',
            'standard_equipment' =>'Tool holder, insert',
            'foreign_price' =>'3000.00',
            'conversion_rate' =>'0.00',
            'ruble_price' =>'0.00',
        ];
        Machine::firstOrCreate([
            'type' =>'Seat boring'      // контрольное значение
        ],
        [
            'type' =>'Seat boring',
            'model' =>'EC8',
            'standard_equipment' =>'Tool holder, insert',
            'foreign_price' =>'3000.00',
            'conversion_rate' =>'0.00',
            'ruble_price' =>'0.00',
        ]);
        dump($machine->type);
        dd('finshed');
    }

    public function updateOrCreate() {
        $newMachine = [
            'type' =>'Valve grinding',
            'model' =>'VR5-S',
            'standard_equipment' =>'Tool holder, insert',
            'foreign_price' =>'1500.00',
            'conversion_rate' =>'0.00',
            'ruble_price' =>'0.00',
        ];

        $machine = Machine::updateOrCreate([
            'model'=>'EC8'
        ],[
            'type' =>'Seat boring',
            'model' =>'EC8',
            'standard_equipment' =>'Tool holder, insert, adapter',
            'foreign_price' =>'30000.00',
            'conversion_rate' =>'0.00',
            'ruble_price' =>'0.00',
        ]
        );
        dd('updated');
    }
}
