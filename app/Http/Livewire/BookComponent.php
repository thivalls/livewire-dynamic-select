<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookComponent extends Component
{
    public $userId;
    public $bookId;

    protected $listeners = ['updateSelectedId', 'clearSelectedId'];
    public function updateSelectedId($data) {
        if($data['model'] == 'user') {
            $this->userId = $data['selectedId'];
        }
        if($data['model'] == 'book') {
            $this->bookId = $data['selectedId'];
        }
    }
    public function clearSelectedId($model) {
        if($model == 'user') {
            $this->reset('userId');
        }
        if($model == 'book') {
            $this->reset('bookId');
        }
    }

    public function render()
    {
        return view('livewire.book-component');
    }
}
