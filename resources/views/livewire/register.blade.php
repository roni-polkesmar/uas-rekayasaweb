<div>
    <form wire:submit="save">
        <input type="text" wire:model="name" placeholder="Name User">
        <input type="email" wire:model="email" placeholder="Email User">
        <input type="password" wire:model="password" placeholder="Password User">
     
        <button type="submit">Save</button>
    </form>
</div>
