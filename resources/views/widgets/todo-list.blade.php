<div class="bg-gray-600 flex">
    @foreach($tasks as $task)
        <div class="w-1/2 flex flex-col my-1 bg-white shadow-lg rounded-lg overflow-hidden @if($loop->even) ml-3 @endif">
            <div class="bg-grey-30 text-gray-700 text-lg px-3 py-4">  {{$task->title}}  {{$task->status}}</div>
            <div class="p-4 bg-gray-200">
                {{$loop->iteration}}
                {{$task->description}}
            </div>
        </div>
    @endforeach
</div>
