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
                    <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Hora local</label>
                    <x-time-picker placeholder="00:00" format="24" class="w-full px-2 py-2" />
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Identificador del aeropuerto</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Tipo de desviación</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="">
                        <x-select.option label="" value="" />
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
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Selecione el vehículo</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- aparece al seccionar otro --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Número económico</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Placas</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Vehículo acompañado por</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
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
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Empleado de</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- aparece al seccionar otro 13012023--}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
            </div>
            <br>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Aeropuerto certificado</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC SI --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Tipo</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Desviación</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
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
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">El conductor completo en programa de
                        capacitación</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC SI --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Cuando</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">El programa de capacitación incluye</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">El conductor o la persona tenia falta de
                        conocimientos o experiencia</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC OTROS --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">La investigación detecto que el conductor o el
                        peatón</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC No siguió las instrucciones, especifique --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Equipo de comunicación</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTROS --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
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
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Empleado de</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- aparece al seccionar otro 13012023--}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
            </div>
            <br>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Desviación detectada por</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN OTROS --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">El área es visible desde torre</label>
                    <x-select class="w-full">
                        <x-select.option label="" value="" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC EN Parcialmente --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div class="flex flex-col py-0">
                    <p class="px-1 text-lg py-2 whitespace-no-wrap">El piloto, conductor o peatón tomaron o solicitaron una acción evasiva para evitar la colisión
                    </p>
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
                <div class="flex flex-col py-0">
                    <p class="px-1 text-lg py-2 whitespace-no-wrap">Para la pérdida de separación, fue de</p>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Horizontal</label>
                        <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="metros" />

                    </div>
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Vertical</label>
                        <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="metros" />
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
                        <x-select class="w-full">
                            <x-select.option label="" value="" />
                        </x-select>
                    </div>
                    {{-- SE APARECE AL DAR CLIC EN OTRO --}}
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                        <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">
                    </div>
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Visibilidad prevaleciente</label>
                        <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="MS" />
                    </div>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Temperatura, especifique</label>
                        <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="°C" />
                    </div>
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Techo, especifique</label>
                        <x-input class="w-full" wire:model="" placeholder="Ingresa..." suffix="metros" />
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
                        <x-select class="w-full">
                            <x-select.option label="" value="" />
                        </x-select>
                    </div>
                    {{-- SIEMPRE APARECE SIN IMPORTAR LA CONDICION --}}
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                        <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">
                    </div>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Área de movimiento presentaba</label>
                        <x-select class="w-full">
                            <x-select.option label="" value="" />
                        </x-select>
                    </div>
                    {{-- SIEMPRE APARECE CUANDO SELECCIONA Área cerrada por NOTAM,Otro --}}
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                        <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">
                    </div>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Área de movimiento presentaba</label>
                        <x-select class="w-full">
                            <x-select.option label="" value="" />
                        </x-select>
                    </div>
                    {{-- SIEMPRE APARECE CUANDO SELECCIONA Área cerrada por NOTAM,Otro --}}
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                        <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">
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
                                <x-radio class="text-lg" id="emitir1" name="emitir" left-label="SI" value="SI" wire:model="" />
                            </div>
                    </div>
                    <div class="col-span-1">
                            <div class="md:flex py-2">
                                <x-radio class="text-lg" id="emitir2" name="emitir" left-label="NO" value="NO" wire:model="" />
                            </div>
                    </div>
                    {{-- SIEMPRE APARECE CUANDO SELECCIONA SI --}}
                    <div class="md:flex col-span-6">
                        <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                        <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">
                    </div>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Hubo una pérdida de separación</label>
                        <x-select class="w-full">
                            <x-select.option label="" value="" />
                        </x-select>
                    </div>
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Se adjunta</label>
                        <x-select class="w-full">
                            <x-select.option label="" value="" />
                        </x-select>
                    </div>
                    {{-- SIEMPRE APARECE CUANDO SELECCIONA OTRA --}}
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                        <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">
                    </div>
                </div>
                <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                    <div class="col-span-1">
                        <label for="" class="block text-lg mb-2 dark:text-white">Acciones tomadas o que se plantean tomar</label>
                        <x-select class="w-full">
                            <x-select.option label="" value="" />
                        </x-select>
                    </div>
                    {{-- SIEMPRE APARECE CUANDO SELECCIONA OTRA --}}
                    <div class="col-span-2">
                        <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                        <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">
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
                        <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">
                    </div>
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">FIRMA</label>
                        <input type="text" wire:model="" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                            placeholder="ingresar...">
                    </div>
                    <div>
                        <label for="" class="block text-lg mb-2 dark:text-white">Fecha</label>
                        <x-datetime-picker class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                    </div>
                </div>
                <div class="py-12 mb-2 text-right">
                    <x-button wire:click.prevent="" icon="document-download" spinner="" blue label="GENERAR REPORTE" />
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