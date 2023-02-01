<div>
    <section class="bg-gray-50 dark:bg-gray-900 py-12">
        <div class="container px-6 py-10 py-6 mx-auto content-center">
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
                                <x-select.option label="ACCIDENTE" value="ACCIDENTE" />
                                <x-select.option label="INCIDENTE" value="INCIDENTE" />                                                                                               
                        </x-select>
                    </div>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
                
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Lugar exacto</label>
                    <input type="text" wire:model="exactPlace" 
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresa al Propetario">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Estado</label>
                    <x-native-select class="w-full" placeholder="Selecciona" wire:model="state_id">
                        <option value="">SELECCIONE...</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </x-native-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Municipio</label>
                    <x-native-select class="w-full" placeholder="Selecciona" wire:model="municipal_id">
                        <option value="">SELECCIONE...</option>
                        @foreach ($municipals as $municipal)                        
                        <option value="{{$municipal->id}}" >{{$municipal->name}}</option>
                        @endforeach
                    </x-native-select>
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Ciudad o población más cercana</label>
                    <input type="text" wire:model="city" 
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
                    <input type="text" wire:model="latitude"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Longitud</label>
                    <input type="text"  wire:model="longitude"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fecha</label>
                    <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" wire:model.defer="date" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Hora</label>
                    <x-time-picker placeholder="00:00" format="24" class="w-full px-2 py-2" wire:model.defer="time" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Autoridad Aeronáutica que interviene</label>
                    <input type="text"  wire:model="aeronauticalAuthority"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-0 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fases de vuelo</label>
                    <x-select class="w-full" wire:model="flight_phase" >
                        <x-select.option label="ESTACIONADA" value="ESTACIONADA"/>  
                        <x-select.option label="REMOLQUE" value="REMOLQUE"/>  
                        <x-select.option label="RODAJE" value="RODAJE"/>  
                        <x-select.option label="DESPEGUE (INCLUYE EL ASCENSO INICIAL)" value="DESPEGUE (INCLUYE EL ASCENSO INICIAL)"/>  
                        <x-select.option label="ASCENSO" value="ASCENSO"/>  
                        <x-select.option label="CRUCERO" value="CRUCERO"/>  
                        <x-select.option label="DESCENSO" value="DESCENSO"/>  
                        <x-select.option label="APROXIMACIÓN" value="APROXIMACIÓN"/>  
                        <x-select.option label="ATERRIZAJE" value="ATERRIZAJE"/>  
                        <x-select.option label="MANIOBRAS" value="MANIOBRAS"/>  
                        <x-select.option label="OTRA" value="OTRA"/>                          
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTRO --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Indique</label>
                    <input type="text"  wire:model="indicate"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Colisión con otra aeronave</label>
                    <x-select class="w-full" wire:model="collision">
                        <x-select.option label="NO" value="NO" />
                        <x-select.option label="EN TIERRA" value="EN TIERRA" /> 
                        <x-select.option label="EN VUELO" value="EN VUELO" />                                                           
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Altitud a la que ocurrió el suceso</label>
                    <input type="text"  wire:model="altitudeEvent"
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
                    <input type="text"  wire:model="maker"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Modelo</label>
                    <input type="text"  wire:model="modelReport"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Número de Serie</label>
                    <input type="text"  wire:model="serialNumber"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Matrícula</label>
                    <input type="text"  wire:model="enrollment"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Amateur</label>
                    <x-select class="px-2 py-0 w-full" wire:model="amateur">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Peso Máximo del despegue</label>
                    <input type="text"  wire:model="maximumWeight"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Peso al momento del accidente</label>
                    <input type="text"  wire:model="accidentWeight"
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
                    <x-input class="px-2 py-2 w-full" wire:model="nose" placeholder="Ingresa..." suffix="pulg." />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">datum</label>
                    <x-input class="px-2 py-2 w-full" wire:model="datum" placeholder="Ingresa..." suffix="pulg." />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">nariz</label>
                    <x-input class="px-2 py-2 w-full" wire:model="noseI" placeholder="Ingresa..." suffix="%CAM" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">datum</label>
                    <x-input class="px-2 py-2 w-full" wire:model="datumI" placeholder="Ingresa..." suffix="%CAM" />
                </div>
            </div>
            <div class="px-1 py-0 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Categoría de aeronave</label>
                    <x-select class="w-full" wire:model="aircraftCategory">
                        <x-select.option label="AEROPLANO" value="AEROPLANO" />
                        <x-select.option label="GLOBO" value="GLOBO" />
                        <x-select.option label="DIRIGIBLE" value="DIRIGIBLE" />
                        <x-select.option label="PLANEADOR" value="PLANEADOR" />
                        <x-select.option label="GIROPLANO" value="GIROPLANO" />
                        <x-select.option label="HELICÓPTERO" value="HELICÓPTERO" />
                        <x-select.option label="ULTRALIGERO" value="ULTRALIGERO" />
                        <x-select.option label="AMFIBIO" value="AMFIBIO" />
                        <x-select.option label="NO TRIPULADO" value="NO TRIPULADO" />
                        <x-select.option label="DESCONOCIDO" value="DESCONOCIDO" />
                        <x-select.option label="OTRO" value="OTRO" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTRO --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Indique</label>
                    <input type="text"  wire:model="indicateI"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-0 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Categoría de certificado de aeronavegabilidad</label>
                    <x-select class="w-full" wire:model="airworthiness">
                        <x-select.option label="ESTANDARD" value="ESTANDARD" />
                        <x-select.option label="NORMAL" value="NORMAL" />
                        <x-select.option label="UTILITARIA" value="UTILITARIA" />
                        <x-select.option label="ACROBÁTICA" value="ACROBÁTICA" />
                        <x-select.option label="TRANSPORTE" value="TRANSPORTE" />
                        <x-select.option label="ESPECIAL" value="ESPECIAL" />
                        <x-select.option label="RESTRINGIDO" value="RESTRINGIDO" />
                        <x-select.option label="LIMITADA" value="LIMITADA" />
                        <x-select.option label="PROVISIONAL" value="PROVISIONAL" />
                        <x-select.option label="EXPERIMENTAL" value="EXPERIMENTAL" />
                        <x-select.option label="TRASLADO" value="TRASLADO" />
                        <x-select.option label="OTRO" value="OTRO" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTRO --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Indique</label>
                    <input type="text"  wire:model="indicateII"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-0 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Número de asientos</label>
                    <input type="text"  wire:model="numberSeats"
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
                    <input type="text"  wire:model="flightCrew"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Asientos para tripulación de cabina</label>
                    <input type="text"  wire:model="cabinCrew"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Asientos para pasajeros</label>
                    <input type="text"  wire:model="passengerSeats"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Tren de aterrizaje</label>
                    <x-select class="w-full" wire:model="undercarriage">
                    <x-select.option label="FIJO" value="FIJO" />    
                    <x-select.option label="RETRACTIL" value="RETRACTIL" />    
                    <x-select.option label="PATIN DE COLA" value="PATIN DE COLA" />    
                    <x-select.option label="FLOTADORES" value="FLOTADORES" />    
                    <x-select.option label="SKID" value="SKID" />    
                    <x-select.option label="SKID/RUEDAS" value="SKID/RUEDAS" />    
                    <x-select.option label="DESCONOCIDO" value="DESCONOCIDO" />                            
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Programa de mantenimiento</label>
                    <x-select class="w-full" wire:model="MaintenanceProgram">
                    <x-select.option label="ANUAL" value="ANUAL" />
                    <x-select.option label="CONDICIONAL (CONSTRUCCIÓN AMATEUR SOLAMENTE)" value="CONDICIONAL (CONSTRUCCIÓN AMATEUR SOLAMENTE)" />
                    <x-select.option label="PROGRAMA DE INSPECCIÓN DEL FABRICANTE" value="PROGRAMA DE INSPECCIÓN DEL FABRICANTE" />
                    <x-select.option label="OTRO PROGRAMA DE INSPECCIÓN APROBADO" value="OTRO PROGRAMA DE INSPECCIÓN APROBADO" />
                    <x-select.option label="AERONAVEGABILIDAD CONTINUADA" value="AERONAVEGABILIDAD CONTINUADA" />
                    <x-select.option label="OTRO" value="OTRO" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTRO --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">especifique</label>
                    <input type="text"  wire:model="specify"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Última inspección</label>
                    <x-select class="w-full" wire:model="lastInspection">
                    <x-select.option label="100 HORAS" value="100 HORAS" />
                    <x-select.option label="PROGRAMA DE INSPECCIÓN APROBADO" value="PROGRAMA DE INSPECCIÓN APROBADO" />
                    <x-select.option label="INSPECCIONES CONDICIONADAS" value="INSPECCIONES CONDICIONADAS" />
                    <x-select.option label="AERONAVEGABILIDAD CONTINUADA" value="AERONAVEGABILIDAD CONTINUADA" />
                    <x-select.option label="ANUA" value="ANUA" />
                    <x-select.option label="DESCONOCIDO" value="DESCONOCIDO" />
                    <x-select.option label="OTRO" value="OTRO" />                        
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTRO --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Otro</label>
                    <input type="text"  wire:model="other"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div> 
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fecha de la última inspección</label>
                    <x-datetime-picker class="w-full px-2 py-2" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" wire:model.defer="lastInspectionDate" />
                </div> 
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Horas totales del planeador</label>
                    <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="hrs." wire:model.defer="gliderHours" />
                </div> 
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Horas desde la última inspección</label>
                    <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="hrs." wire:model.defer="hoursLastInsp" />
                </div> 
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Horas al momento del accidente</label>
                    <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="hrs." wire:model.defer="hoursTimeAccident" />
                </div> 
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Contaba con equipo IFR</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="ifrTeam">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                    </x-select>
                </div> 
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Sistema de aviso de desplome:</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="collapseSystem">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Sistema de extinción de fuego</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="fireSystem">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                    </x-select>
                </div> 
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">tipo</label>
                    <input type="text"  wire:model="type"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">ELT instalado</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="eltInstalled">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">ELT activado</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="eltActivated">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div class="col-span-2">
                    <label for="" class="block text-lg mb-2 dark:text-white">Fabricante del ELT</label>
                    <input type="text"  wire:model="eltManufacturer"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div class="col-span-1">
                    <label for="" class="block text-lg mb-2 dark:text-white">Modelo</label>
                    <input type="text"  wire:model="eltModel"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-4 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Serie</label>
                    <input type="text"  wire:model="eltSerial"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Batería</label>
                    <input type="text"  wire:model="eltBattery"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Tipo de motor</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="engineType">
                        <x-select.option label="RECIPROCO" value="RECIPROCO"/>    
                        <x-select.option label="TURBO EJE" value="TURBO EJE"/>    
                        <x-select.option label="TURBO PROP" value="TURBO PROP"/>    
                        <x-select.option label="TURBO FAN" value="TURBO FAN"/>    
                        <x-select.option label="TURBO JET" value="TURBO JET"/>    
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Sistema de combustible motor recíproco</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="reciprocatingSystem">
                        <x-select.option label="CARBURADOR" value="CARBURADOR" />
                        <x-select.option label="INYECCIÓN" value="INYECCIÓN" />
                    </x-select>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-1 text-lg py-2 font-semibold whitespace-no-wrap">Hélice:</p>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fabricante</label>
                    <input type="text"  wire:model="makerPropeller"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Modelo</label>
                    <input type="text"  wire:model="modelPropeller"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Paso</label>
                    <x-select class="px-2 py-0 w-full" wire:model="pitchPropeller">
                        <x-select.option label="FIJO" value="FIJO" />
                        <x-select.option label="VARIABLE" value="VARIABLE" />
                    </x-select>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-1 text-lg py-2 font-semibold whitespace-no-wrap">Motor:</p>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fabricante</label>
                    <input type="text"  wire:model="manufacturerEngine"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Modelo</label>
                    <input type="text"  wire:model="modelEngine"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Potencia</label>
                    <input type="text"  wire:model="powerEngine"
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
                                                placeholder="Ingresar..." wire:model="engineSerie1"></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            <x-datetime-picker wire:model="manufacturingDate1" class="md:w-60 w-full px-2 py-2" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" wire:model="totalTime1" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" wire:model="lastIspection1" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" wire:model="lastRrepair1" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Pos 2</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                                placeholder="Ingresar..." wire:model="engineSerie2"></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            <x-datetime-picker wire:model="manufacturingDate2" class="md:w-60 w-full px-2 py-2" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" wire:model="totalTime2" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" wire:model="lastIspection2" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" wire:model="lastRrepair2" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Pos 3</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                                placeholder="Ingresar..." wire:model="engineSerie3"></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            <x-datetime-picker wire:model="manufacturingDate3" class="md:w-60 w-full px-2 py-2" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" wire:model="totalTime3" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" wire:model="lastIspection3" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" wire:model="lastRrepair3" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Pos 4</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><input type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                                placeholder="Ingresar..." wire:model="engineSerie4"></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            <x-datetime-picker wire:model="manufacturingDate4" class="md:w-60 w-full px-2 py-2" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" wire:model="totalTime4" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" wire:model="lastIspection4" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <input type="text" wire:model="lastRrepair4" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
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
                                        <input  wire:model="copyRevalidation" type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
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
                    <input type="text"  wire:model="nameOwner1"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Dirección</label>
                    <div class="md:flex col-span-8">
                        <textarea name="" id="" cols="30" rows="2" type="text" wire:model="directionOwner1" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-1 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
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
                    <input type="text"  wire:model="nameOperator1"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Dirección</label>
                    <div class="md:flex col-span-8">
                        <textarea name="" id="" cols="30" rows="2" type="text" wire:model="directionOperator1" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-1 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa..."></textarea>
                    </div>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Propósito del vuelo:</label>
                    <x-select class="px-2 py-0 w-full" placeholder="Selecciona" wire:model="flightPurpose">
                        <x-select.option label="PERSONAL" value="PERSONAL"/>
                        <x-select.option label="NEGOCIOS" value="NEGOCIOS"/>
                        <x-select.option label="EJECUTIVO/CORPORATIVO" value="EJECUTIVO/CORPORATIVO"/>
                        <x-select.option label="OTRO" value="OTRO"/>
                        <x-select.option label="INSTRUCCIÓN" value="INSTRUCCIÓN"/>
                        <x-select.option label="FERRY" value="FERRY"/>
                        <x-select.option label="FUMIGACIÓN" value="FUMIGACIÓN"/>
                        <x-select.option label="OBSERVACIÓN" value="OBSERVACIÓN"/>
                        <x-select.option label="SHOW AÉREO" value="SHOW AÉREO"/>
                        <x-select.option label="VUELO DE PRUEBA" value="VUELO DE PRUEBA"/>
                        <x-select.option label="USO PUBLICO" value="USO PUBLICO"/>    
                    </x-select>                  
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Operación:</label>
                    <x-select class="px-2 py-0 w-full" placeholder="Selecciona" wire:model="operation">
                        <x-select.option label="ITINERARIO" value="ITINERARIO" />
                        <x-select.option label="SIN ITINERARIO" value="SIN ITINERARIO" />
                        <x-select.option label="TAXI AÉREO" value="TAXI AÉREO" />
                        <x-select.option label="REGULAR" value="REGULAR" />
                        <x-select.option label="NO REGULAR" value="NO REGULAR" />
                        <x-select.option label="NACIONAL" value="NACIONAL" />
                        <x-select.option label="INTERNACIONAL" value="INTERNACIONAL" />                        
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Operación de carga</label>
                    <x-select class="px-2 py-0 w-full" placeholder="Selecciona" wire:model="loadOperation">
                        <x-select.option label="PASAJEROS" value="PASAJEROS" />
                        <x-select.option label="CARGA" value="CARGA" />
                        <x-select.option label="CORREO" value="CORREO" />
                    </x-select>
                </div>
                 {{-- Si se selecciona pasajeros aparece--}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Pasajeros cuantos</label>
                    <input type="text"  wire:model="passengersHow"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Tipo de concesión/permiso</label>
                    <x-select class="px-2 py-0 w-full" placeholder="Selecciona" wire:model="concessionType">
                        <x-select.option label="NO TIENE" value="NO TIENE" />
                        <x-select.option label="CARGA AÉREA" value="CARGA AÉREA" />
                        <x-select.option label="NACIONAL REGULAR" value="NACIONAL REGULAR" />
                        <x-select.option label="TAXI AÉREO" value="TAXI AÉREO" />
                        <x-select.option label="CARGA EXTERNA" value="CARGA EXTERNA" />
                        <x-select.option label="FUMIGACIÓN" value="FUMIGACIÓN" />
                        <x-select.option label="INTERNACIONAL REGULAR" value="INTERNACIONAL REGULAR" />
                        <x-select.option label="PRIVADO COMERCIAL" value="PRIVADO COMERCIAL" />
                        <x-select.option label="SERVICIO AÉREO ESPECIALIZADO" value="SERVICIO AÉREO ESPECIALIZADO" />
                        <x-select.option label="OTRO" value="OTRO" />                        
                    </x-select>
                </div>
                {{-- Si se aparece al seleccionar otros--}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Otros</label>
                    <input type="text"  wire:model="others"
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
                            <input wire:model="filesPermissions" type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
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
                    <input type="text"  wire:model="tuitionInvolved"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fabricante</label>
                    <input type="text"  wire:model="makerInvolved"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">modelo</label>
                    <input type="text"  wire:model="modelInvolved"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Daños</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="damageInvolved">
                        <x-select.option label="DESTRUIDA" value="DESTRUIDA" />
                        <x-select.option label="MAYORES" value="MAYORES" />
                        <x-select.option label="MENORES" value="MENORES" />
                        <x-select.option label="SIN DAÑOS" value="SIN DAÑOS" />
                    </x-select>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <p class="px-1 text-lg py-2 font-semibold whitespace-no-wrap">Propietario:</p>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                    <input type="text"  wire:model="nameOwner2"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Dirección</label>
                    <div class="md:flex col-span-8">
                        <textarea name="" id="" cols="30" rows="2" type="text" wire:model="directionOwner2" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-1 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
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
                    <input type="text"  wire:model="nameOperator2"
                    class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Dirección</label>
                    <div class="md:flex col-span-8">
                        <textarea name="" id="" cols="30" rows="2" type="text" wire:model="directionOperator2" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
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
                <x-radio class="text-lg" id="fallas1" name="fallas" left-label="SI" value="SI" wire:model="malfunction" />
            </div>
            <div class="md:flex py-2">
                <x-radio class="text-lg" id="fallas2" name="fallas" left-label="NO" value="NO" wire:model="malfunction" />
            </div>
            <div class="md:flex py-2">
                <x-radio class="text-lg" id="fallas3" name="fallas" left-label="DESCONOCIDO" value="DESCONOCIDO" wire:model="malfunction" />
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
            <div class="">
                <label for="" class="block text-lg mb-2 dark:text-white">Si hubo, asiente el nombre de la parte, fabricante,número de parte y serie, decriba la falla</label>
                <textarea name="" id="" cols="30" rows="4" type="text" wire:model="descriptionFail" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresa..."></textarea>
            </div>
        </div>
        <div class="flex flex-col py-0">
            <p class="px-1 text-lg py-2 whitespace-no-wrap">Tiempo total / Ciclos totales de la parte o componente:</p>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-8">
            <div class="md:flex col-span-2">
                <x-input class="w-full" wire:model="componentHours" placeholder="Ingresa..." suffix="horas." />
            </div>
            <div class="md:flex col-span-2">
                <x-input class=" w-full" wire:model="componentCycles" placeholder="Ingresa..." suffix="ciclos." />
            </div>
        </div>
        <div class="flex flex-col py-0">
            <p class="px-1 text-lg py-2 whitespace-no-wrap">Tiempo desde nuevo / Ultima inspección / Overthaled de la parte o componente:</p>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-8">
            <div class="md:flex col-span-4">
                <x-input class="w-full" wire:model="lastInspection" placeholder="Ingresa..." suffix="horas." />
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
                        <input wire:model="filesLatestservices" type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
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
                <x-select class="" placeholder="Selecciona" wire:model="a_model_id">
                    @foreach ($models as $model)
                    <x-select.option label="{{$model->name}}" value="{{$model->id}}" />                        
                    @endforeach
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Presencia de fuego</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="presenceFire">
                    <x-select.option label="NO HUBO" value="NO HUBO" />
                    <x-select.option label="EN VUELO" value="EN VUELO" />
                    <x-select.option label="EN TIERRA" value="EN TIERRA" />
                    <x-select.option label="EN AMBOS" value="EN AMBOS" />
                    <x-select.option label="ORIGEN DESCONOCIDO" value="ORIGEN DESCONOCIDO" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Exploción</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="explosion">
                    <x-select.option label="NO HUBO" value="NO HUBO" />
                    <x-select.option label="EN VUELO" value="EN VUELO" />
                    <x-select.option label="EN TIERRA" value="EN TIERRA" />
                    <x-select.option label="EN AMBOS" value="EN AMBOS" />
                    <x-select.option label="ORIGEN DESCONOCIDO" value="ORIGEN DESCONOCIDO" />   
                </x-select>
            </div>
        </div>
        <div class="flex flex-col py-0">
            <p class="px-1 text-lg py-2 whitespace-no-wrap">Describa los daños de la aeronave y a terceros</p>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
            <div class="md:flex">
                <textarea name="" id="" cols="30" rows="6" type="text" wire:model="describeDamage" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
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
                <input type="text"  wire:model="identificationOACI"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div class="col-span-2">
                <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                <input type="text"  wire:model="nameAerodrome"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div class="col-span-1">
                <label for="" class="block text-lg mb-2 dark:text-white">Distancia al centro del aeródromo</label>
                <x-input class="w-full" wire:model="distanceAerodrome" placeholder="Ingresa..." suffix="SM" />
            </div>
            <div class="col-span-1">
                <label for="" class="block text-lg mb-2 dark:text-white">Dirección al aerodromo</label>
                <x-input class="w-full" wire:model="directionAerodrome" placeholder="Ingresa..." suffix="grados magneticos."/> 
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div class="col-span-1">
                <label for="" class="block text-lg mb-2 dark:text-white">Elevación</label>
                <x-input class="w-full" wire:model="elevation" placeholder="Ingresa..." suffix="m."/> 
            </div>
            <div class="col-span-1">
                <label for="" class="block text-lg mb-2 dark:text-white">Proximidad al aeropuerto</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="proximityAirport">
                    <x-select.option label="FUERA DEL AEROPUERTO" value="FUERA DEL AEROPUERTO" />
                    <x-select.option label="EN EL AEROPUERTO" value="EN EL AEROPUERTO" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Segmento de aproximación</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="approachSegment">
                    <x-select.option label="APROXIMACION POR INSTRUMENTOS" value="APROXIMACION POR INSTRUMENTOS" />
                    <x-select.option label="ATERRIZAJE" value="ATERRIZAJE" />
                    <x-select.option label="TRAMO BÁSICO" value="TRAMO BÁSICO" />
                    <x-select.option label="TRAMO FINA" value="TRAMO FINA" />
                    <x-select.option label="IDA AL AIRE" value="IDA AL AIRE" />
                    <x-select.option label="TRAMO DE VIENTO CRUZADO" value="TRAMO DE VIENTO CRUZADO" />
                    <x-select.option label="TRAMO A FAVOR DEL VIENTO" value="TRAMO A FAVOR DEL VIENTO" />
                    <x-select.option label="APROXIMACIÓN BAJA" value="APROXIMACIÓN BAJA" />
                    <x-select.option label="DESCONTINUACIÓN DEL ATERRIZAJE (DESPUÉS DEL TOQUE CON LA PISTA)" value="DESCONTINUACIÓN DEL ATERRIZAJE (DESPUÉS DEL TOQUE CON LA PISTA)" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Aproximación IFR</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="approachIFR">
                        <x-select.option label="NO" value="NO" />
                        <x-select.option label="ADF/NDB" value="ADF/NDB" />
                        <x-select.option label="SDF1" value="SDF1" />
                        <x-select.option label="VOR/DME" value="VOR/DME" />
                        <x-select.option label="ILS" value="ILS" />
                        <x-select.option label="LOCALIZADOR SOLAMENTE" value="LOCALIZADOR SOLAMENTE" />
                        <x-select.option label="RNAV" value="RNAV" />
                        <x-select.option label="LDA" value="LDA" />
                        <x-select.option label="VISUAL" value="VISUAL" />
                        <x-select.option label="CIRCUITO" value="CIRCUITO" />
                        <x-select.option label="PRACTICA" value="PRACTICA" />
                        <x-select.option label="GPS" value="GPS" />
                        <x-select.option label="LORAN" value="LORAN" />
                        <x-select.option label="SE DESCONOCE" value="SE DESCONOCE" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Aproximación VFR</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="approachVFR">
                    <x-select.option label="NO" value="NO" />
                    <x-select.option label="PATRÓN DE TRAFICO" value="PATRÓN DE TRAFICO" />
                    <x-select.option label="DIRECTO" value="DIRECTO" />
                    <x-select.option label="IDA AL AIRE" value="IDA AL AIRE" />
                    <x-select.option label="TOQUES Y DESPEGUES" value="TOQUES Y DESPEGUES" />
                    <x-select.option label="ATERRIZAJE FORZOSO" value="ATERRIZAJE FORZOSO" />
                    <x-select.option label="ATERRIZAJE PRECAUTORIO" value="ATERRIZAJE PRECAUTORIO" />
                    <x-select.option label="SE DESCONOCE" value="SE DESCONOCE" />                    
                </x-select>
            </div>
        </div>
        <div class="px-1 py-0 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Cabecera de pista</label>
                <input type="text"  wire:model="trackHeader"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Longitud</label>
                <x-input class="px-2 py-2 w-full" wire:model="longitude2" placeholder="Ingresa..." suffix="m" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Ancho</label>
                <x-input class="px-2 py-2 w-full" wire:model="broad" placeholder="Ingresa..." suffix="m" />
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Material de la cabecera de la pista</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="materialHead">
                        <x-select.option label="ASFALTO" value="ASFALTO" />
                        <x-select.option label="CONCRETO" value="CONCRETO" />
                        <x-select.option label="PASTO/CESPED" value="PASTO/CESPED" />
                        <x-select.option label="GRAVA" value="GRAVA" />
                        <x-select.option label="AGUA" value="AGUA" />
                        <x-select.option label="TERRACERÍA" value="TERRACERÍA" />                    
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Condiciones de la superficie de la pista:</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="conditionsRunway">
                        <x-select.option label="SECO" value="SECO" />
                        <x-select.option label="CON AGUJEROS" value="CON AGUJEROS" />
                        <x-select.option label="DEPÓSITOS DE CAUCHO" value="DEPÓSITOS DE CAUCHO" />
                        <x-select.option label="FANGOSA" value="FANGOSA" />
                        <x-select.option label="NO COMPACTADA" value="NO COMPACTADA" />
                        <x-select.option label="VEGETACIÓN ALTA" value="VEGETACIÓN ALTA" />
                        <x-select.option label="HÚMEDA" value="HÚMEDA" />
                        <x-select.option label="SE DESCONOCE" value="SE DESCONOCE" />
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

                <x-input class="w-full" wire:model="lastTakeoff" placeholder="Ingresa..."/>
                
                {{-- <x-select class="w-full" placeholder="Selecciona" wire:model="lastTakeoff">
                    <x-select.option label="" value="" />                    
                </x-select> --}}

            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Hora de despegue</label>
                <input type="text"  wire:model="timeTakeoff"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Aeropuerto de destino</label>
                <x-input class="w-full" wire:model="destinationAirport" placeholder="Ingresa..."/>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Tipo de Plan de vuelo</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="planFlight">
                    <x-select.option label="NINGUNO" value="NINGUNO" />
                    <x-select.option label="COMPAÑÍA VFR" value="COMPAÑÍA VFR" />
                    <x-select.option label="VFR" value="VFR" />
                    <x-select.option label="VFR/IFR" value="VFR/IFR" />
                    <x-select.option label="IFR" value="IFR" />
                    <x-select.option label="SE DESCONOCE" value="SE DESCONOCE" />
                    <x-select.option label="ELECTRÓNICO" value="ELECTRÓNICO" />

                </x-select>
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">            
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Autorización de vuelo</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="clearanceFlight">
                    <x-select.option label="NINGUNO" value="NINGUNO" />
                    <x-select.option label="ESPECIAL VFR" value="ESPECIAL VFR" />
                    <x-select.option label="ESPECIAL IFR" value="ESPECIAL IFR" />
                    <x-select.option label="ASESORAMIENTO" value="ASESORAMIENTO" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Espacio aéreo donde ocurrió el suceso</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="eventOccurred">
                    <x-select.option label="CLASE A" value="CLASE A" />
                    <x-select.option label="CLASE B" value="CLASE B" />
                    <x-select.option label="CLASE C" value="CLASE C" />
                    <x-select.option label="CLASE D" value="CLASE D" />
                    <x-select.option label="CLASE E" value="CLASE E" />
                    <x-select.option label="CLASE G" value="CLASE G" />
                    <x-select.option label="AREA PROHIBIDA" value="AREA PROHIBIDA" />
                    <x-select.option label="AREA RESTRINGIDA" value="AREA RESTRINGIDA" />
                    <x-select.option label="OPERACIONES MILITARES" value="OPERACIONES MILITARES" />
                    <x-select.option label="ESPECIAL" value="ESPECIAL" />
                    <x-select.option label="AREA DE CONTROL DE TRÁFICO AÉREO" value="AREA DE CONTROL DE TRÁFICO AÉREO" />
                    <x-select.option label="AREA DE ASESORAMIENTO AEROPORTUARIO" value="AREA DE ASESORAMIENTO AEROPORTUARIO" />
                    <x-select.option label="OTRO" value="OTRO" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Carga de la aeronave</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="loadAircraft">
                    <x-select.option label="NO LLEVABA" value="NO LLEVABA" />
                    <x-select.option label="PASAJEROS" value="PASAJEROS" />
                    <x-select.option label="CARGO" value="CARGO" />
                    <x-select.option label="OTRO" value="OTRO" />
                </x-select>
            </div>
            {{-- aparece al seleccionar otros --}}
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Otros</label>
                <input type="text"  wire:model="otherAircraft"
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
                <x-input class="px-2 py-2 w-full" wire:model="litersFuel" placeholder="Ingresa..." suffix="litros" />
            </div>
            <div class="md:flex col-span-3">
                <x-input class="px-2 py-2 w-full" wire:model="gallonsfuel" placeholder="Ingresa..." suffix="galones" />
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Tipo de combustible</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="typeFuel">
                    <x-select.option label="80/87" value="80/87" />
                    <x-select.option label="100/130" value="100/130" />
                    <x-select.option label="115/145" value="115/145" />
                    <x-select.option label="AUTOMOTRIZ" value="AUTOMOTRIZ" />
                    <x-select.option label="JET A" value="JET A" />
                    <x-select.option label="JP3" value="JP3" />
                    <x-select.option label="JP4" value="JP4" />
                    <x-select.option label="JP5" value="JP5" />
                    <x-select.option label="OTRO" value="OTRO" />                    
                </x-select>
            </div>
            {{-- APARECE AL SELECCIONAR OTRO--}}
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                <input type="text"  wire:model="specifyFuel"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>  
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
            <div class="">
                <label for="" class="block text-lg mb-2 dark:text-white">Otros servicio aeroportuario proporcionado en tierra, antes de la salida de la puerta de embarque</label>
                <textarea name="" id="" cols="30" rows="4" type="text" wire:model="otherService" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
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
                        <input wire:model="filereceiptFuel" type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
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
                <x-radio class="text-lg" id="evacuacion1" name="evacuacion" left-label="SI" value="SI" wire:model="evacuationAircraft" />
            </div>
            <div class="md:flex py-2">
                <x-radio class="text-lg" id="evacuacion2" name="evacuacion" left-label="NO" value="NO" wire:model="evacuationAircraft" />
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
            <div class="">
                <label for="" class="block text-lg mb-2 dark:text-white">Método de evacuación. Describa como los ocupantes abandonaron la aeronave y cuantos utilizaron cada salida de emergencia de la aeronave</label>
                <textarea name="" id="" cols="30" rows="4" type="text" wire:model="evacuationDescription" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
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
                        <input wire:model="fileProcedures" type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
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
                <input type="text"  wire:model="installationObservation"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div class="col-span-1">
                <label for="" class="block text-lg mb-2 dark:text-white">Hora de la observación</label>
                <input type="text"  wire:model="timeObservation"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Distancia del lugar del accidente</label>
                <x-input class="w-full" wire:model="distanceAccident" placeholder="Ingresa..." suffix="SM" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Dirección del lugar del accidente</label>
                <x-input class="w-full" wire:model="directionAccident" placeholder="Ingresa..." suffix="grados magneticos" />
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fuente de la información</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="sourceInformation">
                    <x-select.option label="SERVICIO METEOROLÓGICO NACIONAL" value="SERVICIO METEOROLÓGICO NACIONAL" />
                    <x-select.option label="ESTACIÓN DE INFORMACIÓN DE VUELO" value="ESTACIÓN DE INFORMACIÓN DE VUELO" />
                    <x-select.option label="TV/RADIO" value="TV/RADIO" />
                    <x-select.option label="COMPAÑÍA" value="COMPAÑÍA" />
                    <x-select.option label="INTERNET" value="INTERNET" />
                    <x-select.option label="SERVICIO METEOROLÓGICO COMERCIAL" value="SERVICIO METEOROLÓGICO COMERCIAL" />                    
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Información obtenida</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="obtainedInformation">
                    <x-select.option label="EN PERSONA" value="EN PERSONA" />
                    <x-select.option label="TELETIPO" value="TELETIPO" />
                    <x-select.option label="TV/RADIO" value="TV/RADIO" />
                    <x-select.option label="TELÉFONO / COMPUTADORA" value="TELÉFONO / COMPUTADORA" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Condiciones de la luz</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="lightConditions">
                <x-select.option label="AMANECER" value="AMANECER" />
                <x-select.option label="DÍA" value="DÍA" />
                <x-select.option label="NEBLINA" value="NEBLINA" />
                <x-select.option label="NOCHE" value="NOCHE" />
                <x-select.option label="NOCHE OBSCURA" value="NOCHE OBSCURA" />
                <x-select.option label="NOCHE ILUMINADA" value="NOCHE ILUMINADA" />
                <x-select.option label="NO REPORTADO" value="NO REPORTADO" />
                <x-select.option label="OTRO" value="OTRO" />                    
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Cielo/nubes</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="skyClouds">
                <x-select.option label="LIMPIO" value="LIMPIO" />
                <x-select.option label="POCAS NUBES" value="POCAS NUBES" />
                <x-select.option label="PARCIALMENTE OSCURECIDO" value="PARCIALMENTE OSCURECIDO" />
                <x-select.option label="NUBLADO" value="NUBLADO" />
                <x-select.option label="DISPERSO" value="DISPERSO" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Techo</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="ceiling">
                    <x-select.option label="CLARO" value="CLARO" />
                    <x-select.option label="OSCURECIDO" value="OSCURECIDO" />
                    <x-select.option label="INDEFINIDO" value="INDEFINIDO" />
                    <x-select.option label="NUBES BAJAS" value="NUBES BAJAS" />                    
                </x-select>
            </div>
            
            {{--Sale si se selecciona nubes bajas / condicion--}}
            <div>
                @if ($ceiling=='NUBES BAJAS')                    
                <label for="" class="block text-lg mb-2 dark:text-white">Altura más baja de la nube</label>
                <x-input class="w-full" wire:model="lowestCloud" placeholder="Ingresa..." suffix="a nivel del terreno" />
                @endif
            </div>


            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Restricción a la visibilidad</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="visibilityRestriction">
                    <x-select.option label="NINGUNA" value="NINGUNA" />
                    <x-select.option label="NIEBLA" value="NIEBLA" />
                    <x-select.option label="NIEBLA EN TIERRA" value="NIEBLA EN TIERRA" />
                    <x-select.option label="HUMO" value="HUMO" />
                    <x-select.option label="BRUMA" value="BRUMA" />
                    <x-select.option label="NUBOSIDAD" value="NUBOSIDAD" />                    
                </x-select>
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Viento</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="Wind">
                    <x-select.option label="CALMA" value="CALMA" />
                    <x-select.option label="VARIABLE" value="VARIABLE" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">a)Orientación</label>
                <input type="text"  wire:model="orientation"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">b)Intensidad</label>
                <input type="text"  wire:model="intensity"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Tipo de turbulencia</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="typeTurbulence">
                    <x-select.option label="NO" value="NO" />
                    <x-select.option label="AIRE CLARO" value="AIRE CLARO" />
                    <x-select.option label="EN NUBES" value="EN NUBES" /> 
                    <x-select.option label="CERCANÍAS A TORMENTA" value="CERCANÍAS A TORMENTA" />                                       
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Severidad de la turbulencia</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="severityTurbulence">
                    <x-select.option label="EXTREMA" value="EXTREMA" />
                    <x-select.option label="SEVERA" value="SEVERA" />
                    <x-select.option label="MODERADA" value="MODERADA" />
                    <x-select.option label="LIGERA" value="LIGERA" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Condiciones meteorológicas prevalecientes</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="weatherConditions">
                    <x-select.option label="IMC" value="IMC" />
                    <x-select.option label="VMC" value="VMC" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">NOTAM,AIRMETs,SIGMETs,PIREPs vigentes a la hora del accidente</label>
                <div class="md:flex col-span-8">
                    <textarea name="" id="" cols="30" rows="4" type="text" wire:model="currentTimeaccident" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresa..."></textarea>
                </div>
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Temperatura</label>
                <x-input class="px-2 py-2 w-full" wire:model="temperature" placeholder="Ingresa..." suffix="°C" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Altímetro</label>
                <x-input class="px-2 py-2 w-full" wire:model="altimeter" placeholder="Ingresa..." suffix="°C" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Altitud densidad</label>
                <x-input class="px-2 py-2 w-full" wire:model="altitudeDensity" placeholder="Ingresa..." suffix="°C" />
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Punto de roció</label>
                <x-input class="px-2 py-2 w-full" wire:model="DewPoint" placeholder="Ingresa..." suffix="°C" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Tipo de precipitación</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="precipitationType">
                    <x-select.option label="NINGUNA" value="NINGUNA" />
                    <x-select.option label="LLUVIA" value="LLUVIA" />
                    <x-select.option label="GRANIZO" value="GRANIZO" />
                    <x-select.option label="AGUACERO" value="AGUACERO" />
                    <x-select.option label="LLOVIZNA" value="LLOVIZNA" />
                    <x-select.option label="INTENSIDAD" value="INTENSIDAD" />
                    <x-select.option label="LIGERA" value="LIGERA" />
                    <x-select.option label="MODERADA" value="MODERADA" />
                    <x-select.option label="FUERTE" value="FUERTE" />                   
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
                        <input wire:modal="fileForecast" type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
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
                <input type="text"  wire:model="nameCommander"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Nacionalidad</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="nacionalities_id">
                @foreach ($nacionality as $nacionaliti)
                <x-select.option label="{{$nacionaliti->name}}" value="{{$nacionaliti->id}}" />
                @endforeach
                </x-select>
            
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fecha de nacimiento</label>
                <x-datetime-picker wire:model="datebirthCommander" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
            <div class="col-span-2">
                <label for="" class="block text-lg mb-2 dark:text-white">Domicilio</label>
                <input type="text"  wire:model="domicileCommander"
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

                <input type="text"  wire:model="classLicense"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">

                {{-- <x-select class="w-full" placeholder="Selecciona" wire:model="classLicense">
                    <x-select.option label="" value="" />
                </x-select> --}}
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Número</label>
                <input type="text"  wire:model="numberLicense"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Vigencia</label>
                <x-datetime-picker wire:model="validityLicense" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
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
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="pilotAircraft" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="pilotBumpy" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="pilotMultiengine" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="pilotInstruments" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Instructor</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="instructorAircraft" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="instructorRugged" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="instructorMultiengine" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="instructorInstruments" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Copiloto</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="copilotAircraft" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="copilotRugged" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="copilotMultiengine" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="copilotInstruments" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimos 90 dias</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="daysAircraft90" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="daysRugged90" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="daysMultiengine90" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="daysInstruments90" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimos 30 dias</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="daysAircraft30" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="daysRugged30" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="daysMultiengine30" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="daysInstruments30" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimas 24 horas </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="hoursAircraft24" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="hoursRugged24" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="hoursMultiengine24" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="hoursInstruments24" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
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
                <input type="text"  wire:model="capabilities"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Certificado médico número</label>
                <input type="text"  wire:model="medicalCertificate"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Limitaciones del certificado</label>
                <input type="text"  wire:model="limitationsCertificate"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Excepción al certificado</label>
                <input type="text"  wire:model="exceptionCertificate"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Observaciones</label>
                <x-select class="w-full" wire:model="observationsCertificate">
                    <x-select.option label="NINGUNO" value="NINGUNO" />
                    <x-select.option label="LENTES" value="LENTES" />
                    <x-select.option label="OTRO" value="OTRO" />
                </x-select>
            </div>
            {{--APARECER EN CASO DE SELECCIONAR OTRO--}}
            <div>
                @if ($observationsCertificate=='OTRO')
                <label for="" class="block text-lg mb-2 dark:text-white">Otro</label>
                <input type="text"  wire:model="otherCertificate"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">                    
                @endif
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Asiento ocupado</label>
                <x-select class="w-full" wire:model="occupiedSeat">                    
                    <x-select.option label="IZQUIERDO" value="IZQUIERDO" />
                    <x-select.option label="DERECHO" value="DERECHO" />
                    <x-select.option label="CENTRO" value="CENTRO" />
                    <x-select.option label="OTRO" value="OTRO" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Lesión</label>
                <x-select class="w-full" wire:model="injury">
                    <x-select.option label="FATAL" value="FATAL" />
                    <x-select.option label="GRAVE" value="GRAVE" />
                    <x-select.option label="LEVE" value="LEVE" />
                    <x-select.option label="ILESO" value="ILESO" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Desempeña funciones de</label>
                <x-select class="w-full" wire:model="performsFunctions">
                    <x-select.option label="PILOTO AL MANDO" value="PILOTO AL MANDO" />
                    <x-select.option label="PILOTO MONITOREANDO" value="PILOTO MONITOREANDO" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Utilizo el cinturón de seguridad?</label>
                <x-select class="w-full" wire:model="seatBelt">
                    <x-select.option label="SI" value="SI" />
                    <x-select.option label="NO" value="NO" />                    
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Utilizo el arnes?</label>
                <x-select class="w-full" wire:model="theHarness">
                    <x-select.option label="SI" value="SI" />
                    <x-select.option label="NO" value="NO" />                    
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fecha última inspección en ruta</label>
                <x-datetime-picker wire:model="inspectionDate" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Ultima verificación de la aeronave</label>
                <x-datetime-picker wire:model="verificationDate" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
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
                        <input type="file" wire:modal="fileLicense" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
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
                <input type="text"  wire:model="nameCopilot"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Nacionalidad</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="nationalitycopilot_id">
                @foreach ($nacionality as $nacionaliti)
                <x-select.option label="{{$nacionaliti->name}}" value="{{$nacionaliti->id}}" />
                @endforeach
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fecha de nacimiento</label>
                <x-datetime-picker wire:model="datebirthCopilot" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
            <div class="col-span-2">
                <label for="" class="block text-lg mb-2 dark:text-white">Domicilio</label>
                <input type="text"  wire:model="domicileCopilot"
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
                <input type="text"  wire:model="classLicense2"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Número</label>
                <input type="text"  wire:model="numberLicense2"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Vigencia</label>
                <x-datetime-picker wire:model="validityLicense2" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
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
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="pilotAircraft2" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="pilotBumpy2" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="pilotMultiengine2" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="pilotInstruments2" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Instructor</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="instructorAircraft2" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="instructorRugged2" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="instructorMultiengine2" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="instructorInstruments2" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Copiloto</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="copilotAircraft2" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="copilotRugged2" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="copilotMultiengine2" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="copilotInstruments2" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimos 90 dias</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="daysAircraft902" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="daysRugged902" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="daysMultiengine902" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="daysInstruments902" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimos 30 dias</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="daysAircraft302" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="daysRugged302" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="daysMultiengine302" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="daysInstruments302" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimas 24 horas </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="hoursAircraft242" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="hoursRugged242" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="hoursMultiengine242" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="hoursInstruments242" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
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
                <input type="text"  wire:model="capabilities2"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Certificado médico número</label>
                <input type="text"  wire:model="medicalCertificate2"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Limitaciones del certificado</label>
                <input type="text"  wire:model="limitationsCertificate2"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Excepción al certificado</label>
                <input type="text"  wire:model="exceptionCertificate2"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Observaciones</label>
                <x-select class="w-full" wire:model="observationsCertificate2">
                    <x-select.option label="NINGUNO" value="NINGUNO" />
                    <x-select.option label="LENTES" value="LENTES" />
                    <x-select.option label="OTRO" value="OTRO" />
                </x-select>

            </div>
            {{--APARECER EN CASO DE SELECCIONAR OTRO--}}
            <div>
                @if ($observationsCertificate2=='OTRO')
                <label for="" class="block text-lg mb-2 dark:text-white">Otro</label>
                <input type="text"  wire:model="otherCertificate2"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">                    
                @endif
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Asiento ocupado</label>
                <x-select class="w-full" wire:model="occupiedSeat2">                    
                    <x-select.option label="IZQUIERDO" value="IZQUIERDO" />
                    <x-select.option label="DERECHO" value="DERECHO" />
                    <x-select.option label="CENTRO" value="CENTRO" />
                    <x-select.option label="OTRO" value="OTRO" />
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Lesión</label>
                <x-select class="w-full" wire:model="injury2">
                    <x-select.option label="FATAL" value="FATAL" />
                    <x-select.option label="GRAVE" value="GRAVE" />
                    <x-select.option label="LEVE" value="LEVE" />
                    <x-select.option label="ILESO" value="ILESO" />
                </x-select>

            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Desempeña funciones de</label>
                <x-select class="w-full" wire:model="performsFunctions2">
                    <x-select.option label="PILOTO AL MANDO" value="PILOTO AL MANDO" />
                    <x-select.option label="PILOTO MONITOREANDO" value="PILOTO MONITOREANDO" />
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Utilizo el cinturón de seguridad?</label>
                <x-select class="w-full" wire:model="seatBelt2">
                    <x-select.option label="SI" value="SI" />
                    <x-select.option label="NO" value="NO" />                    
                </x-select>

            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Utilizo el arnes?</label>
                <x-select class="w-full" wire:model="theHarness2">
                    <x-select.option label="SI" value="SI" />
                    <x-select.option label="NO" value="NO" />                    
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fecha última inspección en ruta</label>
                <x-datetime-picker wire:model="inspectionDate2" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Ultima verificación de la aeronave</label>
                <x-datetime-picker wire:model="verificationDate2" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
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
                        <input type="file" wire:model="fileBinnacle" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
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
                <input type="text"  wire:model="nameOthers"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Nacionalidad</label>
                <x-select class="w-full" placeholder="Selecciona" wire:model="nationalityother_id">
                    @foreach ($nacionality as $nacionaliti)
                    <x-select.option label="{{$nacionaliti->name}}" value="{{$nacionaliti->id}}" />
                    @endforeach
                    </x-select>

            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fecha de nacimiento</label>
                <x-datetime-picker wire:model="datebirthOthers" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
            <div class="col-span-2">
                <label for="" class="block text-lg mb-2 dark:text-white">Domicilio</label>
                <input type="text"  wire:model="domicileOthers"
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
                <input type="text"  wire:model="classLicense3"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Número</label>
                <input type="text"  wire:model="numberLicense3"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Vigencia</label>
                <x-datetime-picker wire:model="validityLicense3" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
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
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="pilotAircraft3" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="pilotBumpy3" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="pilotMultiengine3" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="pilotInstruments3" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Instructor</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="instructorAircraft3" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="instructorRugged3" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="instructorMultiengine3" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="instructorInstruments3" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Copiloto</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="copilotAircraft3" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="copilotRugged3" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="copilotMultiengine3" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="copilotInstruments3" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimos 90 dias</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="daysAircraft903" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="daysRugged903" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="daysMultiengine903" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="daysInstruments903" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimos 30 dias</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="daysAircraft303" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="daysRugged303" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="daysMultiengine303" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="daysInstruments303" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Ultimas 24 horas </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="hoursAircraft243" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200"
                                            placeholder="Ingresar..."></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <input wire:model="hoursRugged243" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="hoursMultiengine243" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                        <input wire:model="hoursInstruments243" type="text" class="px-1 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-200 text-base outline-none text-gray-700 leading-8 transition-colors duration-200" placeholder="Ingresar...">
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
                <input type="text"  wire:model="capabilities3"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Certificado médico número</label>
                <input type="text"  wire:model="medicalCertificate3"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Limitaciones del certificado</label>
                <input type="text"  wire:model="limitationsCertificate3"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Excepción al certificado</label>
                <input type="text"  wire:model="exceptionCertificate3"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">
            </div>
        </div>
        <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Observaciones</label>
                <x-select class="w-full" wire:model="observationsCertificate3">
                    <x-select.option label="NINGUNO" value="NINGUNO" />
                    <x-select.option label="LENTES" value="LENTES" />
                    <x-select.option label="OTRO" value="OTRO" />
                </x-select>

            </div>
            {{--APARECER EN CASO DE SELECCIONAR OTRO--}}
            <div>
                @if ($observationsCertificate3=='OTRO')
                <label for="" class="block text-lg mb-2 dark:text-white">Otro</label>
                <input type="text"  wire:model="otherCertificate3"
                class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                placeholder="ingresar...">                    
                @endif
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Asiento ocupado</label>
                <x-select class="w-full" wire:model="occupiedSeat3">                    
                    <x-select.option label="IZQUIERDO" value="IZQUIERDO" />
                    <x-select.option label="DERECHO" value="DERECHO" />
                    <x-select.option label="CENTRO" value="CENTRO" />
                    <x-select.option label="OTRO" value="OTRO" />
                </x-select>

            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Lesión</label>
                <x-select class="w-full" wire:model="injury3">
                    <x-select.option label="FATAL" value="FATAL" />
                    <x-select.option label="GRAVE" value="GRAVE" />
                    <x-select.option label="LEVE" value="LEVE" />
                    <x-select.option label="ILESO" value="ILESO" />
                </x-select>

            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Desempeña funciones de</label>
                <x-select class="w-full" wire:model="performsFunctions3">
                    <x-select.option label="PILOTO AL MANDO" value="PILOTO AL MANDO" />
                    <x-select.option label="PILOTO MONITOREANDO" value="PILOTO MONITOREANDO" />
                </x-select>

            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Utilizo el cinturón de seguridad?</label>
                <x-select class="w-full" wire:model="seatBelt3">
                    <x-select.option label="SI" value="SI" />
                    <x-select.option label="NO" value="NO" />                    
                </x-select>
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Utilizo el arnes?</label>
                <x-select class="w-full" wire:model="theHarness3">
                    <x-select.option label="SI" value="SI" />
                    <x-select.option label="NO" value="NO" />                    
                </x-select>
            </div>
        </div>
        <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Fecha última inspección en ruta</label>
                <x-datetime-picker wire:model="inspectionDate3" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
            </div>
            <div>
                <label for="" class="block text-lg mb-2 dark:text-white">Ultima verificación de la aeronave</label>
                <x-datetime-picker wire:model="verificationDate3" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
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
                        <input type="file" wire:model="fileCertificate" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
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
                    <textarea name="" id="" cols="30" rows="10" type="text" wire:model="historyDescription" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
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
                        <input type="file" wire:model="filePassengers" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
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
                    <textarea name="" id="" cols="30" rows="10" type="text" wire:model="safetyRecommendation" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
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
                        <input type="file" wire:model="fileSusceptible" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
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
                    <textarea name="" id="" cols="30" rows="10" type="text" wire:model="additionalInformation" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresa..."></textarea>
                </div>
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