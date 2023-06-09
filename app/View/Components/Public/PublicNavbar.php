<?php

namespace App\View\Components\Public;

use App\Models\Blog;
use App\Models\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PublicNavbar extends Component
{
    public $menus;

    public $blogs;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menus = Menu::all()->where('page_id', '!=', null);
        $this->blogs = Blog::all()->where('published', true);

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public.public-navbar');
    }
}
