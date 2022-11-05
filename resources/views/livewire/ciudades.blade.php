<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    Provincia
    <select wire:model="lst_provincias" name="lst_provincias">
        <option value=''>Seleccionar</option>
        @foreach($provincias as $provincia)
            <option value="{{$provincia->id}}">{{$provincia->provincia}}</option>
        @endforeach
    </select>

    @if(count($cantons) > 0)
        Cantones
        <select wire:model="lst_cantones" name="lst_cantones">
            <option value='-1' selected="selected">Seleccionar</option>
            @foreach($cantons as $canton)
                <option value="{{$canton->id}}">{{$canton->canton}}</option>
            @endforeach
        </select>
    @endif

</div>
