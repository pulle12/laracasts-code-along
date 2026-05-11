<x-layout title="Home">
    <p>
        {{ $greeting }}, {{ $person }}!
        @dump($tasks) <!-- dd kombiniert dump und die. dump gibt nur aus -->
    </p>
    @if (count($tasks))
        <p>Yes, we have some tasks. How many? <?= count($tasks) ?> tasks, in fact!</p>
    @endif
</x-layout>
