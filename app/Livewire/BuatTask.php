<?php

namespace App\Livewire;
use App\Models\Task as ModelsTask;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BuatTask extends Component
{
    #[Validate('required', message: 'Nama Tugas Harus Di Isi')]
    public $name_task = '';
    #[Validate('required', message: 'Prioritas Harus Diisi')]
    public $priority;

    public function save(){
        $this->validate();
        ModelsTask::create([
           'title' =>  $this->name_task,
           'proority' => $this->priority,
        ]);

        session()->flash('message', 'Data Berhasil di Tambahkan');
        // return redirect()->to('/home')
        return $this->redirectRoute('home');
    }


    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.buat-task');
    }
}
