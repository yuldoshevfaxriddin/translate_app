<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{route('create')}}" method="POST">
                    @csrf
                    <div class="p-6 text-gray-900 light:text-gray-100">
                        <select name="lang_1" id="">
                            <option value="{{\App\Models\Language::find(1)->id}}">{{\App\Models\Language::find(1)->name}}</option>
                        </select>
                        <span>to</span>
                        <select name="lang_2" id="">
                            @foreach (\App\Models\Language::get() as $l)
                                @if ($l->id ==1)
                                    @continue
                                @endif
                                <option value="{{$l->id}}">{{$l->name}}</option>
                            @endforeach
                        </select>
                    <div class="p-6 text-gray-900 light:text-gray-100">
                        <input type="text" name="lang_1_text" id="lang_1_text">
                        <input type="text" name="lang_2_text" id="lang_2_text">
                    </div>
                    <div class="p-6 text-gray-900 light:text-gray-100">
                        <input type="submit" value="saqlash">
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
