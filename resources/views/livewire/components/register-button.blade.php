<?php

$register = function () {
    $this->dispatch('showregister');
};

?>


<div wire:click="register()"
    class="crusor-pointer flex items-center justify-center rounded-xl w-52 h-52 p-4 text-4xl font-bold leading-none text-white bg-[#1f3677] bg-opacity-70 shadow-xl">
    REGISTER
</div>
