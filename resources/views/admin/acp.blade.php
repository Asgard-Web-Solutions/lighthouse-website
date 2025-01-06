<x-app-layout>
    <x-slot name="header">Admin Control Panel</x-slot>
    <x-slot name="subheader">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item>ACP</flux:breadcrumbs.item>
        </flux:breadcrumbs>
    </x-slot>

    <flux:button href="{{ route('acp.users') }}">User Manager</flux:button>
</x-app-layout>
