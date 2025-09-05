@php
    $classes='flex bg-white/5 border border-white/10 rounded-xl p-6 mt-6 border-transparent hover:border-blue-800 transition-colors transition-duration-300 group'
@endphp
<div {{$attributes ->class([$classes])}}>
    {{$slot}}
</div>
