@props(['heading'])

<h2 {{ $attributes->merge(['class' => 'font-medium text-3xl text-birubut flex justify-center mb-4']) }}>
    {{ $heading}}
</h2>