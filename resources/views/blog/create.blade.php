<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            New Title
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block w-full overflow-auto scrolling-touch">
                <form action="{{ route('blog.store') }}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <label for="title" value="{{ __('Title') }}"></label>>
                        <br>
                        <input id="title" type="text" name="title" required/>
                        <br>
                        <label for="description" value="{{ __('Description') }}"></label>
                        <br>
                        <input id="description" type="text" name="description" required/>
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <button class="ml-4">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>