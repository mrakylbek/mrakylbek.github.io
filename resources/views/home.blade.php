@extends('layouts.app')

@section('content')
    <section class="mb-10">
        <div class="container mx-auto">
            <h1 class="mb-5 text-3xl">My post</h1>
            <div class="grid grid-cols-4 gap-5">
                @foreach ($posts as $post)
                    <article class="overflow-hidden transition rounded-lg shadow hover:shadow-lg">
                        <img alt="Office" src="{{ $post->photo }}" class="object-cover w-full h-56" />
                        <div class="p-4 bg-white sm:p-6">
                            <time datetime="2022-10-10" class="block text-xs text-gray-500">
                                {{ $post->created_at->isoFormat('LLL') }}
                            </time>
                            <a href="#">
                                <h3 class="mt-0.5 text-lg text-gray-900">
                                    {{ $post->title }}
                                </h3>
                            </a>
                            <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
                                {{ $post->body }}
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="container mx-auto">
            <h1 class="mb-5 text-3xl">Add post</h1>
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title" required>
                </div>
                <div class="mb-6">
                    <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                    <textarea rows=5 type="text" name="body" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Body" required></textarea>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                    <input accept="image/*" type="file" name="photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </section>
@endsection
