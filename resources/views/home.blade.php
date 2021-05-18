@extends('layouts.app')

@section('content')

{{--    <div class="flex justify-center">--}}
{{--        <div class="w-8/12 bg-white p-6 rounded-lg">--}}
{{--            <h1>Welcome Home!</h1>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="mt-6 p-6 max-w-sm mx-auto bg-white rounded-xl shadow-sm flex items-center space-x-6 hover:shadow-lg">
        <div class="flex-shrink-0">
            <img class="h-14" src="/images/promachine_002.png" alt="ChitChat Logo">
        </div>
        <div>
            <div class="text-xl font-medium text-black">Καλώς ήλθες στο ProMachine</div>
            <p class="text-gray-500">Πάρε τον έλεγχο του workflow των προμηθευτών και των προϊόντων σου!</p>
        </div>
    </div>

{{--    <div class="flex justify-center mt-4">--}}
{{--        <a href="" class="inline-block uppercase font-semibold tracking-wider bg-indigo-600 text-gray-50 rounded-sm shadow-lg hover:shadow-md py-4 px-8 text-xl">Login</a>--}}
{{--    </div>--}}

@endsection
