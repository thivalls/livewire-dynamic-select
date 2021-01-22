<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select extends Component
{
    public $items = [];
    public $search;
    public $showList = false;
    public $label;
    public $column;
    public $model;
    public $path;
    public $instance;

    public function mount($model, $searchColumn, $label, $modelPath = null) {
        $this->model = $model;
        $this->column = $searchColumn;
        $this->label = $label;
        $this->path = $modelPath ?? 'App\\Models\\';
        $this->instance = $this->getInstanceOfModel();
    }

    public function getInstanceOfModel() {
        $fullClassPath = $this->path.ucfirst($this->model);
        return new $fullClassPath();
    }

    public function updatedSearch($value) {
        $this->items = $this->instance->where($this->column, "like", "%{$this->search}%")->get();
        $this->showList = true;
    }

    public function setId($selectedValue) {
        $this->emit('updateSelectedId', ['model' => $this->model, 'selectedId' => $selectedValue["id"]]);
        $this->search = $selectedValue[$this->column];
        $this->showList = false;
    }

    public function clear() {
        $this->emit('clearSelectedId', $this->model);
        $this->reset(['search']);
    }

    public function render()
    {
        return view('livewire.select');
    }
}
