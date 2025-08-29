<div {{ $attributes->merge([
    'class' => 'flex flex-col gap-2 justify-between'
]) }}>
    {{ $slot }}
</div>
