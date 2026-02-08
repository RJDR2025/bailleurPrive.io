<?php

use Livewire\Component;

new class extends Component
{
    public int $count = 0;

    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count--;
    }
};
?>

<div class="p-6">
    <flux:heading size="xl" class="mb-6">Compteur: {{ $count }}</flux:heading>
    <div class="flex gap-2">
        <flux:button wire:click="decrement" variant="danger">-</flux:button>
        <flux:button wire:click="increment" variant="primary">+</flux:button>
    </div>
</div>