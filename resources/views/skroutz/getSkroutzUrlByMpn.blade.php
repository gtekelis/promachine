@extends('layouts.app')

@section('content')
    <div class="p-6 max-w-lg mx-auto bg-white flex items-center rounded-lg">
        <form action="{{ route('mpnList') }}" method="post" class="flex-auto">
            @csrf
            <div class="mb-4">
                <label for="body" class="sr-only">Body</label>
                <textarea name="mpn" id="mpn" cols="30" rows="4"
                          class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('mpn') border-red-500 @enderror"
                          placeholder="Ένα ή περισσότερα MPN"></textarea>
                @error('mpn')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Αποθήκευση</button>
            </div>

        </form>
    </div>

{{--    @if($posts->count())--}}
{{--        <div class="flex flex-row flex-wrap items-start">--}}
{{--            @foreach($posts as $post)--}}
{{--                <div class="mt-6 max-w-md mx-auto bg-white rounded-xl shadow-sm overflow-hidden md:max-w-2xl hover:shadow-lg">--}}
{{--                    <div class="md:flex">--}}
{{--                        <div class="md:flex-shrink-0">--}}
{{--                            <img class="h-48 w-full object-cover md:w-48" src="https://picsum.photos/800" alt="Man looking at item at a store">--}}
{{--                        </div>--}}
{{--                        <div class="p-8">--}}
{{--                            <div class="tracking-wide text-sm text-indigo-500 font-semibold">--}}
{{--                                <span>{{$post->user->name}}</span> - <span>{{$post->created_at->diffForHumans()}}</span>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>--}}
{{--                            <p class="mt-2 text-gray-500">--}}
{{--                                {{$post->body}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}

{{--            @else--}}
{{--                <p>No posts found</p>--}}
{{--            @endif--}}
{{--        </div>--}}

{{--        <div class="flex flex-row justify-center mt-6 mb-3">--}}
{{--            {{$posts->links()}}--}}
{{--        </div>--}}
@endsection
