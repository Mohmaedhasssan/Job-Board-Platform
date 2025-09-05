@props([
    'width'=>'90'
])

<img src="https://picsum.photos/seed/{{rand(0,1000000)}}/{{$width}}" alt="" {{ $attributes->class(['rounded-xl']) }}>
