<div>
    <input wire:model='title' type="text"> {{$title}}
    <br><input wire:model='test' type="checkbox" name="">
    Status: {{($test) ? 'True' : 'false'}}
    <br><select wire:model='select' name="" id="">
        <option disabled selected>Choix</option>
        <option value="Maroc">Maroc</option>
        <option value="France">France</option>
        <option value="Espane">Espane</option>
    </select>
    Your choix: {{$select}}
    {{-- Multipple Select --}}
    <br><select wire:model='multiple' name="" id="" multiple>
        <option disabled selected>Choix</option>
        <option value="Maroc">Maroc</option>
        <option value="France">France</option>
        <option value="Espane">Espane</option>
    </select>
    Your multiple: {{implode(' ',$multiple)}}
    <br>
    <form wire:submit.prevent='resetTitle("Submit Done")'>
        <button>Reset Title</button>
    </form>
    {{-- <button wire:click="resetTitle('')">Reset Title</button> --}}
    {{-- <button wire:click="resetTitle($event.target.innerText)">Reset Title</button> --}}
</div>
