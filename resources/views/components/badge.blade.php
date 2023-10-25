@props(['textColor','bgColor'])

@php
    $textColor = match ($textColor) {
        'gray' => 'text-gray-500',
        'blue' => 'text-blue-500',
        'red' => 'text-red-500',
        'yellow' => 'text-yellow-500',
        'green' => 'text-green-500',
        'white' => 'text-white',
        default => 'text-black-500',
    }
@endphp

@php
    $bgColor = match ($bgColor) {
        'gray' => 'bg-gray-300',
        'blue' => 'bg-blue-500',
        'red' => 'bg-red-500',
        'yellow' => 'bg-yellow-300',
        'green' => 'bg-green-500',
        default => 'bg-white-500',
    }
@endphp

<button {{ $attributes }} class="rounded-xl px-3 py-1 text-base {{$textColor}} {{$bgColor}}">{{$slot}}</button>