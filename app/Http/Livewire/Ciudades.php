<?php

namespace App\Http\Livewire;

use App\Models\Canton;
use Livewire\Component;
use App\Models\Provincia;

class Ciudades extends Component
{
    public $lst_provincias, $lst_cantones;
    public $cantons = [];

    public function render()
    {
        return view('livewire.ciudades',
            [
                'provincias' => Provincia::all()
            ]
        );
    }

    public function updatedlstProvincias($provincia_id){
        $this->cantons = Canton::where('provincia_id', $provincia_id)->get();
    }
}
