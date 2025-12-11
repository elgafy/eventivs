<?php

use function Livewire\Volt\{state, computed};
use function Livewire\Volt\layout;
use App\Models\Registrant;

layout('layouts.print');
$registrants = computed(fn() => Registrant::where('event_id', 4)->get());
state([
    'message' => '',
    'showall' => false,
]);

$print = function ($id) {
    // dd($id);
    $registrant = Registrant::find($id);
    if ($registrant !== null) {
        $registrant->printed = true;
        $registrant->save();
    }
};
$showallreg = function () {
    // dd($this->showall);
    $this->showall = !$this->showall;
};

?>

<div wire:poll>
    <div class="flex items-center justify-between py-8">
        <h2 class="pb-4 text-2xl font-medium text-gray-900">Registrants</h2>
        <x-primary-button wire:click="showallreg" class="ms-4">
            {{ __('Toggle All') }}
        </x-primary-button>
    </div>
    {{-- @dd($this->state) --}}
    @foreach ($this->registrants as $registrant)
        @if (!$registrant->printed || $this->showall)
            <div
                class="flex items-center justify-between p-2 rounded-md mb-2 {{ $registrant->printed == true ? 'bg-green-300' : '' }}">
                {{ $registrant->first_name }}
                {{ $registrant->last_name }}

                {{-- <x-primary-button x-on:click="$store.print.printTag()" class="ms-4">
                {{ __('Print') }}
            </x-primary-button> --}}
                <x-primary-button
                    x-on:click="$store.print.printTag('{{ $registrant->first_name }} {{ $registrant->last_name }}')"
                    wire:click="print({{ $registrant->id }})" class="ms-4">
                    {{ $registrant->printed ? 'Print Again' : 'Print' }}
                </x-primary-button>
            </div>
        @endif
    @endforeach
</div>
