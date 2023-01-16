<div>
    <section class="bg-gray-50 dark:bg-gray-900 py-20">
        <div class="container px-6 py-10 py-20 mx-auto content-center">
            <h1 class="text-xl font-semibold text-center text-gray-800 capitalize lg:text-2xl dark:text-white">AP.4 INFORME DE ACCIDENTE/INCIDENTE DE PILOTO/OPERADOR</h1>
            <div class="flex justify-center mx-auto mt-6">
                <span class="inline-block w-80 h-1 bg-blue-500 rounded-full"></span>
                <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
            </div>
            <p class="max-w-2xl mx-auto mt-6 text-center text-gray-500 dark:text-gray-300 lg:text-xl">
                DAAIA-001
            </p>
            <p class="max-w-6xl mx-auto mt-6 text-center text-gray-500 dark:text-gray-300 lg:text-lg">(Este formato deberá ser utilizado para reportar accidentes/incidentes que involucran aeronaves civiles o de uso público). </p>
        </div>
        <section class="max-w-6xl p-2 mx-auto bg-gray-50" style="background-position:50%;background-repeat:no-repeat;background-image: url('{{ asset('images/escudo-hi-opac2.png') }}')">
            <div class="flex flex-col py-0">
                <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                    <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                        INFROMACIÓN SOBRE EL SUCESO</h1>
                </div>
                <div class="py-2 px-1 grid grid-cols-1 gap-4 mt-0 sm:grid-cols-4">
                    <div>
                        <label for="brand_id" class="block text-lg mb-2 dark:text-white">Informe</label>
                        <x-select class="w-full" placeholder="Selecciona" wire:model="brand_id">
                                <x-select.option label="" value="" />
                        </x-select>
                    </div>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
                
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Lugar exacto</label>
                    <input type="text" wire:model="" 
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresa al Propetario">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Municipio</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Estado</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Ciudad o población más cercana</label>
                    <input type="text" wire:model="" 
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresa al Propetario">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                <div>
                    <label for="number_serie" class="block text-lg mb-2 dark:text-white"></label>
                    <label for="number_serie" class="block text-lg mb-2 dark:text-white">Coordenadas geográficas:</label>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Latitud</label>
                    <input type="text" wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Longitud</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fecha</label>
                    <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Hora</label>
                    <x-time-picker placeholder="00:00" format="24" class="w-full px-2 py-2" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Autoridad Aeronáutica que interviene</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-0 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fases de vuelo</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTRO --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Indique</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Colisión con otra aeronave</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Altitud a la que ocurrió el suceso</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="flex flex-col py-0">
                <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                    <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                        INFROMACIÓN DE LA AERONAVE</h1>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fabricante</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Modelo</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Número de Serie</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Matrícula</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Amateur</label>
                    <x-select class="px-2 py-0 w-full">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Peso Máximo del despegue</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Peso al momento del accidente</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-2 text-lg py-2 font-semibold whitespace-no-wrap">Localización del centro de gravedad al momento del suceso:</p>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">nariz</label>
                    <x-input class="px-2 py-2 w-full" wire:model="" placeholder="Ingresa..." suffix="pulg." />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">datum</label>
                    <x-input class="px-2 py-2 w-full" wire:model="" placeholder="Ingresa..." suffix="pulg." />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">nariz</label>
                    <x-input class="px-2 py-2 w-full" wire:model="" placeholder="Ingresa..." suffix="%CAM" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">datum</label>
                    <x-input class="px-2 py-2 w-full" wire:model="" placeholder="Ingresa..." suffix="%CAM" />
                </div>
            </div>
            <div class="px-1 py-0 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Categoría de aeronave</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTRO --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Indique</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-0 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Categoría de certificado de aeronavegabilidad</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTRO --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Indique</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-0 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Número de asientos</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-2 text-lg py-2 font-semibold whitespace-no-wrap">Si es una aeronave grande:</p>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Asientos para tripulación de vuelo</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Asientos para tripulación de cabina</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Asientos para pasajeros</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Tren de aterrizaje</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Programa de mantenimiento</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTRO --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">especifique</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Última inspección</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTRO --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Otro</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div> 
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fecha de la última inspección</label>
                    <x-datetime-picker class="w-full px-2 py-2" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                </div> 
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Horas totales del planeador</label>
                    <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="hrs." />
                </div> 
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Horas desde la última inspección</label>
                    <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="hrs." />
                </div> 
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Horas al momento del accidente</label>
                    <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="hrs." />
                </div> 
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Contaba con equipo IFR</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="">
                        <x-select.option label="" value="" />
                    </x-select>
                </div> 
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Sistema de aviso de desplome:</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Sistema de extinción de fuego</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="">
                        <x-select.option label="" value="" />
                    </x-select>
                </div> 
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">tipo</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">ELT instalado</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">ELT activado</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div class="col-span-2">
                    <label for="" class="block text-lg mb-2 dark:text-white">Fabricante del ELT</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div class="col-span-1">
                    <label for="" class="block text-lg mb-2 dark:text-white">Modelo</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-4 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Serie</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Batería</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Tipo de motor</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Sistema de combustible motor recíproco</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-1 text-lg py-2 font-semibold whitespace-no-wrap">Hélice:</p>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fabricante</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Modelo</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Paso</label>
                    <x-select class="px-2 py-0 w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-1 text-lg py-2 font-semibold whitespace-no-wrap">Motor:</p>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fabricante</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Modelo</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Potencia</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="flex flex-col">
                <div class="m-1 overflow-x-auto">
                    <div class="py-2 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Motor</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Serie</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Fecha de fabricación</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Tiempo total</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">última inspección</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">última reparación mayor</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Pos 1</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                                placeholder="Ingresar..."></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            <x-datetime-picker class="md:w-60 w-full px-2 py-2" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Pos 2</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                                placeholder="Ingresar..."></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            <x-datetime-picker class="md:w-60 w-full px-2 py-2" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Pos 3</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                                placeholder="Ingresar..."></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            <x-datetime-picker class="md:w-60 w-full px-2 py-2" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Pos 4</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                                placeholder="Ingresar..."></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            <x-datetime-picker class="md:w-60 w-full px-2 py-2" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="bg-blue-50 border border-blue-200 rounded-md p-2" role="alert">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                            </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-gray-800 font-semibold">
                                        Nota:
                                    </h3>
                                    <div class="mt-2 text-md text-gray-600">
                                        Adjunta una copia de la última revalidación, liberación del último servicio aplicado a la aeronave y certificaciones.
                                    </div>
                                    <form>
                                        <label for="small-file-input" class="sr-only">Choose file</label>
                                        <input type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                                  file:bg-transparent file:border-0
                                  file:bg-gray-200 file:mr-4
                                  file:py-2 file:px-4
                                  dark:file:bg-gray-700 dark:file:text-gray-400">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                    <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                        DATOS DEL PROPIETARIO/OPERADOR REGISTRADO ANTE LA AFAC </h1>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-1 text-lg py-2 font-semibold whitespace-no-wrap">Propietario:</p>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Dirección</label>
                    <div class="md:flex col-span-8">
                        <textarea name="" id="" cols="30" rows="2" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-1 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa..."></textarea>
                    </div>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-1 text-lg py-2 font-semibold whitespace-no-wrap">Operador:</p>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Dirección</label>
                    <div class="md:flex col-span-8">
                        <textarea name="" id="" cols="30" rows="2" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-1 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa..."></textarea>
                    </div>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Propósito del vuelo:</label>
                    <x-select class="px-2 py-0 w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Operación:</label>
                    <x-select class="px-2 py-0 w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Operación de carga</label>
                    <x-select class="px-2 py-0 w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                 {{-- Si se selecciona pasajeros aparece--}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Pasajeros cuantos</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Tipo de concesión/permiso</label>
                    <x-select class="px-2 py-0 w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- Si se aparece al seleccionar otros--}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Otros</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="bg-blue-50 border border-blue-200 rounded-md p-4" role="alert">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-gray-800 font-semibold">
                            Nota:
                        </h3>
                        <div class="mt-2 text-md text-gray-600">
                            Adjuntar permisos y certificados emitidos a la empresa por parte de la Autoridad Aeronautica.
                        </div>
                        <form>
                            <label for="small-file-input" class="sr-only">Choose file</label>
                            <input type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                    file:bg-transparent file:border-0
                      file:bg-gray-200 file:mr-4
                      file:py-2 file:px-4
                      dark:file:bg-gray-700 dark:file:text-gray-400">
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="flex flex-col py-0">
                <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                    <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                        COLISIÓN CON OTRA AERONAVE, DATOS DE LA AERONAVE INVOLUCRADA</h1>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Matricula</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fabricante</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">modelo</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Daños</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-1 text-lg py-2 font-semibold whitespace-no-wrap">Propietario:</p>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Dirección</label>
                    <div class="md:flex col-span-8">
                        <textarea name="" id="" cols="30" rows="2" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-1 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa..."></textarea>
                    </div>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-1 text-lg py-2 font-semibold whitespace-no-wrap">Operador:</p>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                    <input type="text"  wire:model=""
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Dirección</label>
                    <div class="md:flex col-span-8">
                        <textarea name="" id="" cols="30" rows="2" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa..."></textarea>
                    </div>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                    <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                        FALLA MECÁNICA O MAL FUNCIONAMIENTO</h1>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-1 text-lg py-2 whitespace-no-wrap">Hubo falla o malfuncionamiento de algún componente de la aeronave?</p>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-6">
            <div class="md:flex py-2">
                <x-radio class="text-lg" id="fallas1" name="fallas" left-label="SI" value="SI" wire:model="" />
            </div>
            <div class="md:flex py-2">
                <x-radio class="text-lg" id="fallas2" name="fallas" left-label="NO" value="NO" wire:model="" />
            </div>
            <div class="md:flex py-2">
                <x-radio class="text-lg" id="fallas3" name="fallas" left-label="DESCONOCIDO" value="DESCONOCIDO" wire:model="" />
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
            <div class="">
                <label for="" class="block text-lg mb-2 dark:text-white">Si hubo, asiente el nombre de la parte, fabricante,número de parte y serie, decriba la falla</label>
                <textarea name="" id="" cols="30" rows="4" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresa..."></textarea>
            </div>
        </div>
        <div class="flex flex-col py-0">
            <p class="px-1 text-lg py-2 whitespace-no-wrap">Tiempo total / Ciclos totales de la parte o componente:</p>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-8">
            <div class="md:flex col-span-2">
                <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="horas." />
            </div>
            <div class="md:flex col-span-2">
                <x-input class=" w-full" wire:model="" placeholder="Ingresa..." suffix="ciclos." />
            </div>
        </div>
        <div class="flex flex-col py-0">
            <p class="px-1 text-lg py-2 whitespace-no-wrap">Tiempo desde nuevo / Ultima inspección / Overthaled de la parte o componente:</p>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-8">
            <div class="md:flex col-span-4">
                <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="horas." />
            </div>
        </div>
        <div class="bg-blue-50 border border-blue-200 rounded-md p-4" role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-800 font-semibold">
                        Nota:
                    </h3>
                    <div class="mt-2 text-md text-gray-600">
                        Si el accidente se debió al mal funcionamiento, falla mecánica de la aeronave, motor, accesorios, instrumentos, etc.(no incluye para de motor por falta de combustible, aceite o uso inadecuado de los controles por la tripulación) adjunte un informe firmando por un técnico en mantenimiento, taller autorizado externo o formato DGAC-80.Adjunte copias de los últimos servicios y certificaciones al informe.
                    </div>
                    <form>
                        <label for="small-file-input" class="sr-only">Choose file</label>
                        <input type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                  file:bg-transparent file:border-0
                  file:bg-gray-200 file:mr-4
                  file:py-2 file:px-4
                  dark:file:bg-gray-700 dark:file:text-gray-400">
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="flex flex-col py-0">
            <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                    DAÑOS A LA AERONAVE Y A TERCEROS</h1>
            </div>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">modelo</label>
                <x-select class="" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Presencia de fuego</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Exploción</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="flex flex-col py-0">
            <p class="px-1 text-lg py-2 whitespace-no-wrap">Describa los daños de la aeronave y a terceros</p>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
            <div class="md:flex">
                <textarea name="" id="" cols="30" rows="6" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresa..."></textarea>
            </div>
        </div>
        <div class="flex flex-col py-2">
            <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                    INFORMACIÓN DE AERÓDROMO (SI EL ACCIDENTE SE SUSCITÓ EN LA APROXIMACIÓN, DESPEQUE O EN UN RADIO DE 5km DEL AEROPUERTO LLENE ESTA SECCIÓN)</h1>
            </div>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div class="col-span-1">
                <label for="" class="block text-lg mb-2 dark:text-white">Identificación aeródromo OACI</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div class="col-span-2">
                <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div class="col-span-1">
                <label for="" class="block text-lg mb-2 dark:text-white">Distancia al centro del aeródromo</label>
                <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="SM" />
            </div>
            <div class="col-span-1">
                <label for="" class="block text-lg mb-2 dark:text-white">Dirección al aerodromo</label>
                <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="grados magneticos."/> 
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div class="col-span-1">
                <label for="" class="block text-lg mb-2 dark:text-white">Elevación</label>
                <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="m."/> 
            </div>
            <div class="col-span-1">
                <label for="" class="block text-lg mb-2 dark:text-white">Proximidad al aeropuerto</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Segmento de aproximación</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Aproximación IFR</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Aproximación VFR</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-0 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Cabecera de pista</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Longitud</label>
                <x-input class="px-2 py-2 w-full" wire:model="" placeholder="Ingresa..." suffix="m" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Ancho</label>
                <x-input class="px-2 py-2 w-full" wire:model="" placeholder="Ingresa..." suffix="m" />
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Material de la cabecera de la pista</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Condiciones de la superficie de la pista:</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="flex flex-col py-0">
            <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                    INFORMACIÓN DEL VUELO</h1>
            </div>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Ultimo aeropuerto de despegue</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Hora de despegue</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Aeropuerto de destino</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Tipo de Plan de vuelo</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">            
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Autorización de vuelo</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Espacio aéreo donde ocurrió el suceso</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Carga de la aeronave</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            {{-- aparece al seleccionar otros --}}
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Otros</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="flex flex-col py-0">
            <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                    COMBUSTIBLE Y OTROS SERVICIOS</h1>
            </div>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-12">
            <div class="md:flex col-span-5">
                <p class="text-lg py-2 whitespace-no-wrap">Cantidad de combustible a bordo en el último despegue:</p>
            </div>
            <div class="md:flex col-span-4">
                <x-input class="px-2 py-2 w-full" wire:model="" placeholder="Ingresa..." suffix="litos" />
            </div>
            <div class="md:flex col-span-3">
                <x-input class="px-2 py-2 w-full" wire:model="" placeholder="Ingresa..." suffix="galones" />
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Tipo de combustible</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            {{-- APARECE AL SELECCIONAR OTRO--}}
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>  
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
            <div class="">
                <label for="" class="block text-lg mb-2 dark:text-white">Otros servicio aeroportuario proporcionado en tierra, antes de la salida de la puerta de embarque</label>
                <textarea name="" id="" cols="30" rows="4" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresa..."></textarea>
            </div>
        </div>
        <div class="bg-blue-50 border border-blue-200 rounded-md p-4" role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-800 font-semibold">
                        Nota:
                    </h3>
                    <div class="mt-2 text-md text-gray-600">
                        Anexar el recibo de combustible suministrado a la aeronave y de otro servicio proporcionado previo al despegue de la aeronave.
                    </div>
                    <form>
                        <label for="small-file-input" class="sr-only">Choose file</label>
                        <input type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                  file:bg-transparent file:border-0
                  file:bg-gray-200 file:mr-4
                  file:py-2 file:px-4
                  dark:file:bg-gray-700 dark:file:text-gray-400">
                    </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col py-2">
            <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                    EVACUACIÓN DE LA AERONAVE</h1>
            </div>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
        </div>
        <div class="flex flex-col py-0">
            <p class="px-1 text-lg py-2 whitespace-no-wrap">Se llevó a cabo una evacuación de la aeronave?</p>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-6">
            <div class="md:flex py-2">
                <x-radio class="text-lg" id="evacuacion1" name="evacuacion" left-label="SI" value="SI" wire:model="" />
            </div>
            <div class="md:flex py-2">
                <x-radio class="text-lg" id="evacuacion2" name="evacuacion" left-label="NO" value="NO" wire:model="" />
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
            <div class="">
                <label for="" class="block text-lg mb-2 dark:text-white">Método de evacuación. Describa como los ocupantes abandonaron la aeronave y cuantos utilizaron cada salida de emergencia de la aeronave</label>
                <textarea name="" id="" cols="30" rows="4" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresa..."></textarea>
            </div>
        </div>
        <div class="bg-blue-50 border border-blue-200 rounded-md p-4" role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-800 font-semibold">
                        Nota:
                    </h3>
                    <div class="mt-2 text-md text-gray-600">
                        Anexar copia fotostática legible de los procedimientos y si requiere utilizar más hojas adicionales, adjúntelas al informe.
                    </div>
                    <form>
                        <label for="small-file-input" class="sr-only">Choose file</label>
                        <input type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                  file:bg-transparent file:border-0
                  file:bg-gray-200 file:mr-4
                  file:py-2 file:px-4
                  dark:file:bg-gray-700 dark:file:text-gray-400">
                    </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col py-2">
            <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                    INFORMACIÓN DE LAS CONDICIONES DE TIEMPO EN EL SITIO DEL ACCIDENTE</h1>
            </div>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div class="col-span-2">
                <label for="" class="block text-lg mb-2 dark:text-white">Instalación que le proporciono la observación</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div class="col-span-1">
                <label for="" class="block text-lg mb-2 dark:text-white">Hora de la observación</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Distancia del lugar del accidente</label>
                <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="SM" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Dirección del lugar del accidente</label>
                <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="grados magneticos" />
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fuente de la información</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Información obtenida</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Condiciones de la luz</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Cielo/nubes</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Techo</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            {{--Sale si se selecciona nubes bajas--}}
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Altura más baja de la nube</label>
                <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="a nivel del terreno" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Restricción a la visibilidad</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Viento</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">a)Orientación</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">b)Intensidad</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Tipo de turbulencia</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Severidad de la turbulencia</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Condiciones meteorológicas prevalecientes</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">NOTAM,AIRMETs,SIGMETs,PIREPs vigentes a la hora del accidente</label>
                <div class="md:flex col-span-8">
                    <textarea name="" id="" cols="30" rows="4" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresa..."></textarea>
                </div>
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Temperatura</label>
                <x-input class="px-2 py-2 w-full" wire:model="" placeholder="Ingresa..." suffix="°C" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Altímetro</label>
                <x-input class="px-2 py-2 w-full" wire:model="" placeholder="Ingresa..." suffix="°C" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Altitud densidad</label>
                <x-input class="px-2 py-2 w-full" wire:model="" placeholder="Ingresa..." suffix="°C" />
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Punto de roció</label>
                <x-input class="px-2 py-2 w-full" wire:model="" placeholder="Ingresa..." suffix="°C" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Tipo de precipitación</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="bg-blue-50 border border-blue-200 rounded-md p-4" role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-800 font-semibold">
                        Nota:
                    </h3>
                    <div class="mt-2 text-md text-gray-600">
                        Cuando el accidente se sucite fuera de las instalaciones del aeropuerto adjuntar al informe el pronóstico de área FAMX.
                    </div>
                    <form>
                        <label for="small-file-input" class="sr-only">Choose file</label>
                        <input type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                  file:bg-transparent file:border-0
                  file:bg-gray-200 file:mr-4
                  file:py-2 file:px-4
                  dark:file:bg-gray-700 dark:file:text-gray-400">
                    </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col py-2">
            <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                    TRIPULACIÓN </h1>
            </div>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
        </div>
        <div class="flex flex-col py-0">
            <p class="px-1 text-lg  whitespace-no-wrap font-bold">A. COMANDANTE</p>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div class="col-span-2">
                <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Nacionalidad</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fecha de nacimiento</label>
                <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
            <div class="col-span-2">
                <label for="" class="block text-lg mb-2 dark:text-white">Domicilio</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="flex flex-col py-0">
            <p class="px-1 text-base whitespace-no-wrap font-semibold">LICENCIA</p>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Clase</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Número</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Vigencia</label>
                <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
        </div>
        <div class="flex flex-col">
            <div class="m-1 overflow-x-auto">
                <div class="px-1 py-2 min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Horas de vuelo</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Todas las aeronaves</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Aeronave acccidentada</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">multimotor</th>
                                    <th scope="col" colspan="2" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">instrumentos</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Piloto al mando</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Instructor</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Copiloto</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimos 90 dias</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimos 30 dias</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimas 24 horas </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Capacidades</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Certificado médico número</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Limitaciones del certificado</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Excepción al certificado</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Observaciones</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            {{--APARECER EN CASO DE SELECCIONAR OTRO--}}
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Otro</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Asiento ocupado</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Lesión</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Desempeña funciones de</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Utilizo el cinturón de seguridad?</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Utilizo el arnes?</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fecha última inspección en ruta</label>
                <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Ultima verificación de la aeronave</label>
                <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
        </div>
        <div class="bg-blue-50 border border-blue-200 rounded-md p-4" role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-800 font-semibold">
                        Nota:
                    </h3>
                    <div class="mt-2 text-md text-gray-600">
                        Anexar copia fotostatica legible de la licencia, hojas de bitácora y certificaciones.
                    </div>
                    <form>
                        <label for="small-file-input" class="sr-only">Choose file</label>
                        <input type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                  file:bg-transparent file:border-0
                  file:bg-gray-200 file:mr-4
                  file:py-2 file:px-4
                  dark:file:bg-gray-700 dark:file:text-gray-400">
                    </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col py-4">
            <p class="px-1 text-lg  whitespace-no-wrap font-bold">B. COPILOTO</p>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div class="col-span-2">
                <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Nacionalidad</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fecha de nacimiento</label>
                <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
            <div class="col-span-2">
                <label for="" class="block text-lg mb-2 dark:text-white">Domicilio</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="flex flex-col py-0">
            <p class="px-1 text-base whitespace-no-wrap font-semibold">LICENCIA</p>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Clase</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Número</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Vigencia</label>
                <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
        </div>
        <div class="flex flex-col">
            <div class="m-1 overflow-x-auto">
                <div class="px-1 py-2 min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Horas de vuelo</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Todas las aeronaves</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Aeronave acccidentada</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">multimotor</th>
                                    <th scope="col" colspan="2" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">instrumentos</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Piloto al mando</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Instructor</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Copiloto</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimos 90 dias</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimos 30 dias</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimas 24 horas </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Capacidades</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Certificado médico número</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Limitaciones del certificado</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Excepción al certificado</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Observaciones</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            {{--APARECER EN CASO DE SELECCIONAR OTRO--}}
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Otro</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Asiento ocupado</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Lesión</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Desempeña funciones de</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Utilizo el cinturón de seguridad?</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Utilizo el arnes?</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fecha última inspección en ruta</label>
                <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Ultima verificación de la aeronave</label>
                <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
        </div>
        <div class="bg-blue-50 border border-blue-200 rounded-md p-4" role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-800 font-semibold">
                        Nota:
                    </h3>
                    <div class="mt-2 text-md text-gray-600">
                        Anexar copia fotostatica legible de la licencia, hojas de bitácora y certificaciones.
                    </div>
                    <form>
                        <label for="small-file-input" class="sr-only">Choose file</label>
                        <input type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                  file:bg-transparent file:border-0
                  file:bg-gray-200 file:mr-4
                  file:py-2 file:px-4
                  dark:file:bg-gray-700 dark:file:text-gray-400">
                    </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col py-4">
            <p class="px-1 text-lg  whitespace-no-wrap font-bold">C. INSTRUCTOR/COPILOTO/ESTUDIANTE/OTRO</p>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div class="col-span-2">
                <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Nacionalidad</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fecha de nacimiento</label>
                <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
            <div class="col-span-2">
                <label for="" class="block text-lg mb-2 dark:text-white">Domicilio</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="flex flex-col py-0">
            <p class="px-1 text-base whitespace-no-wrap font-semibold">LICENCIA</p>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Clase</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Número</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Vigencia</label>
                <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
        </div>
        <div class="flex flex-col">
            <div class="m-1 overflow-x-auto">
                <div class="px-1 py-2 min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Horas de vuelo</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Todas las aeronaves</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Aeronave acccidentada</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">multimotor</th>
                                    <th scope="col" colspan="2" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">instrumentos</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Piloto al mando</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Instructor</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Copiloto</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimos 90 dias</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimos 30 dias</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimas 24 horas </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Capacidades</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Certificado médico número</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Limitaciones del certificado</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Excepción al certificado</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Observaciones</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            {{--APARECER EN CASO DE SELECCIONAR OTRO--}}
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Otro</label>
                <input type="text"  wire:model=""
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Asiento ocupado</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Lesión</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Desempeña funciones de</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Utilizo el cinturón de seguridad?</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Utilizo el arnes?</label>
                <x-select class="w-full">
                    <x-select.option label="" value="" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fecha última inspección en ruta</label>
                <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Ultima verificación de la aeronave</label>
                <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
        </div>
        <div class="bg-blue-50 border border-blue-200 rounded-md p-4" role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-800 font-semibold">
                        Nota:
                    </h3>
                    <div class="mt-2 text-md text-gray-600">
                        Anexar copia fotostatica legible de la licencia, hojas de bitácora y certificaciones.
                    </div>
                    <form>
                        <label for="small-file-input" class="sr-only">Choose file</label>
                        <input type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                  file:bg-transparent file:border-0
                  file:bg-gray-200 file:mr-4
                  file:py-2 file:px-4
                  dark:file:bg-gray-700 dark:file:text-gray-400">
                    </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col py-2">
            <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                    PASAJERO(S) / OTRO PERSONAL (INCLUIR SOBRECARGOS Y MECANICOS A BORDO) </h1>
            </div>
                revisar el pdf para determinar como se ingresara
        </div>
        <div class="flex flex-col py-2">
            <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                    DESCRIPCIÓN DE LA HISTORIA DEL VUELO </h1>
            </div>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Describa como se suscitarion los hechos en un orden cronológico, incluyendo las circustancias que derivaron en el suceso. Explique las condiciones del terreno, condiciones meteorologicas e incluya un bosquejo de la distribución de los restos de la aeronave,señale la hora  y punto del despegue, destino previsto y servicios obtenidos</label>
                <div class="md:flex col-span-8">
                    <textarea name="" id="" cols="30" rows="10" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresa..."></textarea>
                </div>
            </div>
        </div>
        <div class="bg-blue-50 border border-blue-200 rounded-md p-4" role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-800 font-semibold">
                        Nota:
                    </h3>
                    <div class="mt-2 text-md text-gray-600">
                        En caso de una aeronave de linea aérea, adjuntar lista de pasajeros.
                    </div>
                    <form>
                        <label for="small-file-input" class="sr-only">Choose file</label>
                        <input type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                  file:bg-transparent file:border-0
                  file:bg-gray-200 file:mr-4
                  file:py-2 file:px-4
                  dark:file:bg-gray-700 dark:file:text-gray-400">
                    </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col py-2">
            <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                    RECOMENDACIONES (¿DE ACUERDO CON SUS CONOCIMIENTOS, CÓMO PUDO HABERSE PREVENIDO ESTE SUCESO?)</h1>
            </div>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Recomendación de seguridad operacional al Operador/Propietario</label>
                <div class="md:flex col-span-8">
                    <textarea name="" id="" cols="30" rows="10" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresa..."></textarea>
                </div>
            </div>
        </div>
        <div class="bg-blue-50 border border-blue-200 rounded-md p-4" role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-gray-800 font-semibold">
                        Nota:
                    </h3>
                    <div class="mt-2 text-md text-gray-600">
                        Adjuntar fotocopias de los procesos, procedimientos que son susceptibles de mejora.
                    </div>
                    <form>
                        <label for="small-file-input" class="sr-only">Choose file</label>
                        <input type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                  file:bg-transparent file:border-0
                  file:bg-gray-200 file:mr-4
                  file:py-2 file:px-4
                  dark:file:bg-gray-700 dark:file:text-gray-400">
                    </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col py-2">
            <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                    INFORMACIÓN ADICIONAL (USAR ESTE ESPACIO SI REQUIERE EXPLICAR ALGUNA RESPUESTA O AMPLIAR SU DECLARACIÓN)</h1>
            </div>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
            <div>
                <div class="md:flex col-span-8">
                    <textarea name="" id="" cols="30" rows="10" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresa..."></textarea>
                </div>
            </div>
        </div>
        <div class="py-12 mb-2 text-right">
            <x-button wire:click.prevent="" icon="document-download" spinner="" blue
                label="GENERAR REPORTE" />
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