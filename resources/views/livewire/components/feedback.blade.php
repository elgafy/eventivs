<?php
use function Livewire\Volt\{state, mount, rules, set, on, updated};
use Illuminate\Validation\Rules;

use App\Models\Registrant;

state([
    'feedback' => '',
    'show' => false,
]);

rules([
    'feedback' => ['required', 'string', 'min:10'],
]);

$register = function () {
    $validated = $this->validate();
    // dd($validated);
    $registrant = Registrant::find(session()->get('registrant'))->first();
    if ($registrant !== null) {
        $registrant->feedback = $validated['feedback'];
        $registrant->save();
    }
    $this->show = false;
};

$hide = function () {
    $this->show = false;
};

on([
    'showfeedback' => function () {
        $this->show = true;
    },
]);

?>

<div x-cloak x-show="$wire.show"
    class="bg-[#412A5B] text-black rounded-xl fixed p-6 top-[5%] left-[5%] z-50 flex flex-col items-start justify-center w-[90%] h-[90%] md:items-center backdrop-filter backdrop-blur bg-gray-800/50">
    <h3 class="mb-4 text-3xl font-bold text-white">Send Feedback</h3>
    <form class="w-full" wire:submit="register">
        <!-- Name -->
        <div>
            <x-input-label class="text-base text-white" for="feedback" :value="__('Your feedback')" />
            <x-textarea wire:model="feedback" id="feedback" class="block w-full mt-1" name="feedback" required autofocus
                rows="14" />
            <x-input-error :messages="$errors->get('feedback')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-secondary-button class="ms-4" wire:click="hide()">
                {{ __('Cancel') }}
                </x-primary-button>
                <x-primary-button class="ms-4">
                    {{ __('Submit') }}
                </x-primary-button>
        </div>
    </form>

</div>
