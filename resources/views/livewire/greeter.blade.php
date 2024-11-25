<div>
    <form
        wire:submit="changeName()"
    >
        <div class="mt-2">
            <select
                type="text"
                wire:model.fill="greeting"
                class="px-8 py-2 border rounded-md bg-gray-700 text-white"
            >
                <option value="Hello">Hello</option>
                <option value="Hi">Hi</option>
                <option value="Hey" selected>Hey</option>
            </select>

            <input
                type="text"
                wire:model="name"
                class="p-2 border rounded-md bg-gray-700 text-white"
            >

            <div class="mt-2">
                <button
                    type="submit"
                    class="text-white font-medium py-2 px-4 rounded-lg bg-blue-500 hover:bg-blue-600"
                >
                    Greet
                </button>
            </div>
        </div>
    </form>
    @if($name !== '')
        <div>
            {{ $greeting }} there! {{ $name }} doesn't talk, he acts.
        </div>
    @endif
</div>
