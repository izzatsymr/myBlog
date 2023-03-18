<x-app-layout>
    <form class="w-full max-w-sm" action="{{route('blog.update', $blog->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label nclass="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="title">
                    Title
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="title" id="title" type="text" value="{{$blog->title}}">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="description">
                    Description
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="description" id="description" type="text" value="{{$blog->description}}">
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button id="btn-submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </form>
</x-app-layout>>