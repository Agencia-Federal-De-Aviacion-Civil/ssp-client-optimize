<div>
    <section class="bg-gray-50 dark:bg-gray-900 py-12">
        <div class="container px-6 py-6 mx-auto content-center">
            <h1 class="text-xl font-semibold text-center text-gray-800 capitalize lg:text-2xl dark:text-white">AP.5 DESVIACIÓN DE VEHÍCULOS Y PEATONES AFAC-005</h1>
            <div class="flex justify-center mx-auto mt-6">
                <span class="inline-block w-80 h-1 bg-blue-500 rounded-full"></span>
                <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
            </div>
            <p class="max-w-2xl mx-auto mt-4 text-center text-gray-500 dark:text-gray-300 lg:text-xl">
                AFAC-005
            </p>
        </div>
        <section class="max-w-6xl p-2 mx-auto bg-gray-50" style="background-position:50%;background-repeat:no-repeat;background-image: url('{{ asset('images/escudo-hi-opac2.png') }}')">
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fecha</label>
                    <x-datetime-picker wire:model="dateLocal" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                </div>                

                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Hora local</label>
                    <x-time-picker wire:model="timeLocal" placeholder="00:00" format="24" class="w-full px-2 py-2" />
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Identificador del aeropuerto</label>
                    <input type="text" wire:model="airportIdentifier" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                {{-- @error('dateLocal')
                <span
                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                @enderror                --}}
        

                    </div>
                {{-- @error('dateLocal')
                <span
                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                @enderror                --}}

                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Tipo de desviación</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="deviationType">
                        <x-select.option label="VEHÍCULO (INCLUIR AERONAVES QUE ESTÁN SIENDO REMOLCADAS)" value="VEHÍCULO" />
                        <x-select.option label="PERSONA (INCLUIR BICICLETAS)" value="PERSONA" />
                    </x-select>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                    <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                        INFROMACIÓN DEL VEHÍCULO</h1>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3" x-data="{ vehicle: '' }">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Selecione el vehículo</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="vehicle">
                        <x-select.option label="CARRO REMOLCADOR" value="CARRO REMOLCADOR" />
                        <x-select.option label="CARRO EQUIPAJERO" value="CARRO EQUIPAJERO" />
                        <x-select.option label="CAMIÓN DE COMBUSTIBLE" value="CAMIÓN DE COMBUSTIBLE" />
                        <x-select.option label="AERONAVE REMOLCADA" value="AERONAVE REMOLCADA" />
                        <x-select.option label="EQUIPO DE CONSTRUCCIÓN" value="EQUIPO DE CONSTRUCCIÓN" />
                        <x-select.option label="MOTOCICLETA" value="MOTOCICLETA" />
                        <x-select.option label="OTROS CAMIONES (INCLUYE AUTOBUSES, CAMIONETAS, ETC.)" value="OTROS CAMIONES" />
                        <x-select.option label="OTROS" value="OTROS" />
                    </x-select>
                    {{-- <select name="" id="" x-model="vehicle">
                        <option value="MOTOCICLETA">MOTOCICLETA</option>
                        <option value="OTROS">OTROS</option>
                    </select> --}}
                </div>
                {{-- aparece al seccionar otro --}}
                <div>
                    @if ($vehicle=='OTROS')
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="specify" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">                        
                    @endif
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Número económico</label>
                    <input type="text" wire:model="economicNumber" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Placas</label>
                    <input type="text" wire:model="plates" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Vehículo acompañado por</label>
                    <input type="text" wire:model="vehicleAccompanied" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
            </div>
            <div class="flex flex-col py-0">
                <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                    <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                        INFROMACIÓN DEL CONDUCTOR</h1>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                <div class="col-span-2">
                    <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                    <input type="text" wire:model="name1" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Empleado de</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="employee1">
                        <x-select class="w-full">
                            <x-select.option label="AEROLÍNEA" value="AEROLÍNEA" />
                            <x-select.option label="AERÓDROMO" value="AERÓDROMO" />
                            <x-select.option label="CONTRATISTA" value="CONTRATISTA" />
                            <x-select.option label="AUTORIDAD AERONÁUTICA" value="AUTORIDAD AERONÁUTICA" />
                            <x-select.option label="OTRO GOBIERNO" value="OTRO GOBIERNO" />
                            <x-select.option label="VISITANTE DEL AEROPUERTO" value="VISITANTE DEL AEROPUERTO" />
                            <x-select.option label="PILOTO DE AVIACIÓN GENERAL" value="PILOTO DE AVIACIÓN GENERAL" />
                            <x-select.option label="OTROS" value="OTROS" />
                        </x-select>
                    </x-select>
                </div>
                {{-- aparece al seccionar otro 13012023--}}
                <div>
                    @if ($employee1=='OTROS')
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="specify1" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">                        
                    @endif                
                </div>
            </div>
            <br>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Aeropuerto certificado</label>
                    <x-select class="w-full" wire:model="certifiedAirport">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC SI --}}
                <div>
                    @if ($certifiedAirport=='SI')
                    <label for="" class="block text-lg mb-2 dark:text-white">Tipo</label>
                    <x-select class="w-full" wire:model="type">
                        <x-select.option label="PARCIALMENTE" value="PARCIALMENTE" />
                        <x-select.option label="COMPLETAMENTE" value="COMPLETAMENTE" />
                    </x-select>                        
                    @endif                
                </div>
            </div>
            <div class="px-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Desviación</label>
                    <x-select class="w-full" wire:model="deviation">
                        <x-select.option label="NO AUTORIZADO PARA ESTAR EN EL AERÓDROMO" value="NO AUTORIZADO PARA ESTAR EN EL AERÓDROMO" />
                        <x-select.option label="AUTORIZADO PARA ESTAR EN EL AERÓDROMO, PERO NO EN EL ÁREA DE MOVIMIENTO" value="AUTORIZADO PARA ESTAR EN EL AERÓDROMO, PERO NO EN EL ÁREA DE MOVIMIENTO" />
                        <x-select.option label="AUTORIZADO PARA ESTAR EN EL ÁREA DE MOVIMIENTO" value="AUTORIZADO PARA ESTAR EN EL ÁREA DE MOVIMIENTO" />
                        <x-select.option label="SE DESCONOCE" value="SE DESCONOCE" />
                    </x-select>
                </div>
            </div>
            <br>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">El aeródromo proporciona capacitación para
                        conducir dentro del aeródromo</label>
                    <x-select class="w-full" wire:model="airfieldProvides">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">El conductor completo en programa de
                        capacitación</label>
                    <x-select class="w-full" wire:model="completeDriver">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                        <x-select.option label="SE DESCONOCE" value="SE DESCONOCE" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC SI --}}
                <div>
                    @if ($completeDriver=='SI')
                    <label for="" class="block text-lg mb-2 dark:text-white">Cuando</label>
                    <input type="text" wire:model="when" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                    @endif    
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">El programa de capacitación incluye</label>
                    <x-select class="w-full" wire:model="trainingProgram">
                        <x-select.option label="FAMILIARIZACIÓN CON LAS INSTALACIONES" value="FAMILIARIZACIÓN CON LAS INSTALACIONES" />
                        <x-select.option label="PROCEDIMIENTOS OPERACIONALES DEL AEROPUERTO" value="PROCEDIMIENTOS OPERACIONALES DEL AEROPUERTO" />
                        <x-select.option label="SE DESCONOCE" value="SE DESCONOCE" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">El conductor o la persona tenia falta de
                        conocimientos o experiencia</label>
                    <x-select class="w-full" wire:model="knowledgeExperience">
                        <x-select.option label="DISEÑO DEL AEROPUERTO" value="DISEÑO DEL AEROPUERTO" />
                        <x-select.option label="SEÑALIZACIÓN, MARCAS, ILUMINACIÓN..." value="SEÑALIZACIÓN, MARCAS, ILUMINACIÓN..." />
                        <x-select.option label="PROCEDIMIENTOS DE TORRE DE CONTROL EN EL ÁREA DE MOVIMIENTO" value="PROCEDIMIENTOS DE TORRE DE CONTROL EN EL ÁREA DE MOVIMIENTO" />
                        <x-select.option label="FRASEOLOGÍA DE LA TORRE DE CONTROL" value="FRASEOLOGÍA DE LA TORRE DE CONTROL" />
                        <x-select.option label="SE DESCONOCE" value="SE DESCONOCE" />
                        <x-select.option label="OTRA" value="OTRA" />
                        <x-select.option label="NINGUNA DE LAS ANTERIORES, ES UN FACTOR" value="NINGUNA DE LAS ANTERIORES, ES UN FACTOR" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC OTROS --}}
                <div>
                    @if ($knowledgeExperience=='OTRA')
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="specify2" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">                        
                    @endif
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">La investigación detecto que el conductor o el
                        peatón</label>
                    <x-select class="w-full" wire:model="investigationFound">
                        <x-select.option label="FUE INCAPAZ DE LOCALIZAR LA RUTA" value="FUE INCAPAZ DE LOCALIZAR LA RUTA" />
                        <x-select.option label="ESTABA DESORIENTADO O PERDIDO" value="ESTABA DESORIENTADO O PERDIDO" />
                        <x-select.option label="NO OBSERVO MARCAS, SEÑALES O ILUMINACIÓN" value="NO OBSERVO MARCAS, SEÑALES O ILUMINACIÓN" />
                        <x-select.option label="NO SE APEGÓ A LOS PROCEDIMIENTOS PARA EL ÁREA DE MOVIMIENTO" value="NO SE APEGÓ A LOS PROCEDIMIENTOS PARA EL ÁREA DE MOVIMIENTO" />
                        <x-select.option label="NO SE APEGÓ A LAS INSTRUCCIONES DE RUTA EMITIDAS POR LA TORRE DE CONTROL" value="NO SE APEGÓ A LAS INSTRUCCIONES DE RUTA EMITIDAS POR LA TORRE DE CONTROL" />
                        <x-select.option label="TOMO ACCIONES DE MANERA INADVERTIDA" value="TOMO ACCIONES DE MANERA INADVERTIDA" />
                        <x-select.option label="SE LE OLVIDO SOLICITAR AUTORIZACIÓN" value="SE LE OLVIDO SOLICITAR AUTORIZACIÓN" />
                        <x-select.option label="SE LE OLVIDO QUE HABÍA SIDO AUTORIZADO" value="SE LE OLVIDO QUE HABÍA SIDO AUTORIZADO" />
                        <x-select.option label="ESTABA DISTRAÍDO" value="ESTABA DISTRAÍDO" />
                        <x-select.option label="OTRAS" value="OTRAS" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC No siguió las instrucciones, especifique --}}
                <div>
                    @if ($investigationFound == 'NO SE APEGÓ A LAS INSTRUCCIONES DE RUTA EMITIDAS POR LA TORRE DE CONTROL')
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="specify3" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">                       
                    @endif
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Equipo de comunicación</label>
                    <x-select class="w-full" wire:model="comunication">
                        <x-select.option label="SIN EQUIPO DE COMUNICACIÓN" value="SIN EQUIPO DE COMUNICACIÓN" />
                        <x-select.option label="RADIO BIDIRECCIONAL CON TWR" value="RADIO BIDIRECCIONAL CON TWR" />
                        <x-select.option label="SIN EQUIPO NO OPERACIONAL" value="SIN EQUIPO NO OPERACIONAL" />
                        <x-select.option label="COMUNICACIÓN ILEGIBLE CON TWR" value="COMUNICACIÓN ILEGIBLE CON TWR" />
                        <x-select.option label="NO SE PUEDE ENCENDER EL VEHÍCULO" value="NO SE PUEDE ENCENDER EL VEHÍCULO" />
                        <x-select.option label="OTRO" value="OTRO" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTROS --}}
                <div>
                    @if ($comunication=='OTRO')
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="specify4" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">                        
                    @endif
                </div>
            </div>
            <div class="flex flex-col py-0">
                <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                    <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                        INFROMACIÓN DEL PEATÓN</h1>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                <div class="col-span-2">
                    <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                    <input type="text" wire:model="name2" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Empleado de</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="employee2">
                            <x-select.option label="AEROLÍNEA" value="AEROLÍNEA" />
                            <x-select.option label="AERÓDROMO" value="AERÓDROMO" />
                            <x-select.option label="CONTRATISTA" value="CONTRATISTA" />
                            <x-select.option label="AUTORIDAD AERONÁUTICA" value="AUTORIDAD AERONÁUTICA" />
                            <x-select.option label="OTRO GOBIERNO" value="OTRO GOBIERNO" />
                            <x-select.option label="VISITANTE DEL AEROPUERTO" value="VISITANTE DEL AEROPUERTO" />
                            <x-select.option label="PILOTO DE AVIACIÓN GENERAL" value="PILOTO DE AVIACIÓN GENERAL" />
                            <x-select.option label="OTROS" value="OTROS" />
                    </x-select>
                </div>
                {{-- aparece al seccionar otro 13012023--}}
                <div>
                    @if ($employee2=='OTROS')
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="specify5" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">                        
                    @endif
                </div>
            </div>
            <br>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Desviación detectada por</label>
                    <x-select class="w-full" wire:model="deviationDetected">
                        <x-select.option label="PERSONAL DE TORRE" value="PERSONAL DE TORRE" />
                        <x-select.option label="CCO DEL AERÓDROMO" value="CCO DEL AERÓDROMO" />
                        <x-select.option label="SEGURIDAD AEROPORTUARIA" value="SEGURIDAD AEROPORTUARIA" />
                        <x-select.option label="PILOTO" value="PILOTO" />
                        <x-select.option label="OTRO" value="OTRO" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTROS --}}
                <div>
                    @if ($deviationDetected=='OTRO')
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="specify6" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">                       
                    @endif                                
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">El área es visible desde torre</label>
                    <x-select class="w-full" wire:model="visibleTower">
                        <x-select.option label="SI" value="SI" />
                        <x-select.option label="NO" value="NO" />
                        <x-select.option label="PARCIALMENTE" value="PARCIALMENTE" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN Parcialmente --}}
                <div>
                    @if ($visibleTower=='PARCIALMENTE')
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="specify7" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">                        
                    @endif                
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div class="flex flex-col py-0">
                    <p class="px-1 text-lg py-2 whitespace-no-wrap">El piloto, conductor o peatón tomaron o solicitaron una acción evasiva para evitar la colisión
                    </p>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-6">
                    <div class="md:flex py-2">
                        <x-radio class="text-lg" wire:model="avoidCollision" id="fallas1" name="fallas" left-label="SI" value="SI" />
                    </div>
                    <div class="md:flex py-2">
                        <x-radio class="text-lg" wire:model="avoidCollision" id="fallas2" name="fallas" left-label="NO" value="NO" />
                    </div>
                    <div class="md:flex py-2">
                        <x-radio class="text-lg" wire:model="avoidCollision" id="fallas3" name="fallas" left-label="DESCONOCIDO" value="DESCONOCIDO" />
                    </div>
                </div>
                <div class="flex flex-col py-0">
                    <p class="px-1 text-lg py-2 whitespace-no-wrap">Para la pérdida de separación, fue de</p>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Horizontal</label>
                        <x-input class="w-full" wire:model="horizontal" placeholder="Ingresa..." suffix="metros" />

                    </div>
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Vertical</label>
                        <x-input class="w-full" wire:model="vertical" placeholder="Ingresa..." suffix="metros" />
                    </div>
                </div>
                <div class="flex flex-col py-0">
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            TIEMPO</h1>
                    </div>
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Condiciones de tiempo</label>
                        <x-select class="w-full" wire:model="weatherConditions">
                            <x-select.option label="DÍA" value="DÍA" />
                            <x-select.option label="NUBLADO" value="NUBLADO" />
                            <x-select.option label="NOCHE ILUMINADA" value="NOCHE ILUMINADA" />
                            <x-select.option label="NOCHE OSCURA" value="NOCHE OSCURA" />
                            <x-select.option label="LLUVIA" value="LLUVIA" />
                            <x-select.option label="OTRO" value="OTRO" />
                        </x-select>
                    </div>
                    {{-- SE APARECE AL DAR CLIC EN OTRO --}}
                    <div>
                        @if ($weatherConditions=='OTRO')
                        <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                        <input type="text" wire:model="specify8" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">                            
                        @endif
                        </div>
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Visibilidad prevaleciente</label>
                        <x-input class="w-full" wire:model="prevailingVisibility" placeholder="Ingresa..." suffix="MS" />
                    </div>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Temperatura, especifique</label>
                        <x-input class="w-full" wire:model="temperatureSpecify" placeholder="Ingresa..." suffix="°C" />
                    </div>
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Techo, especifique</label>
                        <x-input class="w-full" wire:model="roofSpecify" placeholder="Ingresa..." suffix="metros" />
                    </div>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
                <div class="flex flex-col py-0">
                    <p class="px-1 text-lg py-2 whitespace-no-wrap">La desviación se suscitó en el </p>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Área de
                        movimiento</label>
                        <x-select class="w-full" wire:model="movementArea">
                            <x-select.option label="PISTA DE ATERRIZAJE" value="PISTA DE ATERRIZAJE" />
                            <x-select.option label="CALLE DE RODAJE" value="CALLE DE RODAJE" />
                            <x-select.option label="INTERSECCIÓN CON" value="INTERSECCIÓN" />
                            <x-select.option label="OTRAS ÁREAS" value="OTRAS" />
                        </x-select>
                    </div>
                    {{-- SIEMPRE APARECE SIN IMPORTAR LA CONDICION --}}
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                        <input type="text" wire:model="specify9" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">
                    </div>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Área de movimiento presentaba</label>
                        <x-select class="w-full" wire:model="movementFeatured">
                            <x-select.option label="CAMBIOS RECIENTES EN LA CONFIGURACIÓN DE LA PISTA O CALLE DE RODAJE" value="CAMBIOS RECIENTES EN LA CONFIGURACIÓN DE LA PISTA O CALLE DE RODAJE" />
                            <x-select.option label="ACTIVIDAD DE CONSTRUCCIÓN" value="ACTIVIDAD DE CONSTRUCCIÓN" />
                            <x-select.option label="ÁREA CERRADA POR NOTAM" value="ÁREA CERRADA POR NOTAM" />
                            <x-select.option label="OTRO" value="OTRO" />
                            <x-select.option label="NINGUNA DE LAS ANTERIORES" value="NINGUNA DE LAS ANTERIORES" />
                        </x-select>
                    </div>
                    {{-- SIEMPRE APARECE CUANDO SELECCIONA Área cerrada por NOTAM,Otro --}}
                    <div>
                        @if ($movementFeatured=='ÁREA CERRADA POR NOTAM' || $movementFeatured=='OTRO')
                        <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                        <input type="text" wire:model="specify10" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">
                        @endif
                    </div>
                </div>
                <div class="flex flex-col py-0">
                    <p class="px-1 text-lg py-2 whitespace-no-wrap">Se emitió o modificó una autorización para
                        impedir una pérdida de separación o riesgo de
                        colisión</p>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-12">
                    <div class="col-span-1">
                            <div class="md:flex py-2">
                                <x-radio class="text-lg" id="emitir1" name="emitir" left-label="SI" value="SI" wire:model="clearanceCollision" />
                            </div>
                    </div>
                    <div class="col-span-1">
                            <div class="md:flex py-2">
                                <x-radio class="text-lg" id="emitir2" name="emitir" left-label="NO" value="NO" wire:model="clearanceCollision" />
                            </div>
                    </div>
                    {{-- SIEMPRE APARECE CUANDO SELECCIONA SI --}}
                    <div class="md:flex col-span-6">
                        
                        @if ($clearanceCollision=='SI')
                        <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                        <input type="text" wire:model="specify11" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">                            
                        @endif                    
                    </div>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Hubo una pérdida de separación</label>
                        <x-select class="w-full" wire:model="lossSeparation">
                            <x-select.option label="SI" value="SI" />
                            <x-select.option label="NO" value="NO" />
                        </x-select>
                    </div>
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Se adjunta</label>
                        <x-select class="w-full" wire:model="attached">
                            <x-select.option label="DECLARACIÓN DEL CONDUCTOR O DEL PEATÓN" value="DECLARACIÓN DEL CONDUCTOR O DEL PEATÓN" />
                            <x-select.option label="CROQUIS DEL AEROPUERTO" value="CROQUIS DEL AEROPUERTO" />
                            <x-select.option label="ACTA DE HECHOS" value="ACTA DE HECHOS" />
                            <x-select.option label="ANÁLISIS DEL RST" value="ANÁLISIS DEL RST" />
                            <x-select.option label="AFAC-14" value="AFAC-14" />
                            <x-select.option label="OTRA" value="OTRA" />
                        </x-select>
                    </div>
                    {{-- SIEMPRE APARECE CUANDO SELECCIONA OTRA --}}
                    <div>
                        @if ($attached=='OTRA')
                        <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                        <input type="text" wire:model="specify12" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">                           
                        @endif
                    </div>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                    <div class="col-span-1">
                        <label for="" class="block text-lg mb-2 dark:text-white">Acciones tomadas o que se plantean tomar</label>
                        <x-select class="w-full" wire:model="takenPlanned">
                            <x-select.option label="PROCESO SANCIONADOR DE LA AUTORIDAD" value="PROCESO SANCIONADOR DE LA AUTORIDAD" />
                            <x-select.option label="PROCESO SANCIONADOR DEL EXPLOTADOR DEL AERÓDROMO" value="PROCESO SANCIONADOR DEL EXPLOTADOR DEL AERÓDROMO" />
                            <x-select.option label="CAMBIOS DE PROCEDIMIENTOS" value="CAMBIOS DE PROCEDIMIENTOS" />
                            <x-select.option label="NINGUNA" value="NINGUNA" />
                            <x-select.option label="ESPECIFIQUE " value="ESPECIFIQUE" />
                        </x-select>
                    </div>
                    {{-- SIEMPRE APARECE CUANDO SELECCIONA OTRA --}}
                    <div class="col-span-2">
                        @if ($takenPlanned=='ESPECIFIQUE')
                        <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                        <input type="text" wire:model="specify13" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">                            
                        @endif
                    </div>
                </div>
                <div class="flex flex-col py-0">
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            INFROMACIÓN DEL PEATÓN</h1>
                    </div>
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                </div>
                <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                    <div class="col-span-2">
                        <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                        <input type="text" wire:model="name3" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">
                    </div>
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">FIRMA</label>
                        <input type="text" wire:model="firm" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">
                    </div>
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Fecha</label>
                        <x-datetime-picker wire:model="date" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                    </div>
                </div>
                <div class="py-12 mb-2 text-right">
                    <x-button wire:click.prevent="save" icon="document-download" spinner="" blue label="GENERAR REPORTE" />
                </div>
        </section>
    </section>
    <footer class="flex flex-col items-center justify-between p-6 bg-gray-100 dark:bg-gray-900 sm:flex-row">
        <a href="#" class="text-xl font-bold text-gray-600 transition-colors duration-300 dark:text-white hover:text-gray-700 dark:hover:text-gray-300">Revisión:</a>
        <p class="text-sm text-gray-600 dark:text-gray-300">9ª Edición / Manual del Inspector de Aeronavegabilidad </p>
        <div class="flex -mx-2">
            <p class="text-sm text-gray-600 dark:text-gray-300">14 de julio de 2022</p>
        </div>
    </footer>
    </div>