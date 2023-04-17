<?php

namespace App\View\Components;

use App\Models\Page;
use Illuminate\View\Component;
use Illuminate\View\View;

class PublicLayout extends Component
{
    public $title;
    public $metaDescription;

    public $metaKeywords;

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.public', [
            'title' => $this->title,
            'metaDescription' => $this->metaDescription,
            'metaKeywords' => $this->metaKeywords,
        ]);
    }
}
