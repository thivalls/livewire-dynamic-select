<div>
    @livewire('select', [
        'model' => 'user',
        'searchColumn' => 'name',
        'label' => 'Usuário'
        ])
    @livewire('select', [
        'model' => 'book',
        'searchColumn' => 'title',
        'label' => 'Livro'
        ])
</div>
