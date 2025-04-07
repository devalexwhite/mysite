<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class NewArticlesList extends Component
{
    public $articles;

    public $page = 1;
    public $lastPage = false;
    private $perPage = 5;

    public function mount()
    {
        $this->getArticles();
    }

    public function render()
    {
        return view('livewire.new-articles-list');
    }

    public function pageBack()
    {
        $this->page = $this->page - 1;
        $this->getArticles();
    }

    public function pageForward()
    {
        $this->page = $this->page + 1;
        $this->getArticles();
    }

    private function getArticles()
    {
        $paginated = Article::orderBy('created_at', 'desc')
            ->where('published', true)
            ->paginate($this->perPage, page: $this->page);

        $this->articles = $paginated->items();
        $this->page = $paginated->currentPage();
        $this->lastPage = $paginated->onLastPage();
    }
}
