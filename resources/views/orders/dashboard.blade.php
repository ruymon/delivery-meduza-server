<x-app-layout>
    <div class="py-12">
        <div class="flex gap-4 flex-wrap max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 justify-center md:justify-start">

        @foreach ($orders as $order)
            <x-order-card :order="$order" />
        @endforeach

        </div>
    </div>
</x-app-layout>
