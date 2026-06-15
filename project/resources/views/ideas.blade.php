<x-layout>
    <form method="POST" action="/ideas">

        @csrf
        <div class="col-span-full">
            <label for="idea" class="block text-sm/6 font-medium text-white">New Idea</label>
            <div class="mt-2">
                <textarea id="idea" name="idea" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-2"></textarea>
            </div>

        </div>



        <div class="mt-6 flex items-center gap-x-6">

            <button type="submit"
                    class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-indigo-500">

                Save

            </button>

        </div>

    </form>

    @if (count($ideas))

        <div class="mt-6 text-white">

            <h2 class="font-bold">Your Ideas</h2>

            <ul class="mt-6">

                @foreach($ideas as $idea)

                    <li class="text-sm">{{ $idea->description }}</li>

                @endforeach

            </ul>

        </div>

    @endif

</x-layout>


