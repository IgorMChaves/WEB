<div>
    <form method="post" wire:submit.prevent="store">
        <p>{{$title}}</p>
        <p>{{$body}}</p>
        <div class="bg-red-400">
            @error('title') <p>{{$mensage}}</p> @enderror
            @error('body') <p>{{$mensage}}</p> @enderror
        </div>
        <input type="hidden" name="editId" wire:model="editId" />
        <input tye="text" name="title" wire:model="title" class="w-full rounded-lg" /><br />
        <textarea name="body" wire:model="body" class="w-full rounded-lg"></textarea><br />
        <button type="submit" class="bg-primary rounded-lg p-2">Enviar</button>
        <button tye="button" class="bg-secondary rounded-lg p-2" wire:click="limpar()">Limpar</button>
</form>
<table>
    <thead>
        <tr class="border">
            <th>Título</th>
            <th>Corpo</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
    </thead>
    <tbody>
        @foreach($avisos as $aviso)
        <tr class="border">
            <td>{{$aviso->title}}</td>
            <td>{{$aviso->body}}</td>
            <td><button type="button" class="bg-blue-500 rounded-lg p-1" wire:click="edit({{$aviso->id}})">Editar</button></td>
            <td><button type="button" class="bg-red-500 rounded-lg p-1" wire:click="destroy({{$aviso->id}})">Remover</button></td>
        </tr>
        @endforeach
    </tbody>
    <div>
        {{$avisos->links()}}
    </div>
</div>