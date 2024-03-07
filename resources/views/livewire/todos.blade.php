<div>
    <input type="text" wire:model.live.change="todo">
    <p> Current Todo: {{$todo}} </p>
    <button type="button" wire:click="add"> Add </button>
    <ul>
        @foreach ($todos as $row)
            <li>{{$row}}</li>
        @endforeach
    </ul> 
</div>
