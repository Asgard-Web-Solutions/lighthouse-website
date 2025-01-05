<div>
    <flux:table>
        <flux:columns>
            <flux:column>Name</flux:column>
            <flux:column>Email</flux:column>
            <flux:column>Signup Date</flux:column>
        </flux:columns>

        <flux:rows>
            @foreach($users as $user)
                <flux:row>
                    <flux:cell>{{ $user->name }}</flux:cell>
                    <flux:cell>{{ $user->email }}</flux:cell>
                    <flux:cell>{{ $user->created_at }}</flux:cell>
                </flux:row>
            @endforeach
        </flux:rows>
    </flux:table>
</div>
