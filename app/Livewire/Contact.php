<?php

namespace App\Livewire;
use App\Models\Contact as ModelsContact;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Contact extends Component
{
    // Untuk menggunakan templatenya tambahkan kode seperti berikut
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.contact', [
            'contacts' => ModelsContact::orderBy('id', 'ASC')->get()
        ]);
    }
}
