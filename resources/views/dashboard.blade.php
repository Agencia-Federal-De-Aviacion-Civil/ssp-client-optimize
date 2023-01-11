@extends('layouts.app')
@section('title', 'SSP')
@section('content')
    <section class="mt-16 bg-gray-50">
        {{-- <div x-data="app()" x-cloak>
            <div class="bg-white max-w-4xl mx-auto px-4 py-10">
                <div class="border-b-2 py-4">
                    <div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
                        x-text="`Pasos: ${step} de 3`"></div>
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="flex-1">
                            <div x-show="step === 1">
                                <div class="text-lg font-bold text-gray-700 leading-tight">REGISTRO</div>
                            </div>
                        </div>
                        <div class="flex items-center md:w-80">
                            <div class="w-full bg-white rounded-full mr-2">
                                <div class="rounded-full bg-blue-900 text-xs leading-none h-2 text-center text-white"
                                    :style="'width: ' + parseInt(step / 3 * 100) + '%'"></div>
                            </div>
                            <div class="text-md w-10 text-gray-600" x-text="parseInt(step / 3 * 100) +'%'">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
@endsection
