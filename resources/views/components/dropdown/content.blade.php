@props(['align' => 'right'])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'origin-top-left left-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'bottom':
        $alignmentClasses = 'bottom-0 origin-top-right right-0';
        break;
    case 'right':
    default:
        $alignmentClasses = 'origin-top-right right-0';
        break;
}
@endphp

<div class="absolute {{ $alignmentClasses }} mt-2 w-56 rounded-md shadow-lg">
    <div class="rounded-md bg-white shadow-xs ">
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            {{ $slot }}
        </div>
    </div>
</div>
