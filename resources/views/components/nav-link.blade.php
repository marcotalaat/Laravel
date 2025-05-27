@props(['active' => false, 'type' => ''])


@if ($type =='a')
<a {{$attributes}} class="{{ $active ? 'bg-gray-900 text-white' : '' }}rounded-md px-3 py-2 text-sm font-medium text-white"
 aria-current="{{$active ? 'page' : 'false' }}"
 >{{ $slot }}</a>    
@else
<button {{$attributes}} class="{{ $active ? 'bg-gray-900 text-white' : '' }}rounded-md px-3 py-2 text-sm font-medium text-white"
 aria-current="{{$active ? 'page' : 'false' }}"
 >{{ $slot }}</button>
@endif
