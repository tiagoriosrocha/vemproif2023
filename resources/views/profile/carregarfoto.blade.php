<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Upload de foto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Faça upload de uma foto do seu rosto</h1>
                    <hr>
                    <br>
                    <form method="POST" action="{{ route('image.uploadfoto') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control" name="image" />
                        <br>
                        <br>
                        <button type="submit" class="btn btn-sm">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
