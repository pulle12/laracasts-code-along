@props(['name' => 'required'])

@error('description')
    <p class="text-red-500 text-sm mt-1">{{ $errors->first('description') }}</p>
@enderror
