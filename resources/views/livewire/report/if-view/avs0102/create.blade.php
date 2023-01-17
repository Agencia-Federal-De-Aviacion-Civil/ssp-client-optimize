<div>
    <section class="bg-gray-50 dark:bg-gray-900 py-10">
        <div class="container px-6 py-6 mx-auto content-center">
            <h1 class="text-xl font-semibold text-center text-gray-800 capitalize lg:text-2xl dark:text-white">AP.7 REPORTE DE IMPACTO DE AVES AVS-01 y AVS-02</h1>
            <div class="flex justify-center mx-auto mt-6">
                <span class="inline-block w-80 h-1 bg-blue-500 rounded-full"></span>
                <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
            </div>
            <p class="max-w-2xl mx-auto mt-2 text-center text-gray-500 dark:text-gray-300 lg:text-xl">
                AVS-01 y AVS-02
            </p>
        </div>
        <section class="max-w-6xl p-2 mx-auto bg-gray-50" style="background-position:50%;background-repeat:no-repeat;background-image: url('{{ asset('images/escudo-hi-opac2.png') }}')">
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Explotador</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-2 text-lg py-1 font-semibold whitespace-no-wrap">Aeronave:</p>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Marca</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Modelo</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Matrícula</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-2 text-lg py-1 font-semibold whitespace-no-wrap">Motor:</p>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Marca</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Modelo</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fecha</label>
                    <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Hora</label>
                    <x-time-picker placeholder="00:00" format="24" class="w-full px-2 py-2" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Hora local</label>
                    <x-select class="w-full">
                        <x-select.option label="ALBA" value="ALBA" />
                        <x-select.option label="DÍA" value="DÍA" />
                        <x-select.option label="CREPÚSCULO" value="CREPÚSCULO" />
                        <x-select.option label="NOCHE" value="NOCHE" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Nombre del aeródromo</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa al Propetario">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Pista utilizada</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa al Propetario">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Posición,si fue en ruta</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa al Propetario">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Altura</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa al Propetario">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Velocidad indicada</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa al Propetario">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fases de vuelo</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
            </div>
            <br>
            <div class="border rounded-lg overflow dark:border-gray-700">
                <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase dark:text-gray-400">Partes de la aeronave</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase dark:text-gray-400"></th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase dark:text-gray-400">Partes de la aeronave</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase dark:text-gray-400"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">radomo</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-full">
                                            <div class="flex items-center h-5">
                                                <input id="radomo-1" name="radomo" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="radomo-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        18
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="radomo-2" name="radomo" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="radomo-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">hélice</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-full">
                                            <div class="flex items-center h-5">
                                                <input id="helice-1" name="helice" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="helice-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                        Golpeadas
                                        </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        25
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="helice-2" name="helice" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="helice-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                           Dañadas
                                        </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">parabrisas</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="Parabrisas-1" name="Parabrisas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="Parabrisas-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        19
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="Parabrisas-2" name="Parabrisas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="Parabrisas-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">ala/motor</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-full">
                                            <div class="flex items-center h-5">
                                                <input id="ala_motor-1" name="ala_motor" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="ala_motor-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                        Golpeadas
                                        </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        26
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="ala_motor-2" name="ala_motor" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="ala_motor-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                           Dañadas
                                        </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">proa (excepto 18 y 19)</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="proa-1" name="proa" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="proa-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        20
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="proa-2" name="proa" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="proa-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">fuselaje</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="fuselaje-1" name="fuselaje" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="fuselaje-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        27
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="fuselaje-2" name="fuselaje" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="fuselaje-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">motor Num.1</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="motor-1" name="motor" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="motor-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        21
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="motor-2" name="motor" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="motor-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">tren de aterrizaje</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="tren-1" name="tren" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="tren-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        28
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="tren-2" name="tren" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="tren-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">2</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="2-1" name="2" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="2-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        22
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="2-2" name="2" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="2-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">cola</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="cola-1" name="cola" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="cola-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        29
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="cola-2" name="cola" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="cola-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">3</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="3-1" name="3" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="3-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        23
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="3-2" name="3" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="3-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">luces</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="luces-1" name="luces" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="luces-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        30
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="luces-2" name="luces" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="luces-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">4</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="4-1" name="4" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="4-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        24
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="4-2" name="4" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="4-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">otros(especifique)</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                <ul class="flex flex-col sm:flex-row">
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="otros-1" name="otros" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                            </div>
                                            <label for="otros-1" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                        </div>
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        31
                                    </li>
                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                        <div class="relative flex items-start w-70">
                                            <div class="flex items-center h-5">
                                                <input id="otros-2" name="otros" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                            </div>
                                            <label for="otros-2" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="px-1 py-3 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Consecuencia para el vuelo</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Condiciones del cielo</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Precipitación</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Especie de ave</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <div class="flex flex-col py-0">
                        <p class="px-2 text-lg py-1 font-semibold whitespace-no-wrap">Aeronave:</p>
                    </div>
                    <div class=" rounded-lg overflow dark:border-gray-700">
                        <table class="w-60 divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase dark:text-gray-400">Criterios</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase dark:text-gray-400"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <ul class="flex flex-col sm:flex-row">
                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                                <div class="relative flex items-start w-full">
                                                    <div class="flex items-center h-5">
                                                        <input id="numerounoobser" name="numerouno" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                                    </div>
                                                    <label for="numerounoobser" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                                </div>
                                            </li>
                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                                A
                                            </li>
                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                                <div class="relative flex items-start w-70">
                                                    <div class="flex items-center h-5">
                                                        <input id="numeroundaño" name="numerouno" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                                    </div>
                                                    <label for="numeroundaño" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">2-10</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <ul class="flex flex-col sm:flex-row">
                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                                <div class="relative flex items-start w-full">
                                                    <div class="flex items-center h-5">
                                                        <input id="dosdiezobser" name="dosdiez" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                                    </div>
                                                    <label for="dosdiezobser" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                                </div>
                                            </li>
                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                                B
                                            </li>
                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                                <div class="relative flex items-start w-70">
                                                    <div class="flex items-center h-5">
                                                        <input id="dosdiezdaño" name="dosdiez" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                                    </div>
                                                    <label for="dosdiezdaño" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">11-100</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <ul class="flex flex-col sm:flex-row">
                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                                <div class="relative flex items-start w-full">
                                                    <div class="flex items-center h-5">
                                                        <input id="oncecienobser" name="oncecien" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                                    </div>
                                                    <label for="oncecienobser" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                                </div>
                                            </li>
                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                                C
                                            </li>
                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                                <div class="relative flex items-start w-70">
                                                    <div class="flex items-center h-5">
                                                        <input id="onceciendaño" name="oncecien" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                                    </div>
                                                    <label for="onceciendaño" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">mas</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <ul class="flex flex-col sm:flex-row">
                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                                <div class="relative flex items-start w-full">
                                                    <div class="flex items-center h-5">
                                                        <input id="masobservada" name="mas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked>
                                                    </div>
                                                    <label for="masobservada" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                    Golpeadas
                                    </label>
                                                </div>
                                            </li>
                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                                D
                                            </li>
                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ml-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                                <div class="relative flex items-start w-70">
                                                    <div class="flex items-center h-5">
                                                        <input id="masdañada" name="mas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                                    </div>
                                                    <label for="masdañada" class="ml-3 block w-full text-sm text-gray-600 dark:text-gray-500">
                                       Dañadas
                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col py-1">
                        <p class="px-2 text-lg py-4 font-semibold whitespace-no-wrap">Tamaño de las aves:</p>
                    </div>
                    <div class="grid space-y-3">
                        <div class="relative flex items-start">
                            <div class="flex items-center h-5 mt-1">
                                <input id="checkbox-pequeñas" name="checkbox-pequeñas" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    aria-describedby="hs-checkbox-delete-description" checked>
                            </div>
                            <label for="checkbox-pequeñas" class="ml-3">
                                <span class="block text-regular font-semibold text-gray-800 dark:text-gray-300">pequeñas</span>
                                <span id="checkbox-pequeñas-description" class="block text-sm text-gray-600 dark:text-gray-500">S</span>
                            </label>
                        </div>
                        <div class="relative flex items-start">
                            <div class="flex items-center h-5 mt-1">
                                <input id="checkbox-medianas" name="checkbox-medianas" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    aria-describedby="hs-checkbox-archive-description">
                            </div>
                            <label for="checkbox-archive" class="ml-3">
                                <span class="block text-regular font-semibold text-gray-800 dark:text-gray-300">medianas</span>
                                <span id="checkbox-medianas-description" class="block text-sm text-gray-600 dark:text-gray-500">M</span>
                            </label>
                        </div>
                        <div class="relative flex items-start">
                            <div class="flex items-center h-5 mt-1">
                                <input id="checkbox-grandes" name="checkbox-grandes" type="checkbox" class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    aria-describedby="hs-checkbox-archive-description">
                            </div>
                            <label for="checkbox-grandes" class="ml-3">
                                <span class="block text-regular font-semibold text-gray-800 dark:text-gray-300">grandes</span>
                                <span id="checkbox-grandes-description" class="block text-sm text-gray-600 dark:text-gray-500">L</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-1 text-lg py-2 whitespace-no-wrap">Se advirtió al piloto del peligro?</p>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-6">
                <div class="md:flex py-2">
                    <x-radio class="text-lg" id="fallas1" name="fallas" left-label="SI" value="SI" wire:model="" />
                </div>
                <div class="md:flex py-2">
                    <x-radio class="text-lg" id="fallas2" name="fallas" left-label="NO" value="NO" wire:model="" />
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div class="">
                    <label for="" class="block text-lg mb-2 dark:text-white">Observaciones(describanse los daños y las lesiones y consiganse otros datos pertinentes)</label>
                    <textarea name="" id="" cols="30" rows="4" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa..."></textarea>
                </div>
            </div>
        </section>
    </section>
    <footer class="flex flex-col items-center justify-between p-6 bg-white dark:bg-gray-900 sm:flex-row">
        <a href="#" class="text-xl font-bold text-gray-600 transition-colors duration-300 dark:text-white hover:text-gray-700 dark:hover:text-gray-300">Revisión:</a>
        <p class="text-sm text-gray-600 dark:text-gray-300">9ª Edición / Manual del Inspector de Aeronavegabilidad </p>
        <div class="flex -mx-2">
            <p class="text-sm text-gray-600 dark:text-gray-300">14 de julio de 2022</p>
        </div>
    </footer>
</div>
<script>
    function showTooltip(flag) {
        switch (flag) {
            case 1:
                document.getElementById("tooltip1").classList.remove("hidden");
                break;
        }
    }

    function hideTooltip(flag) {
        switch (flag) {
            case 1:
                document.getElementById("tooltip1").classList.add("hidden");
                break;
        }
    }
</script>