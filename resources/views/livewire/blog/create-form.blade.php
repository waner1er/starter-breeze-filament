<form wire:submit.prevent="create">
    <div class="space-y-4 flex flex-col">
        <div>
            <label class="label" for="title">
                <span class="text-base label-text">title</span>
            </label>
            <input wire:model="title" type="text" class="w-full input input-bordered input-primary"/>
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="label" for="slug">
                <span class="text-base label-text">slug</span>
            </label>
            <input wire:model="slug" type="text" class="w-full input input-bordered input-primary"/>
            @error('slug') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <input wire:model="user_id" value="{{ auth()->user()->id }}" hidden/>
            @error('slug') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="label" for="excerpt">
                <span class="text-base label-text">excerpt</span>
            </label>
            <input wire:model="excerpt" type="text" class="w-full input input-bordered input-primary"/>
            @error('excerpt') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="label" for="content">
                <span class="text-base label-text">content</span>
            </label>
            <textarea wire:model="content" class="textarea textarea-primary" placeholder="Bio"></textarea>
            @error('content') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="label" for="image">
                <span class="text-base label-text">image</span>
            </label>
            <input type="file" wire:model="image">
            @error('image') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="label" for="image_alt">
                <span class="text-base label-text">image_alt</span>
            </label>
            <input wire:model="image_alt" type="text" class="w-full input input-bordered input-primary"/>
            @error('image_alt') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="label" for="category">
                <span class="text-base label-text">category</span>
            </label>
            <select wire:model="category_id">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="label" for="published">
                <span class="text-base label-text">published</span>
            </label>
            <input type="checkbox" wire:model="published">
            @error('published') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="flex justify-end">
            <button class="btn btn-primary w-fit" type="submit">Save</button>
        </div>
    </div>
</form>
