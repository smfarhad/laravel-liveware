<div>
    <div>
        <h1>Posts:</h1>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $row)
                <tr wire:key="{{$row->id}}">
                    <td>{{$row->title}}</td>
                    <td>{{str($row->description)->words(10)}}</td>
                    <td>
                        <button type="button" wire:click="delete({{$row->id}})">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
