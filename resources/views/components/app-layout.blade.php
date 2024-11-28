@props(['title' => '', 'bodyCssClass' => ''])

<x-base-layout
    :$title
    :$bodyCssClass
>
    <x-layouts.header />

    {{ $slot }}


    <footer>
        @yield('footerLinks')
    </footer>
</x-base-layout>
