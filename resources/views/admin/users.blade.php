<x-app-layout>
    <x-slot name="header">
        User Manager
    </x-slot>
    <x-slot name="subheader">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="{{ route('acp') }}">ACP</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>User Manager</flux:breadcrumbs.item>
        </flux:breadcrumbs>
    </x-slot>

    @livewire('admin.users-list')
</x-app-layout>
