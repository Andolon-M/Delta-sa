<div class="box bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative">
    <div class="box-body">

        <div class="form-group">
            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Nombre') }}</label>
            <input id="nombre" name="nombre" type="text" value="{{ $civilProject->nombre }}" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50{{ $errors->has('nombre') ? ' border-red-500' : '' }}" placeholder="{{ __('Nombre') }}">
            @error('nombre')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Descripcion') }}</label>
            <input id="descripcion" name="descripcion" type="text" value="{{ $civilProject->descripcion }}" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50{{ $errors->has('descripcion') ? ' border-red-500' : '' }}" placeholder="{{ __('Descripcion') }}">
            @error('descripcion')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="mt_cuadrado" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Metros cuadrados') }}</label>
            <input id="mt_cuadrado" name="mt_cuadrado" type="text" value="{{ $civilProject->mt_cuadrado }}" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50{{ $errors->has('mt_cuadrado') ? ' border-red-500' : '' }}" placeholder="{{ __('Metros cuadrados') }}">
            @error('mt_cuadrado')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="ciudad" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Ciudad') }}</label>
            <input id="ciudad" name="ciudad" type="text" value="{{ $civilProject->ciudad }}" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50{{ $errors->has('ciudad') ? ' border-red-500' : '' }}" placeholder="{{ __('Ciudad') }}">
            @error('ciudad')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

    </div>
    <div class="box-footer mt-4">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Submit') }}</button>
    </div>
</div>
