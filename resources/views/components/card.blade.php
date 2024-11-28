@props(['title', 'footer', 'color', 'bgColor'])

<div {{ $attributes->class("card card-color-$color card-background-$bgColor")}}>
    <div class="card-header">{{ $title }}</div>
    @if($slot->isEmpty())
        <p>Please provide content</p>
    @else
        {{ $slot }}
    @endif
    <div class="card-footer">{{ $footer }}</div>
</div>
