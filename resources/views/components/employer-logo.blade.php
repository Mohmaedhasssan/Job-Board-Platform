@props(['employer',
    'width'=>'90'
])

<img src="{{ asset('storage/'.$employer->logo)}}" alt="Logo" {{ $attributes->class(['rounded-xl'])}} width="{{$width}}">
