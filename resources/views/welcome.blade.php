<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @livewireStyles
</head>

<body>
    {{-- <livewire:counter />
    <livewire:wire-model /> --}}
    {{-- <livewire:lifecycle-hooks name='chico'/> --}}
    {{-- @livewire('lifecycle-hooks', ['name' => 'chico']) --}}
    <livewire:hello-world>

    @livewireScripts
</body>

</html>
