<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateForm extends Component
{
    use WithFileUploads;

    public $title;

    public $slug;

    public $content;

    public $excerpt;

    public $image;

    public $image_alt;

    public $user_id;

    public $categories;

    public $category_id;

    public $published;

    public function mount()
    {
        $this->categories = Category::all();
        $this->user_id = auth()->user()->id;
    }

    public function create()
    {

        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:blogs',
            'content' => 'required',
            'excerpt' => 'required',
            'category_id' => 'required',

        ]);

        $this->slug = Str::slug($this->slug);

        Blog::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'excerpt' => $this->excerpt,
            'image' => $this->image->store('images', 'public'),
            'image_alt' => $this->image_alt,
            'user_id' => auth()->user()->id,
            'category_id' => $this->category_id,
            'published' => $this->published,
        ]);

//        $this->reset();

        return redirect()->route('blog.index');
    }

    public function render()
    {
        return view('livewire.blog.create-form');
    }
}
