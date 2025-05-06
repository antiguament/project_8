<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EnglishA1Topics extends Component
{
    public $selectedTopic = null;
    public $topicContent = '';
    
    protected $topics = [
        'a1-1' => 'Greetings & Farewells',
        // ... agregar los otros 11 temas aquí
    ];

    public function mount()
    {
        // Opcional: cargar un tema por defecto
        // $this->selectTopic('a1-1');
    }

    public function selectTopic($topicId)
    {
        $this->selectedTopic = $topicId;
        $this->topicContent = $this->getTopicContent($topicId);
        $this->dispatchBrowserEvent('topicChanged', ['topicId' => $topicId]);
    }
    
    protected function getTopicContent($topicId)
    {
        if ($topicId === 'a1-1') {
            return view('components.english-topics.greetings-farewells')->render();
        }
        // Agregar condiciones para otros temas
        
        return '<p class="eng-a1-default-message">Content coming soon!</p>';
    }

    public function render()
    {
        return view('livewire.english-a1-topics', [
            'topics' => $this->topics
        ]);
    }
}