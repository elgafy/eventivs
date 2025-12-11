<?php

$show = function () {
    $this->dispatch('showfeedback');
};

?>


<div wire:click="show()"
    class="flex items-start justify-start w-40 h-40 p-4 text-2xl font-bold leading-none text-white bg-[#ef7e14] bg-opacity-70">
    Feedback
</div>
