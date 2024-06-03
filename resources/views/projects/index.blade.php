<x-app-layout>
    <div class="max-w-screen-xl mx-auto px-5 mb-20">
        <div class="mt-24 text-center">
            <h1
                class="text-4xl lg:text-5xl font-bold lg:tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500 mb-4">
                Mis proyectos
            </h1>
            <p class="text-lg mt-4 text-slate-500 mx-auto max-w-xl dark:text-white">
                Aquí encontrarás una recopilación de los proyectos en los que he trabajado. Desde
                desarrollos técnicos hasta proyectos creativos. Cada uno fue una oportunidad para
                aprender y crecer profesionalmente. 🖥️📚
            </p>
        </div>

        <div class="mt-24 grid gap-8 md:grid-cols-2 lg:grid-cols-3 {{ $projects->isEmpty() ? 'hidden' : '' }}">
            @forelse ($projects as $project)
            <div>
                <a href="{{ route('projects.show', $project) }}">
                    <article
                        class="p-6 bg-white rounded-lg border-gray-200 shadow-md dark:bg-gray-800 hover:shadow-xl duration-300 ease-in-out border dark:hover:border-purple-700 dark:border-gray-800">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <span
                                class="text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded bg-purple-100 text-purple-800 dark:bg-purple-200 dark:text-purple-800 border-purple-200 dark:border-purple-700 border">
                                <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                    </path>
                                </svg>
                                {{ $project->category->name}}
                            </span>
                            <span class="text-sm text-gray-500 dark:text-gray-300">
                                {{ $project->created_at->diffForHumans() }}
                            </span>
                        </div>
                        <img class="mb-5 w-full h-48 object-cover rounded-lg"
                            src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                        <div class="mb-3 mt-3 flex flex-wrap gap-2">
                            @foreach ($project->categories as $category)
                            <span
                                class="bg-purple-100 text-purple-800 dark:bg-purple-200 dark:text-purple-800 border-purple-200 dark:border-purple-700 border  rounded-full text-xs font-medium px-3 py-1 whitespace-nowrap mb-1">{{
                                $category->name }}</span>
                            @endforeach
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ">
                            <span
                                class="transition duration-300 ease-out hover:text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-600 dark:from-purple-300 dark:to-indigo-300">
                                {{ $project->title }}
                            </span>
                        </h2>
                        <p class="font-light text-gray-500 dark:text-gray-300">
                            {{ Str::words($project->abstract, 35) }}
                        </p>
                    </article>
                </a>
                @auth
                <div class="text-center mt-5">
                    <a class="rounded-lg text-center focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-purple-500 focus-visible:outline-none focus-visible:shadow-outline-purple py-2 bg-purple-600 text-white hover:bg-purple-800 flex gap-1 items-center justify-center transition duration-300 ease-out"
                        href="{{route('projects.edit', $project)}}">
                        Editar proyecto
                    </a>
                </div>

                <div class="text-center mt-2">
                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="w-full rounded-lg text-center focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-red-500 focus-visible:outline-none focus-visible:shadow-outline-red py-2 bg-red-600 text-white hover:bg-red-800 flex gap-1 items-center justify-center transition duration-300 ease-out"
                            type="submit">
                            Eliminar proyecto
                        </button>
                    </form>
                </div>

                @endauth

            </div>


            @endforeach
        </div>
    </div>
</x-app-layout>