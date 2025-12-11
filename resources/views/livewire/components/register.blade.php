<?php
use function Livewire\Volt\{state, mount, rules, set, on, updated};
use Illuminate\Validation\Rules;

use App\Models\Registrant;

state([
    'first_name' => '',
    'last_name' => '',
    'email' => '',
    'mobile' => '',
    'workplace' => '',
    'speciality' => '',
    'event_id' => '',
    'show' => false,
]);

rules([
    'first_name' => ['required', 'string', 'max:255'],
    'last_name' => ['required', 'string', 'max:255'],
    'email' => ['required', 'string', 'email', 'max:255'],
    'mobile' => ['required', 'string', 'max:255'],
    'workplace' => ['required', 'string', 'max:255'],
    'speciality' => ['required', 'string', 'max:255'],
    // 'mobile' => ['required', 'string', 'max:255'],
    // 'mobile' => ['required', 'string', 'max:255'],
]);

$register = function () {
    $validated = $this->validate();
    // dd($validated);
    $registrant = Registrant::create([
        'first_name' => $validated['first_name'],
        'last_name' => $validated['last_name'],
        'email' => $validated['email'],
        'mobile' => $validated['mobile'],
        'workplace' => $validated['workplace'],
        'speciality' => $validated['speciality'],
        'event_id' => $this->event_id,
    ]);
    // session()->put('registered', true);
    // session()->put('registrant', $registrant->id);
    $this->show = false;
    $this->js('window.location.reload()');
};

$hide = function () {
    // $this->js('window.location.reload()');
    $this->first_name = '';
    $this->last_name = '';
    $this->email = '';
    $this->mobile = '';
    $this->workplace = '';
    $this->speciality = '';
    $this->show = false;
};

on([
    'showregister' => function () {
        $this->show = true;
    },
]);

?>

<div x-cloak x-show="$wire.show"
    class="bg-[#face17]/50 text-black rounded-xl fixed p-12 top-[20%] left-[15%] z-50 flex flex-col items-start justify-center w-[70%] h-[65%] md:items-center backdrop-filter backdrop-blur">
    <h3 class="mb-4 text-3xl font-bold text-black">Register</h3>
    <form class="w-full" wire:submit="register">
        <!-- Name -->
        <div>
            <x-input-label class="text-base text-black" for="first_name" :value="__('First Name')" />
            <x-text-input wire:model="first_name" id="first_name" class="block w-full mt-1" type="text"
                name="first_name" required autofocus />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label class="text-base text-black" for="last_name" :value="__('Last Name')" />
            <x-text-input wire:model="last_name" id="last_name" class="block w-full mt-1" type="text"
                name="last_name" required autofocus />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label class="text-base text-black" for="workplace" :value="__('Workplace')" />
            <x-text-input wire:model="workplace" id="workplace" class="block w-full mt-1" type="text"
                name="workplace" />
            <x-input-error :messages="$errors->get('workplace')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label class="text-base text-black" for="speciality" :value="__('Speciality')" />
            <x-text-input wire:model="speciality" id="speciality" class="block w-full mt-1" type="text"
                name="speciality" />
            <x-input-error :messages="$errors->get('speciality')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label class="text-base text-black" for="mobile" :value="__('Mobile')" />
            <x-text-input wire:model="mobile" id="mobile" class="block w-full mt-1" type="text" name="mobile"
                required />
            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label class="text-base text-black" for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block w-full mt-1" type="email" name="email"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">
            <x-primary-button-large type="button" class="ms-4" wire:click="hide()" x-on:click="">
                {{ __('Cancel') }}
            </x-primary-button-large>
            <x-secondary-button-large type="submit" class="ms-4">
                {{ __('Register') }}
            </x-secondary-button-large>
        </div>
    </form>

</div>
