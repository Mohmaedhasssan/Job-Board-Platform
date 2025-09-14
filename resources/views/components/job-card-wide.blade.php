@props(['job'])
<div {{ $attributes }}>
    <x-card
        class=" space-x-6">

        <div>
            <x-employer-logo :employer="$job->employer"/>
        </div>
        <div class="flex-1 flex flex-col ">
            <a href="#" class=" text-sm text-gray-500">{{$job->employer->name}}</a>
            <a href="{{$job->url}}" target="_blank">
                <h3
                    class="font-bold text-xl group-hover:text-blue-600 transition-colors transition-duration-300">
                    {{$job->title}}</h3>
            </a>
            <p class="text-sm text-gray-500 mt-auto">{{$job->schedule}} - From {{$job->salary}}</p>

        </div>
        <div class="flex justify-between items-center mt-auto">
            <div>
                @foreach( $job->tags as $tag )
                    <x-tag :$tag size="base"/>
                @endforeach
            </div>
        </div>
    </x-card>
</div>
