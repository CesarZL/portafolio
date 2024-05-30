<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-3 text-gray-900 dark:text-gray-100">
                   <h1 class="text-2xl font-bold text-center my-10"> 
                        Mis mensajes
                   </h1>

                   @forelse ($unread_notifications as $notification)
                       <div class="p-5 border border-yellow-300 dark:border-yellow-700 lg:flex lg:justify-between lg:items-center rounded-lg mb-3">
                            <div>
                                <p class="mb-2">Tienes un nuevo mensaje de <span class="font-bold">{{ $notification->data['name'] }}</span></p>
                                <p class="mb-2">Correo: <span class="font-bold">{{ $notification->data['email'] }}</span></p>
                                <p class="mb-2">Mensaje: <span class="font-bold">{{ $notification->data['message'] }}</span></p>
                                <p class="">{{ $notification->created_at->diffForHumans() }}</p>
                            </div>
                       </div>
                   @empty
                        <div class="p-5 border border-gray-300 dark:border-gray-700 lg:flex lg:justify-between lg:items-center rounded-lg mb-3 items-center">
                            <p>No tienes mensajes nuevos</p>
                        </div>
                   @endforelse     

                   @foreach($read_notifications as $notification)
                        <div class="p-5 border border-green-300 dark:border-green-700 lg:flex lg:justify-between lg:items-center rounded-lg mb-3">
                            <div>
                                <p class="mb-2">Mensaje de <span class="font-bold">{{ $notification->data['name'] }}</span></p>
                                <p class="mb-2">Correo: <span class="font-bold">{{ $notification->data['email'] }}</span></p>
                                <p class="mb-2">Mensaje: <span class="font-bold">{{ $notification->data['message'] }}</span></p>
                                <p class="">{{ $notification->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    @endforeach

                    @if ($read_notifications instanceof \Illuminate\Pagination\LengthAwarePaginator && $read_notifications->total() >= 4)
                        <div class="mt-10 mb-3">
                            {{ $read_notifications->links() }}
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
