<div @style(['background-color:' . $background_color])>
    <span @class('alert')>Alert:</span> {{ $message }}
</div>

<style>
    .alert {
        color: red;
        font-weight: bold;
    }
</style>
