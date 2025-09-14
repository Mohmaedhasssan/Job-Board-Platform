@props(['job'])
<div {{ $attributes->class(['']) }}>
    <x-card
        class=" flex-col text-center space-y-6 ">
        <div class="self-start text-sm">{{$job->employer->name}}</div>
        <div class="py-8 ">
            <a href="{{$job->url}}" target="_blank">
                <h3
                    class="font-bold text-xl group-hover:text-blue-600 transition-colors transition-duration-300">
                    {{$job->title}}</h3>
            </a>
            <p class="text-sm mt-4">{{$job->schedule}} - From {{$job->salary}}</p>
        </div>
        <div class="flex justify-between items-center mt-auto">
            <div>
                @foreach( $job->tags as $tag )
                    <x-tag :$tag size="small"/>
                @endforeach
            </div>
            <x-employer-logo :employer="$job->employer" :width="42"/>
        </div>
    </x-card>
</div>
