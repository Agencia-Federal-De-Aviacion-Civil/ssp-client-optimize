<div>
     {{-- <x-errors></x-errors> --}}
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
                    <x-input type="text" wire:model="exploitative" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..."/>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-2 text-lg py-1 font-semibold whitespace-no-wrap">Aeronave:</p>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Marca</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model.before="aircraftbrand_id">
                        @foreach ($brands as $brand)
                            <x-select.option label="{{ $brand->name }}" value="{{ $brand->id }}" />
                        @endforeach
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Modelo</label>
                    <x-native-select class="w-full" placeholder="Selecciona" wire:model.defer="aircraftmodel_id">
                        <option value="">SELECCIONE...</option>
                        @foreach ($models as $model)
                            <option value="{{ $model->id }}">{{ $model->name }}</option>
                        @endforeach
                    </x-native-select>                
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Matrícula</label>
                    <x-input type="text" wire:model="aircraftRegistration" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..." />
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-2 text-lg py-1 font-semibold whitespace-no-wrap">Motor:</p>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Marca</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="enginebrand_id">
                        @foreach ($brands as $brand)
                            <x-select.option label="{{ $brand->name }}" value="{{ $brand->id }}" />
                        @endforeach
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Modelo</label>

                    <x-native-select class="w-full" placeholder="Selecciona" wire:model.defer="enginemodel_id">
                        <option value="">SELECCIONE...</option>
                        @foreach ($modelsengine as $modelengine)
                            <option value="{{ $modelengine->id }}">{{ $modelengine->name }}</option>
                        @endforeach
                    </x-native-select>               
                    {{-- <x-select class="w-full" wire:mode="enginemodel_id">
                        @foreach ($modelsengine as $modelengine)
                        <x-select.option label="{{$modelengine->id}}" value="{{$modelengine->name}}" />                            
                        @endforeach
                    </x-select> --}}
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fecha</label>
                    <x-datetime-picker wire:model="date" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Hora</label>
                    <x-time-picker wire:model="hour" placeholder="00:00" format="24" class="w-full px-2 py-2" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Hora local</label>
                    <x-select class="w-full" wire:model="localTime">
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
                    <x-input type="text" wire:model="aerodromeName" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa al Propetario" />
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Pista utilizada</label>
                    <x-input type="text" wire:model="trackUsed" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa al Propetario" />
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Posición,si fue en ruta</label>
                    <x-input type="text" wire:model="positionRoute" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa al Propetario" />
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Altura</label>
                    <x-input type="text" wire:model="height" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa al Propetario" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Velocidad indicada</label>
                    <x-input type="text" wire:model="indicatedSpeed" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa al Propetario" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fases de vuelo</label>
                    <x-select class="w-full" wire:model="flightPhases">
                            <x-select.option label="ESTACIONAMIENTO " value="ESTACIONAMIENTO" />
                            <x-select.option label="RODAJE " value="RODAJE" />
                            <x-select.option label="RECORRIDO DE DESPEGUE " value="RECORRIDO DE DESPEGUE" />
                            <x-select.option label="ASCENSO " value="ASCENSO" />
                            <x-select.option label="EN RUTA" value="EN RUT"A/>
                            <x-select.option label="DESCENSO " value="DESCENSO" />
                            <x-select.option label="APROXIMACIÓN " value="APROXIMACIÓN" />
                            <x-select.option label="RECORRIDO DE ATERRIZAJE " value="RECORRIDO DE ATERRIZAJE" />                                
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
                                                <x-input wire:model="radome" id="radomo-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="radome" id="radomo-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="propeller" id="helice-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="propeller" id="helice-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="windshield" id="Parabrisas-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="windshield" id="Parabrisas-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                                                <x-input wire:model="wingEngine" id="ala_motor-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="wingEngine" id="ala_motor-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                                                <x-input wire:model="bowExcept" id="proa-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="bowExcept" id="proa-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                                                <x-input wire:model="fuselage" id="fuselaje-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="fuselage" id="fuselaje-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                                                <x-input wire:model="engine1" id="motor-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="engine1" id="motor-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                                                <x-input wire:model="undercarriage" id="tren-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="undercarriage" id="tren-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                                                <x-input wire:model="hitOdamada2" id="2-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="hitOdamada2" id="2-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                                                <x-input wire:model="line" id="cola-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="line" id="cola-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                                                <x-input wire:model="struckHurted3" id="3-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="struckHurted3" id="3-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                                                <x-input wire:model="lights" id="luces-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="lights" id="luces-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                                                <x-input wire:model="hitOdamada4" id="4-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="hitOdamada4" id="4-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                                                <x-input wire:model="otherSpecify" id="otros-1" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                <x-input wire:model="otherSpecify" id="otros-2" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                <x-select class="w-full" wire:model="consequenceFlight">
                    <x-select.option label="NINGUNA" value="NINGUNA" />
                    <x-select.option label="DESPEGUE INTERRUMPIDO" value="DESPEGUE INTERRUMPIDO" />
                    <x-select.option label="ATERRIZAJE POR PRECAUCIÓN" value="ATERRIZAJE POR PRECAUCIÓN" />
                    <x-select.option label="SE APAGARON MOTORES" value="SE APAGARON MOTORES" />
                    <x-select.option label="OTRO ESPECIFIQUE" value="OTRO" />                        
                </x-select>
            </div>
                <div>
                    @if ($consequenceFlight=='OTRO')
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="specify" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                        
                    @endif
                </div>
            </div>

            <div class="px-1 py-3 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Condiciones del cielo</label>
                    <x-select class="w-full" wire:model="skyConditions">
                        <x-select.option label="CIELO DESPEJADO" value="CIELO DESPEJADO" />
                        <x-select.option label="ALGUNAS NUBES" value="ALGUNAS NUBES" />
                        <x-select.option label="CIELO CUBIERTO" value="CIELO CUBIERTO" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Precipitación</label>
                    <x-select class="w-full" wire:model="precipitation">
                        <x-select.option label="NIEBLA" value="NIEBLA" />
                        <x-select.option label="LLUVIA" value="LLUVIA" />
                        <x-select.option label="NIEVE" value="NIEVE" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Especie de ave</label>
                    <x-input type="text" wire:model="birdSpecies" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..."/>
                </div>

            </div>
            {{-- <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            </div> --}}
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
                                                        <x-input wire:model="hitOdamaged1" id="numerounoobser" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"  />
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
                                                        <x-input wire:model="hitOdamaged1" id="numeroundaño" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                        <x-input wire:model="hitOdamaged2" id="dosdiezobser" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                        <x-input wire:model="hitOdamaged2" id="dosdiezdaño" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                                                        <x-input wire:model="hitOdamaged3" id="oncecienobser" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                        <x-input wire:model="hitOdamaged3" id="onceciendaño" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                                                        <x-input wire:model="hitOdamaged4" id="masobservada" value="Golpeadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
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
                                                        <x-input wire:model="hitOdamaged4" id="masdañada" value="Dañadas" type="radio" class="border-gray-200 rounded-full dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"/>
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
                        <x-select class="w-full" wire:model="birdSize">
                            <x-select.option label="PEQUEÑAS" value="pequeñas" />
                            <x-select.option label="MEDIANAS" value="medianas" />
                            <x-select.option label="GRANDES" value="grandes" />
                        </x-select>
        
                        <div class="flex flex-col py-0">
                            <p class="px-1 text-lg py-2 whitespace-no-wrap">Se advirtió al piloto del peligro?</p>
                        </div>
                        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-6">
                            <div class="md:flex py-2">
                                <x-radio class="text-lg" id="fallas1" name="fallas" left-label="SI" value="SI" wire:model="pilotDanger" />
                            </div>
                            <div class="md:flex py-2">
                                <x-radio class="text-lg" id="fallas2" name="fallas" left-label="NO" value="NO" wire:model="pilotDanger" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div class="">
                    <label for="" class="block text-lg mb-2 dark:text-white">Observaciones(describanse los daños y las lesiones y consiganse otros datos pertinentes)</label>
                    <textarea name="" id="" cols="30" rows="4" type="text" wire:model="observation" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa..."></textarea>
                </div>
            </div>
            <div class="py-12 mb-2 text-right">
                <x-button wire:click.prevent="save" icon="document-download" spinner="" blue
                    label="GENERAR REPORTE" />
                    <div wire:loading.delay wire:target="save">
                        <div
                            class="flex justify-center bg-emerald-900 z-40 h-full w-full fixed top-0 left-0 items-center opacity-75">
                            <div style="color: #008897" class="la-ball-circus la-2x">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
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