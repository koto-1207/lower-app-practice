<?php

use function Livewire\Volt\{state, mount};

state(['word']);

mount(function () {
    $this->word_lower = strtolower($this->word);
});

?>

<div>
    <p>{{ $this->word_lower }}</p>
</div>
