<flux:row>
    <flux:cell>
        @php
            $editModalName = "edit-user-" . $user->id;
        @endphp
        <flux:modal.trigger :name="$editModalName">{{ $user->name }}</flux:modal.trigger>

        <flux:modal :name="$editModalName" class="space-y-6 md:w-96">
            <div>
                <flux:heading size="lg">Edit User</flux:heading>
                <flux:subheading>Update the user information</flux:subheading>
            </div>

            <flux:input label="Username" wire:model="username" />
            <flux:input label="Email Address" wire:model="email" />

            <div>
                <flux:heading>Date Joined</flux:heading>
                <flux:subheading>{{ $user->created_at }}</flux:subheading>
            </div>

            <div>
                <flux:heading>Last Updated</flux:heading>
                <flux:subheading>{{ $user->updated_at }}</flux:subheading>
            </div>

        </flux:modal>
    </flux:cell>
    <flux:cell>{{ $user->email }}</flux:cell>
    <flux:cell>{{ $user->created_at->format('d M, Y') }}</flux:cell>
</flux:row>
