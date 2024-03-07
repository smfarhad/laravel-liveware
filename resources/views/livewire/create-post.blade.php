<div>
    <h2>New Post : </h2>
    <form wire:submit="save" class="createPost">
        <div>
            <label for="">
                <span>Title</span>
                <br>
                <input wire:model="title" type="text">
                <br>
                @error('title') <em>{{$message}}</em> @enderror
            </label>
        </div>
        <div>
            <label for="">
                <span>Content</span>
                <br>
                <textarea wire:model="content" cols="30" rows="5"></textarea>
                <br>
                @error('content') <em>{{$message}}</em> @enderror
            </label>

        </div>
        <div>
            <button type="submit" >Save</button>
        </div>
    </form>
</div>
