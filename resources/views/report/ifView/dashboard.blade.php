@extends('layouts.app')
@section('title', 'SSP')
@section('content')
    <div class="bg-gray-50">
        <section class="text-gray-600 py-1 body-font">
            <div class="container px-5 py-12 mx-auto">
                <div class="mt-2 text-lg">Bienvenida {{ $users[0]->name }}</div>
                <div class="h-0.5 w-20 bg-sky-600 rounded"></div>
                {{--             
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">Selecciona tu reporte</h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac Heirloom</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
            </div> --}}
                <div class="py-12 flex flex-wrap">
                    <a href="{{ route('afac001', ['slug' => $slug, 'idReporter' => $idReporter]) }}" class="">
                        <div
                            class="hover:bg-gray-100 group hover:cursor-pointer hover:scale-110 xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">AFAC-001</h2>
                            <p class="leading-relaxed text-base mb-4">AP.1 NOTIFICACIÓN AFAC-001 PRIMERA NOTICIA DE
                                ACCIDENTE</p>
                            <a class="text-indigo-500 inline-flex items-center group-hover:animate-bounce">Generar Reporte
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </a>
                    <a href="{{ route('afac001a', ['slug' => $slug, 'idReporter' => $idReporter]) }}" class="">
                        <div
                            class="hover:bg-gray-100 group hover:cursor-pointer hover:scale-110 xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">AFAC-001-A</h2>
                            <p class="leading-relaxed text-base mb-4">AP.1 NOTIFICACIÓN AFAC-001A PRIMERA NOTICIA DE
                                ACCIDENTE</p>
                            <a class="text-indigo-500 inline-flex items-center group-hover:animate-bounce">Generar Reporte
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </a>
                    <a href="{{ route('daaia001', ['slug' => $slug, 'idReporter' => $idReporter]) }}" class="">
                        <div
                            class="hover:bg-gray-100 group hover:cursor-pointer hover:scale-110 xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">DAAIA-001</h2>
                            <p class="leading-relaxed text-base mb-4">AP.4 INFORME DE ACCIDENTE/INCIDENTE DE PILOTO/OPERADOR
                                DAAIA-001</p>
                            <a class="text-indigo-500 inline-flex items-center group-hover:animate-bounce">Generar Reporte
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </a>
                    <a href="{{ route('afac005', ['slug' => $slug, 'idReporter' => $idReporter]) }}" class="">
                        <div
                            class="hover:bg-gray-100 group hover:cursor-pointer hover:scale-110 xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">AFAC-005</h2>
                            <p class="leading-relaxed text-base mb-4">AP.5 DESVIACIÓN DE VEHÍCULOS Y PEATONES AFAC-005</p>
                            <a class="text-indigo-500 inline-flex items-center group-hover:animate-bounce">Generar Reporte
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </a>
                    <a href="" class="">
                        <div
                            class="hover:bg-gray-100 group hover:cursor-pointer hover:scale-110 xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">AVS-01 y AVS-02</h2>
                            <p class="leading-relaxed text-base mb-4">AP.7 REPORTE DE IMPACTO DE AVES AVS-01 y AVS-02</p>
                            <a class="text-indigo-500 inline-flex items-center group-hover:animate-bounce">Generar Reporte
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </a>
                    <a href="" class="">
                        <div
                            class="hover:bg-gray-100 group hover:cursor-pointer hover:scale-110 xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">AVS-02</h2>
                            <p class="leading-relaxed text-base mb-4">AP.7 REPORTE DE PRESENCIA DE AVES AVS-02</p>
                            <a class="text-indigo-500 inline-flex items-center group-hover:animate-bounce">Generar Reporte
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </a>
                    <a href="" class="">
                        <div
                            class="hover:bg-gray-100 group hover:cursor-pointer hover:scale-110 xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">AFAC-14</h2>
                            <p class="leading-relaxed text-base mb-4">AP.12 INFORME DE ACCIDENTE AFAC-14</p>
                            <a class="text-indigo-500 inline-flex items-center group-hover:animate-bounce">Generar Reporte
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </a>
                    <a href="" class="">
                        <div
                            class="hover:bg-gray-100 group hover:cursor-pointer hover:scale-110 xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">AFAC-14B</h2>
                            <p class="leading-relaxed text-base mb-4">AP.12 INFORME DE ACCIDENTE AFAC-14B</p>
                            <a class="text-indigo-500 inline-flex items-center group-hover:animate-bounce">Generar Reporte
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </a>
                    <a href="" class="">
                        <div
                            class="hover:bg-gray-100 group hover:cursor-pointer hover:scale-110 xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">AFAC-14A</h2>
                            <p class="leading-relaxed text-base mb-4">AP.12 INFORME DE INCIDENTE AFAC-14A</p>
                            <a class="text-indigo-500 inline-flex items-center group-hover:animate-bounce">Generar Reporte
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </a>
                    <a href="" class="">
                        <div
                            class="hover:bg-gray-100 group hover:cursor-pointer hover:scale-110 xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                            <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">AFAC-14C</h2>
                            <p class="leading-relaxed text-base mb-4">AP.12 INFORME DE INCIDENTE AFAC-14C</p>
                            <a class="text-indigo-500 inline-flex items-center group-hover:animate-bounce">Generar Reporte
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </a>

                </div>
            </div>
        </section>
    </div>
@endsection
