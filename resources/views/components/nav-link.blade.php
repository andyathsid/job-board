@props(['active' => false])
<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>

    {{ $slot }}

</a>

{{-- @props(['active' => false, 'type' => 'a'])

@if ($type === 'a')
    <a
        {{ $attributes->merge(['class' => $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'class' => 'rounded-md px-3 py-2 text-sm font-medium']) }}>
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(['class' => 'relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800']) }}>
        {{ $slot }}
    </button>
@endif --}}
