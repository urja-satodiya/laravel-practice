<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @livewireStyles
    </head>
    <body>
        {{-- @livewire('counter', ['name' => 'Chico']) --}}

        <livewire:hello-world />
        @livewireScripts
    </body>
</html>
