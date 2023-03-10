@extends('layouts.app')

@section('content')
    <section id="main" class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="max-w-xl mx-auto text-center sm:text-left">
                <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
                    Save earth save life
                </h2>
                <p class="hidden text-gray-500 md:mt-4 md:block">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas
                    tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu enim et
                    fermentum, augue. Aliquet amet volutpat quisque ut interdum tincidunt
                    duis.
                </p>
                <div class="mt-4 md:mt-8">
                    <a href="#" class="inline-block px-12 py-3 text-sm font-medium text-white transition bg-teal-600 rounded hover:bg-teal-700 focus:outline-none focus:ring focus:ring-yellow-400">
                        Get Started Today
                    </a>
                </div>
            </div>
        </div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Shaqi_jrvej.jpg/1200px-Shaqi_jrvej.jpg" class="object-cover w-full h-56 sm:h-full" />
    </section>
    <section id="about" class="bg-white">
        <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 md:py-16 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                    About us
                </h2>
                <p class="mt-4 text-gray-500 sm:text-xl">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolores
                    laborum labore provident impedit esse recusandae facere libero harum
                    sequi.
                </p>
            </div>
            <div class="mt-8 sm:mt-12">
                <dl class="grid grid-cols-1 gap-4 sm:grid-cols-4">
                    <div class="flex flex-col px-4 py-8 text-center border border-gray-100 rounded-lg">
                        <dt class="order-last text-lg font-medium text-gray-500">
                            Volunteers
                        </dt>
                        <dd class="text-4xl font-extrabold text-teal-600 md:text-5xl">
                            1000+
                        </dd>
                    </div>
                    <div class="flex flex-col px-4 py-8 text-center border border-gray-100 rounded-lg">
                        <dt class="order-last text-lg font-medium text-gray-500">
                            Trees planted
                        </dt>
                        <dd class="text-4xl font-extrabold text-teal-600 md:text-5xl">
                            1300+
                        </dd>
                    </div>
                    <div class="flex flex-col px-4 py-8 text-center border border-gray-100 rounded-lg">
                        <dt class="order-last text-lg font-medium text-gray-500">
                            Animals saved
                        </dt>
                        <dd class="text-4xl font-extrabold text-teal-600 md:text-5xl">
                            450+
                        </dd>
                    </div>
                    <div class="flex flex-col px-4 py-8 text-center border border-gray-100 rounded-lg">
                        <dt class="order-last text-lg font-medium text-gray-500">
                            Donators
                        </dt>
                        <dd class="text-4xl font-extrabold text-teal-600 md:text-5xl">
                            850++
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>
    <section id="service">
        <div class="max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16">
                <div class="max-w-lg mx-auto text-center lg:mx-0 lg:text-left">
                    <h2 class="text-3xl font-bold sm:text-4xl"> Our services </h2>
                    <p class="mt-4 text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut vero
                        aliquid sint distinctio iure ipsum cupiditate? Quis, odit assumenda?
                        Deleniti quasi inventore, libero reiciendis minima aliquid tempora.
                        Obcaecati, autem.
                    </p>
                    <a href="#" class="inline-flex items-center px-8 py-3 mt-8 text-white bg-teal-600 border border-teal-600 rounded hover:bg-transparent hover:text-teal-600 focus:outline-none focus:ring active:text-teal-500">
                        <span class="mr-3 text-sm font-medium"> Get Started </span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                    <a href="#" class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <i class="fas fa-seedling"></i>
                        </span>
                        <h2 class="mt-2 font-bold">Planting</h2>
                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            These are works that are aimed at improving the territory, district or house and improving the environmental situation.
                        </p>
                    </a>
                    <a href="#" class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <i class="fas fa-recycle"></i>
                        </span>
                        <h2 class="mt-2 font-bold">Recycle</h2>
                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            These are works that are aimed at improving the territory, district or house and improving the environmental situation.
                        </p>
                    </a>
                    <a href="#" class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <i class="fas fa-hand-holding-water"></i>
                        </span>
                        <h2 class="mt-2 font-bold">Accountant</h2>
                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            These are works that are aimed at improving the territory, district or house and improving the environmental situation.
                        </p>
                    </a>
                    <a href="#" class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <i class="fas fa-tree"></i>
                        </span>
                        <h2 class="mt-2 font-bold">Tree saving</h2>
                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            These are works that are aimed at improving the territory, district or house and improving the environmental situation.
                        </p>
                    </a>
                    <a href="#" class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <i class="fas fa-paw"></i>
                        </span>
                        <h2 class="mt-2 font-bold">Animals saving</h2>
                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            These are works that are aimed at improving the territory, district or house and improving the environmental situation.
                        </p>
                    </a>
                    <a href="#" class="block p-4 border border-gray-100 shadow-sm rounded-xl hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">
                        <span class="inline-block p-3 rounded-lg bg-gray-50">
                            <i class="fas fa-solar-panel"></i>
                        </span>
                        <h2 class="mt-2 font-bold">Solar panel</h2>
                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            These are works that are aimed at improving the territory, district or house and improving the environmental situation.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
            <header>
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
                    Problems
                </h2>
                <p class="max-w-md mt-4 text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
                    praesentium cumque iure dicta incidunt est ipsam, officia dolor fugit
                    natus?
                </p>
            </header>
            <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($posts as $post)
                    <li>
                        <a href="#" class="block overflow-hidden group">
                            <img src="{{ $post->photo }}" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                            <div class="relative pt-3 bg-white">
                                <h3 class="text-xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                    {{ $post->title }}
                                </h3>
                                <p class="mt-2">
                                    <span class="tracking-wider text-gray-900"> {{ $post->body }} </span>
                                </p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
