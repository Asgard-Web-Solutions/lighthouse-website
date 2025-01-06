<div>
    <flux:table>
        <flux:columns>
            <flux:column>Name</flux:column>
            <flux:column>Email</flux:column>
            <flux:column>Signup Date</flux:column>
        </flux:columns>

        <flux:rows>
            @foreach($users as $user)
                <livewire:admin.user-row :$user :key="$user->id" />
            @endforeach
        </flux:rows>
    </flux:table>
</div>
