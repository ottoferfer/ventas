@include('common.modalHead')


<div class="row">

    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label>Nombre</label>
        </div>
        <input type="text" wire:model.lazy="name" class="form-control" placeholder="ej: Gamer Gama Alta">
        @error('name') <span class="text-danger er">{{ $message }}</span> @enderror
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Código</label>
        </div>
        <input type="text" wire:model.lazy="barcode" class="form-control" placeholder="ej: 025415">
        @error('barcode') <span class="text-danger er">{{ $message }}</span> @enderror
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Costo</label>
        </div>
        <input type="text" data-type='currency' wire:model.lazy="cost" class="form-control" placeholder="ej: 3,800">
        @error('cost') <span class="text-danger er">{{ $message }}</span> @enderror
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Precio</label>
        </div>
        <input type="text" data-type='currency' wire:model.lazy="price" class="form-control" placeholder="ej: 5,300">
        @error('price') <span class="text-danger er">{{ $message }}</span> @enderror
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Stock</label>
        </div>
        <input type="number" wire:model.lazy="stock" class="form-control" placeholder="ej: 50">
        @error('stock') <span class="text-danger er">{{ $message }}</span> @enderror
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Alertas</label>
        </div>
        <input type="text" wire:model.lazy="alerts" class="form-control" placeholder="ej: 10">
        @error('alerts') <span class="text-danger er">{{ $message }}</span> @enderror
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label>Categoría</label>
            <select class="form-control">
                <option value="Elegir" disabled>Elegir</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}" disabled>"{{$category->name}}"</option>
            </select>
        </div>
    </div>
    <div class="col-sm-12 col-md-8">
        <div class="form-group custom-file">
            <input type="file" class="custom-file" form-control wire:model="image"
            accept="image/x-png, image/gif, image/jpeg">
            <label class="custom-file-label">Imagen {{$image}}</label>
            @error('image') <span class="text-danger er">{{ $message }}</span> @enderror
        </div>
    </div>
</div>

@include('common.modalFooter')
