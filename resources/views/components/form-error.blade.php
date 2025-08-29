@props(['name'])

@error($name)
   <p class="text-xs font-bold text-red-500">{{ $message }}</p> 
@enderror