<div>
    <div>
        {{ $name }} doesn't talk, he acts.
    </div>

    <form
     wire:submit="changeName(document.querySelector('#newName').value)"
    >
        <div class="mt-2">
            <input
                id="newName"
                type="text"
                class="block w-full p-4 border rounded-md bg-gray-700 text-white"
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
</div>
