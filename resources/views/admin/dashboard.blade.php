<x-app-layout>
    <x-slot name="header">
        Admin Control Panel
    </x-slot>


    <flux:button href="{{ route('acp.users') }}">User Manager</flux:button>
</x-app-layout>
