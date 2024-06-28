<div>
    <div>
        {{$response}}
    </div>
    <form wire:submit="login">
        <input type="email" wire:model="email" placeholder="Email User">
        <input type="password" wire:model="password" placeholder="Password User">
     
        <button type="submit">Save</button>
    </form>

    <code>{{$token}}</code>
</div>

@script
<script>
    $wire.on('save-to-localstorage', data => {
        localStorage.setItem('token', data[0]);
    });
</script>
@endscript