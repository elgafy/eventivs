<?php

$register = function () {
    $this->dispatch('showregister');
};

?>


<div wire:click="register()"
    class="crusor-pointer flex items-center justify-center rounded-full w-72 h-72 p-4 text-4xl font-bold leading-none text-white bg-[#323e48] border-[#face17] border-2 shadow-xl">
    REGISTER
</div>
