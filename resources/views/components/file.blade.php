@props(['disabled' => false])

<input type="file" accept="image/jpeg, image/jpg, image/png" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => '
border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-purple-500 dark:focus:border-purple-600 
focus:ring-purple-500 dark:focus:ring-purple-600 rounded-md shadow-sm text-sm disabled:opacity-50 disabled:pointer-events-none file:bg-gray-100 file:border-0
file:me-4 file:py-3 file:px-4 dark:file:bg-gray-700 dark:file:text-gray-300 focus:outline-none focus:ring-1 focus:ring-purple-600'
]) !!}>


