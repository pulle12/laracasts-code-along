<x-layout>
    <form action="/login" method="post">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend relative top-3">Login</legend>

            <label class="label" for="email">E-Mail</label>
            <input class="input" type="email" name="email" placeholder="Your Email" required />
            <x-forms.error name="email" />

            <label class="label" for="password">Password</label>
            <input class="input" type="password" name="password" placeholder="Password" required />
            <x-forms.error name="password" />

            <button class="btn btn-neutral mt-4">Login</button>
        </fieldset>
    </form>
</x-layout>
