@extends('layouts.app')

@section('content')
    <div class="p-6 max-w-lg mx-auto bg-white flex items-center rounded-lg">
        <form action="{{ route('mpnList') }}" method="post" class="flex-auto mb-4">
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


    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col ml-24 mr-24 mt-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                MPN
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Επιστρεφει 1 προϊον
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Εχει γινει επεξεργασια
                            </th>
{{--                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                Role--}}
{{--                            </th>--}}
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                        @foreach($mpn_list as $mpn)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
{{--                                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">--}}
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$mpn->mpn}}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{--jane.cooper@example.com--}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$mpn->returns_one_product}}</div>
                                    {{--<div class="text-sm text-gray-500">Optimization</div>--}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-green-800">
                                      Όχι
                                        {{$mpn->is_processed}}
                                    </span>
                                </td>
{{--                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">--}}
{{--                                    Admin--}}
{{--                                </td>--}}
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                        @endforeach

                        {{ $mpn_list->links() }}



                        <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{ $mpn_list->links() }}
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
