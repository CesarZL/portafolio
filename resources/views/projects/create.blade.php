<x-app-layout>
    <div class="max-w-screen-lg mx-auto px-5 mt-14 mb-20">
        <div class="bg-white p-5 md:p-8 rounded-xl mb-5 shadow-lg dark:bg-gray-800 dark:text-gray-300">
            <form action="{{ route('projects.store') }}" method="POST" novalidate enctype="multipart/form-data" id="ProjectForm">
                @csrf
       
                <!-- Contenedor principal -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Título -->
                    <div class="mb-2 col-span-2 sm:col-span-1">
                        <x-input-label for="title" :value="__('Título')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" placeholder="Título del proyecto en español" required />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <!-- Title -->
                    <div class="mb-2 col-span-2 sm:col-span-1">
                        <x-input-label for="title_en" :value="__('Title')" />
                        <x-text-input id="title_en" class="block mt-1 w-full" type="text" name="title_en" :value="old('title_en')" placeholder="Título del proyecto en inglés" required />
                        <x-input-error :messages="$errors->get('title_en')" class="mt-2" />
                    </div>

                    <!-- Resumen -->
                    <div class="mb-2 col-span-2 sm:col-span-1">
                        <x-input-label for="abstract" :value="__('Resumen')" />
                        <textarea id="abstract" name="abstract" class=" text-sm block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-purple-500 dark:focus:border-purple-600 focus:ring-purple-500 dark:focus:ring-purple-600 rounded-md shadow-sm placeholder-gray-400 dark:placeholder-gray-500" placeholder="Resumen del proyecto en español">{{ old('abstract') }}</textarea> 
                        <x-input-error :messages="$errors->get('abstract')" class="mt-2" />
                    </div>

                    <!-- Abstract -->
                    <div class="mb-2 col-span-2 sm:col-span-1">
                        <x-input-label for="abstract_en" :value="__('Abstract')" />
                        <textarea id="abstract_en" name="abstract_en" class=" text-sm block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-purple-500 dark:focus:border-purple-600 focus:ring-purple-500 dark:focus:ring-purple-600 rounded-md shadow-sm placeholder-gray-400 dark:placeholder-gray-500" placeholder="Resumen del proyecto en inglés">{{ old('abstract_en') }}</textarea>
                        <x-input-error :messages="$errors->get('abstract_en')" class="mt-2" />
                    </div>

                    <!-- Imagen -->
                    <div class="mb-2 col-span-2 sm:col-span-1">
                        <x-input-label for="image" :value="__('Imagen')" />
                        <x-file id="image" type="file" name="image" class="mt-1 block w-full" required />
                        <x-input-help-text :value="__('La imagen se cortará a un tamaño de 1200x600 px.')" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <!-- Categoría principal -->
                    <div class="mb-2 col-span-2 sm:col-span-1">
                        <x-input-label for="principal_category" :value="__('Categoría principal')" />
                        <x-select id="principal_category" class="block mt-1 w-full" name="principal_category" required>
                            <option value="">{{ __('Selecciona una categoría') }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('principal_category') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </x-select>
                        <x-input-error :messages="$errors->get('principal_category')" class="mt-2" />
                    </div>

                    <!-- Contenido -->
                    <div class="mb-2 col-span-2">
                        <x-input-label for="content" :value="__('Contenido')" />
                        <div id="editor" class="">{{ old('content') }}</div>
                        <input type="hidden" name="content" id="content"> 
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>

                    <!-- Content -->
                    <div class="mb-2 col-span-2">
                        <x-input-label for="content_en" :value="__('Content')" />
                        <div id="editor_en" class="">{{ old('content_en') }}</div>
                        <input type="hidden" name="content_en" id="content_en"> 
                        <x-input-error :messages="$errors->get('content_en')" class="mt-2" />
                    </div>

                    <!-- Categorías -->
                    <div class="mb-2 col-span-2">
                        <x-input-label for="categories" :value="__('Categorias')" class="mb-2" />
                        <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            @foreach ($categories as $index => $category)
                                <li class="w-full {{ $loop->last ? '' : 'border-b border-gray-200 md:border-b-0 sm:border-r dark:border-gray-600' }}">
                                    <div class="flex items-center ps-3">
                                        <input id="categories-{{ $category->id }}" type="checkbox" value="{{ $category->id }}" name="categories[]" 
                                               class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 dark:checked:bg-purple-600"
                                               {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                                        <label for="categories-{{ $category->id }}" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $category->name }}</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <x-input-error :messages="$errors->get('categories')" class="mt-2" />
                    </div>
                </div>

                <!-- Botón de enviar -->
                <div class="flex justify-end mt-8">
                    <x-primary-button class="w-full md:w-1/6 flex items-center justify-center">
                        {{ __('Publicar proyecto') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
