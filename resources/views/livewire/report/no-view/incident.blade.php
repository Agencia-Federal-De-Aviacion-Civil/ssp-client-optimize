<div>
    <x-errors />
    <div class="text-gray-600 text-lg mt-2 mb-4">
        <ul class="list-disc text-lg text-sm ml-4 mt-2">
            <li>¿A que personal cree que le corresponde el evento?</li>
        </ul>
    </div>
    <div class="grid sm:grid-cols-3 gap-2">
        <label for="controler_incident"
            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
            <div class="text-teal-600 mr-3">
                <input type="radio" id="controler_incident" value="Controlador de tráfico aereo" name="event"
                    wire:model="event" class="form-radio focus:outline-none focus:shadow-outline" />
            </div>
            <div class="select-none text-gray-700">Controlador de Trafico Aéreo</div>
            <a tabindex="0" role="link" aria-label="tooltip 2"
                class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative mt-00 md:mt-0 px-4"
                onmouseover="showTooltip(4)" onfocus="showTooltip(4)" onmouseout="hideTooltip(4)">
                <div class="cursor-pointer text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div id="tooltip4_incident" role="tooltip"
                    class="z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg bg-white p-4 hidden">
                    <svg class="absolute left-0 -ml-2 bottom-0 top-0 h-full" width="9px" height="16px"
                        viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                    <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                        <polygon id="Triangle"
                                            transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                            points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <p class="text-sm font-bold text-gray-800 pb-1">CONTROLADOR DE TRAFICO AÉREO</p>
                    <p class="text-xs leading-4 text-gray-600 pb-3">Eventos relacionados con el control
                        de
                        trafico aéreo que tiene que ver con Navegación, Comunicación, Fraseología, etc.
                    </p>
                </div>
            </a>
        </label>
        <label for="pmantenm_incident"
            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
            <div class="text-teal-600 mr-3">
                <input type="radio" id="pmantenm_incident" value="Personal de Mantenimiento" name="event"
                    wire:model="event" class="form-radio focus:outline-none focus:shadow-outline" />
            </div>
            <div class="select-none text-gray-700">Personal de Mantenimiento</div>
            <a tabindex="0" role="link" aria-label="tooltip 2"
                class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative mt-0 md:mt-0 px-4"
                onmouseover="showTooltip(5)" onfocus="showTooltip(5)" onmouseout="hideTooltip(5)">
                <div class="cursor-pointer text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div id="tooltip5_incident" role="tooltip"
                    class="z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg bg-white p-4 hidden">
                    <svg class="absolute left-0 -ml-2 bottom-0 top-0 h-full" width="9px" height="16px"
                        viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                    <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                        <polygon id="Triangle"
                                            transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                            points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <p class="text-sm font-bold text-gray-800 pb-1">PERSONAL DE MANTENIMIENTO</p>
                    <p class="text-xs leading-4 text-gray-600 pb-3">Eventos relacionados con el
                        mantenimiento de la aeronave que tienen que ver con fallas en los sistemas y
                        problemas con componentes de la aeronave.</p>
                </div>
            </a>
        </label>
        <label for="tfly_incident"
            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
            <div class="text-teal-600 mr-3">
                <input type="radio" id="tfly_incident" value="Tripulación de vuelo" name="event"
                    wire:model="event" class="form-radio focus:outline-none focus:shadow-outline" />
            </div>
            <div class="select-none text-gray-700">Tripulación de vuelo</div>
            <a tabindex="0" role="link" aria-label="tooltip 2"
                class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative mt-0 md:mt-0 px-4"
                onmouseover="showTooltip(6)" onfocus="showTooltip(6)" onmouseout="hideTooltip(6)">
                <div class="cursor-pointer text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div id="tooltip6_incident" role="tooltip"
                    class="z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg bg-white p-4 hidden">
                    <svg class="absolute left-0 -ml-2 bottom-0 top-0 h-full" width="9px" height="16px"
                        viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                    <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                        <polygon id="Triangle"
                                            transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                            points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <p class="text-sm font-bold text-gray-800 pb-1">TRIPULACIÓN DE VUELO</p>
                    <p class="text-xs leading-4 text-gray-600 pb-3">Eventos relacionados con la
                        operación de
                        la aeronave que tienen que ver con desviaciones de procedimiento, eventos
                        ACAS/TCAS,
                        Paro de motor, Incendios durante el vuelo etc.</p>
                </div>
            </a>
        </label>
        @error('event')
            <span
                class="mt-1 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
        @enderror
    </div>
    <div x-data="{ typevent: 0, sub_menu_event: 0, involved_event: 0, type_tuition: 0, type_tuition2: 0, type_tuition3: 0 }">
        <div class="text-gray-600 text-lg mt-2 mb-4">
            <ul class="list-disc text-lg text-sm ml-4 mt-2">
                <li>Seleccione el tipo de evento</li>
            </ul>
        </div>
        <select wire:model.lazy="tipoevento" wire:model="event_id" x-model="typevent"
            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>ELIGE UNA OPCIÓN</option>
            @foreach ($events as $event)
                <option value="{{ $event->id }}">{{ $event->name }}</option>
            @endforeach
        </select>
        <div>
            @error('event_id')
                <span
                    class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
            @enderror
        </div>
        @if (!is_null($subevents))
            <div x-show="typevent !=21 && typevent !=5">
                <div class="flex flex-col mb-2">
                    <label for="tipo_licencia" class="font-semibold mb-2 text-sm text-gray-700 block">SUB MENÚ
                        EVENTO:<span class="text-xl text-red-600">*</span>
                    </label>
                    <select x-ref="sub_menu_event" x-model="sub_menu_event" wire:model="sub_event_id"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>ELIGE UNA OPCIÓN</option>
                        @foreach ($subevents as $subevent)
                            <option value="{{ $subevent->id }}">{{ $subevent->name }}</option>
                        @endforeach
                    </select>
                    @error('sub_event_id')
                        <span
                            class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                    @enderror
                </div>
        @endif
        <div
            x-show="sub_menu_event === '22' || sub_menu_event === '26'||sub_menu_event === '29'||sub_menu_event === '34'||sub_menu_event === '39'||sub_menu_event === '44'||sub_menu_event === '53'||sub_menu_event === '59'||sub_menu_event === '62'||sub_menu_event === '69'||sub_menu_event === '76'||sub_menu_event === '78'||sub_menu_event === '82'||sub_menu_event === '90'||sub_menu_event === '100'||sub_menu_event === '104'||typevent === '21'||typevent === '5' ">
            <div class="flex flex-col mb-4">
                <label for="other_event" class="font-semibold mb-2 text-sm text-blue-900 block">ESPECIFIQUE
                    (OTRO):<span class="text-xl text-red-600"></span></label>
                <input type="text" name="other_event" wire:model="other"
                    class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300">
            </div>
        </div>
        <div class="py-2 mb-4">
            <div class="text-gray-600 text-lg mt-2 mb-4">
                <ul class="list-disc text-lg text-sm ml-4 mt-2">
                    <li>Se vio involucrado en el evento</li>
                </ul>
            </div>
            <div class="grid sm:grid-cols-6 gap-2">
                <label for="si_incident"
                    class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                    <div class="text-teal-900 mr-3">
                        <input x-model="involved_event" wire:model="report_incident_id" type="radio"
                            id="si_incident" value="1" name="involved"
                            class="form-radio focus:outline-none focus:shadow-outline" />
                    </div>
                    <div class="select-none text-gray-700">SI</div>
                </label>
                <label for="no_incident"
                    class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                    <div class="text-teal-900 mr-3">
                        <input x-model="involved_event" wire:model="report_incident_id" type="radio"
                            id="no_incident" value="2" name="involved"
                            class="form-radio focus:outline-none focus:shadow-outline" />
                    </div>
                    <div class="select-none text-gray-700">NO</div>
                </label>
            </div>
            @error('report_incident_id')
                <span
                    class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
            @enderror
            {{-- CAMPOS CON VALIDACIONES EPICA 31 Y 32 --}}
            <div
                x-show="sub_menu_event === '22' && involved_event != '' ||sub_menu_event === '26' && involved_event != '' ||sub_menu_event === '29' && involved_event != '' ||sub_menu_event === '34' && involved_event != '' ||sub_menu_event === '39' && involved_event != '' ||sub_menu_event === '44' && involved_event != '' ||sub_menu_event === '53' && involved_event != '' ||sub_menu_event === '59' && involved_event != '' ||sub_menu_event === '62' && involved_event != '' ||sub_menu_event === '69' && involved_event != '' ||sub_menu_event === '76' && involved_event != '' ||sub_menu_event === '78' && involved_event != '' ||sub_menu_event === '82' && involved_event != '' ||sub_menu_event === '90' && involved_event != '' ||sub_menu_event === '100' && involved_event != '' ||sub_menu_event === '104' && involved_event != ''||      sub_menu_event >= 1 && sub_menu_event < 23 && involved_event === '2' ||sub_menu_event === '25' && involved_event === '2' ||sub_menu_event >= 27 && sub_menu_event < 29 && involved_event === '2' ||typevent === '5' && involved_event === '2'||sub_menu_event >= 30 && sub_menu_event < 34 && involved_event === '2'||sub_menu_event >= 35 && sub_menu_event < 39 && involved_event === '2'||sub_menu_event >= 40 && sub_menu_event < 44 && involved_event === '2'||sub_menu_event >= 46 && sub_menu_event < 52 && involved_event === '2'||sub_menu_event >= 55 && sub_menu_event < 59 && involved_event === '2'||sub_menu_event >= 60 && sub_menu_event < 62 && involved_event === '2'||sub_menu_event >= 63 && sub_menu_event < 69 && involved_event === '2'||sub_menu_event > 70 && sub_menu_event < 76 && involved_event === '2'||sub_menu_event === 77 && involved_event === '2'||sub_menu_event >=79 && sub_menu_event < 82 && involved_event === '2'||sub_menu_event >= 83 && sub_menu_event < 90 && involved_event === '2'||sub_menu_event >= 91 && sub_menu_event < 100 && involved_event === '2'||sub_menu_event >= 101 && sub_menu_event < 104 && involved_event === '2'||typevent === 21 && involved_event === '2'">
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-100 h-full bg-blue-800"></div>
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-3 mb-2">
                        <h1 class="sm:w-2/2 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                            LLENADO DE REPORTE</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-4 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="date_event" class="font-semibold mb-2 text-sm text-gray-700 block">FECHA
                            DEL EVENTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="date_event" type="date" wire:model="dateStartNot"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('dateStartNot')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="time_event" class="font-semibold mb-2 text-sm text-gray-700 block">HORA
                            DEL EVENTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="time_event" type="time" wire:model="hourStartNot"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('hourStartNot')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="place_event" class="font-semibold mb-2 text-sm text-gray-700 block">LUGAR:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="place" type="text" wire:model="placeNotInv"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('placeNotInv')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="des_danger" class="font-semibold mb-2 text-sm text-gray-700 block">DESCRIPCIÓN
                            DEL
                            PELIGRO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <textarea
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            wire:model="descriptionNot" id="des_danger" class="form-control" rows="3"></textarea>
                        @error('descriptionNot')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="conse_danger" class="font-semibold mb-2 text-sm text-gray-700 block">CONSECUENCIA
                            DEL
                            PELIGRO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <textarea
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            wire:model="consequenceNot" id="conse_danger" class="form-control" rows="3"></textarea>
                        @error('consequenceNot')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="accorrec_danger" class="font-semibold mb-2 text-sm text-gray-700 block">PROPUESTAS
                            DE ACCIONES
                            CORRECTIVAS:
                        </label>
                        <textarea
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            wire:model="proposalsNot" id="accorrec_danger" class="form-control" rows="3"></textarea>
                        @error('proposalsNot')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-3 mb-2">
                        <h1 class="sm:w-2/2 text-gray-900 font-medium title-font text-xl text-gray-600 mb-2 sm:mb-0">
                            ¿En su opinión que tan frecuente puede o podría suceder el evento?</h1>
                    </div>
                    <div class="grid sm:grid-cols-5 gap-2">
                        <label for="Sum_improbable"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-xs xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="Sum_improbable" wire:model="frequentNot"
                                    value="Sumamente improbable" name="frecuency"
                                    class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Sumamente improbable</div>
                        </label>
                        <label for="Improbable"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="Improbable" wire:model="frequentNot" value="Improbable"
                                    name="frecuency" class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Improbable</div>
                        </label>
                        <label for="Remoto"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="Remoto" wire:model="frequentNot" value="Remoto"
                                    name="frecuency" class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Remoto</div>
                        </label>
                        <label for="Ocasional"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="Ocasional" wire:model="frequentNot" value="Ocasional"
                                    name="frecuency" class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Ocasional</div>
                        </label>
                        <label for="Frecuente"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="Frecuente" wire:model="frequentNot" value="Frecuente"
                                    name="frecuency" class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Frecuente</div>
                        </label>
                        @error('frequentNot')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-3 mb-2">
                        <h1 class="sm:w-2/2 text-gray-900 font-medium title-font text-xl text-gray-600 mb-2 sm:mb-0">
                            ¿En su opinión cual sería la gravedad del evento si ocurriera?</h1>
                    </div>
                    <div class="grid sm:grid-cols-5 gap-2">
                        <label for="insignificante"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-sm xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="insignificante" wire:model="gravityNot"
                                    value="insignificante" name="gravedad"
                                    class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">insignificante</div>
                        </label>
                        <label for="Leve"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="Leve" wire:model="gravityNot" value="Leve"
                                    name="gravedad" class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Leve</div>
                        </label>
                        <label for="Importante"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="Importante" wire:model="gravityNot" value="Importante"
                                    name="gravedad" class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Importante</div>
                        </label>
                        <label for="Peligroso"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="Peligroso" wire:model="gravityNot" value="Peligroso"
                                    name="gravedad" class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Peligroso</div>
                        </label>
                        <label for="Catastrófico"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="Catastrófico" wire:model="gravityNot" value="Catastrófico"
                                    name="gravedad" class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Catastrófico</div>
                        </label>
                        @error('gravityNot')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            {{-- CAMPOS CON VALIDACIONES EPICA 35 (SEGUNDA VALIDACIÓN) --}}
            <div
                x-show="sub_menu_event == '1' && sub_menu_event > 0 && involved_event === '1' ||sub_menu_event == '4' && sub_menu_event > 0 && involved_event === '1'||sub_menu_event >= 8 && sub_menu_event < 11 && sub_menu_event > 0 && involved_event === '1'||sub_menu_event == '4' && sub_menu_event > 0 && involved_event === '1'||sub_menu_event >= 14 && sub_menu_event < 19 && sub_menu_event > 0 && involved_event === '1'||sub_menu_event == '20' && sub_menu_event > 0 && involved_event === '1'||sub_menu_event == '25' && sub_menu_event > 0 && involved_event === '1'||sub_menu_event >= 27 && sub_menu_event < 29 && sub_menu_event > 0 && involved_event === '1'||sub_menu_event == '32' && sub_menu_event > 0 && involved_event === '1'||sub_menu_event >= 41 && sub_menu_event < 44 && sub_menu_event > 0 && involved_event === '1'||sub_menu_event == '46' && sub_menu_event > 0 && involved_event === '1'||sub_menu_event >= 48 && sub_menu_event < 51 && sub_menu_event > 0 && involved_event === '1'||sub_menu_event == '52' && sub_menu_event > 0 && involved_event === '1'||sub_menu_event == '55' && sub_menu_event > 0 && involved_event === '1'||sub_menu_event >= 60 && sub_menu_event < 62 && sub_menu_event > 0 && involved_event === '1'">
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-100 h-full bg-blue-800"></div>
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-3 mb-2">
                        <h1 class="sm:w-2/2 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                            LLENADO DE REPORTE</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="place_event_incident" class="font-semibold mb-2 text-sm text-gray-700 block">LUGAR
                            DEL
                            SUCESO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            type="text" wire:model="placeInvolved">
                        @error('placeInvolved')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col">
                    <label for="estado_incident" class="font-semibold mb-2 text-sm text-gray-700 block">ESTADO:<span
                            class="text-xl text-red-600">*</span>
                    </label>
                    <select wire:model.lazy="estado" wire:model="state_id"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>ELIGE UNA OPCIÓN</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                    @error('state_id')
                        <span
                            class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                    @enderror
                </div>
                @if (!is_null($municipals))
                    <div class="flex flex-col">
                        <label for="municipio_incidente"
                            class="font-semibold mb-2 text-sm text-gray-700 block">MUNICIPIO:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model="municipal_id"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($municipals as $municipal)
                                <option value="{{ $municipal->id }}">{{ $municipal->name }}</option>
                            @endforeach
                        </select>
                        @error('municipal_id')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                @endif
                <div class="grid sm:grid-cols-4 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="date_event_incident" class="font-semibold mb-2 text-sm text-gray-700 block">FECHA
                            DEL EVENTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="date_event_incident" type="date" wire:model="dateStartInvolved"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('dateStartInvolved')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="time_event_incidente" class="font-semibold mb-2 text-sm text-gray-700 block">HORA
                            DEL EVENTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="time_event_incidente" type="time" wire:model="hourStartInvolved"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('hourStartInvolved')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-3 mb-2">
                        <h1 class="sm:w-2/2 text-gray-900 font-medium title-font text-xl text-gray-600 mb-2 sm:mb-0">
                            DATOS DE LA AERONAVE:</h1>
                    </div>
                    <div class="grid sm:grid-cols-3 gap-2">
                        <div class="flex flex-col mb-2">
                            <label for="type_fly_indicent" class="font-semibold mb-2 text-sm text-gray-700 block">TIPO
                                DE AERONAVE:<span class="text-xl text-red-600">*</span>
                            </label>
                            <select wire:model.lazy="tipo" wire:model="type_id"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>ELIGE UNA OPCIÓN</option>
                                @foreach ($tipos as $tipo)
                                    <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                                @endforeach
                            </select>
                            @error('type_id')
                                <span
                                    class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                            @enderror
                        </div>
                        @if (!is_null($brands))
                            <div class="flex flex-col mb-2">
                                <label for="marca_incident"
                                    class="font-semibold mb-2 text-sm text-gray-700 block">MARCA:<span
                                        class="text-xl text-red-600">*</span>
                                </label>
                                <select wire:model.lazy="marca" wire:model="brand_id"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>ELIGE UNA OPCIÓN</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                                @error('brand_id')
                                    <span
                                        class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                                @enderror
                            </div>
                        @endif
                        @if (!is_null($amodels))
                            <div class="flex flex-col mb-2">
                                <label for="modelo_incident"
                                    class="font-semibold mb-2 text-sm text-gray-700 block">MODELO:<span
                                        class="text-xl text-red-600">*</span>
                                </label>
                                <select wire:model="amodel_id"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>ELIGE UNA OPCIÓN</option>
                                    @foreach ($amodels as $amodel)
                                        <option value="{{ $amodel->id }}">{{ $amodel->name }}</option>
                                    @endforeach
                                </select>
                                @error('amodel_id')
                                    <span
                                        class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                                @enderror
                            </div>
                        @endif
                    </div>
                </div>
                {{-- En caso de legir OTRO en MODELO --}}
                <div>
                    <div class="flex flex-col mb-2">
                        <label for="modelo" class="font-semibold mb-2 text-sm text-gray-700 block">OTRO:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            type="text">
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="modelo" class="font-semibold mb-2 text-sm text-gray-700 block">TIPO DE
                            MATRICULA:<span class="text-xl text-red-600">*</span>
                        </label>
                        <select x-model="type_tuition" wire:model="typeLicensePlate"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            <option value="NACIONAL">NACIONAL</option>
                            <option value="Extranjera">EXTRANJERA</option>
                        </select>
                        @error('typeLicensePlate')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="modelo" class="font-semibold mb-2 text-sm text-gray-700 block">MATRICULA:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            x-mask:dynamic="type_tuition.toString().startsWith('NACI') ? '**-***' : '' "
                            wire:model="licensePlate" type="text">
                        @error('licensePlate')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <label for="nserie" class="font-semibold mb-2 text-sm text-gray-700 block">NÚMERO DE
                            SERIE:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="nserie" type="text" wire:model="serialNumber"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('serialNumber')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="prop_oper"
                            class="font-semibold mb-2 text-sm text-gray-700 block">PROPIETARIO/OPERADOR:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="prop_oper" type="text" wire:model="owner"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('owner')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="base_oper" class="font-semibold mb-2 text-sm text-gray-700 block">BASE
                            DE OPERACIÓN:<span class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model="boperation_id"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($boperations as $boperation)
                                <option value="{{ $boperation->id }}">{{ $boperation->name }}</option>
                            @endforeach
                        </select>
                        @error('boperation_id')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="daños" class="font-semibold mb-2 text-sm text-gray-700 block">DAÑOS A
                            LA
                            AERONAVE:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="daños" type="text" wire:model="aircraftDamage"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('aircraftDamage')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            TRIPULACIÓN:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <label for="name_capitan" class="font-semibold mb-2 text-sm text-gray-700 block">NOMBRE
                            DEL CAPITÁN:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="name_cpitan" type="text" wire:model="nameCaptan"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('nameCaptan')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="nacion_capitan"
                            class="font-semibold mb-2 text-sm text-gray-700 block">NACIONALIDAD:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model="national_capitan"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($nationalities as $nationalitie)
                                <option value="{{ $nationalitie->name }}">{{ $nationalitie->name }}</option>
                            @endforeach
                        </select>
                        @error('national_capitan')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="class_licens_pilot"
                            class="font-semibold mb-2 text-sm text-gray-700 block">LICENCIA
                            CLASE:<span class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model.lazy="classlicenspilot" wire:model="license_id"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($licenses as $license)
                                <option value="{{ $license->id }}">{{ $license->name }}</option>
                            @endforeach
                        </select>
                        @error('license_id')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    @if (!is_null($licensetypes))
                        <div class="flex flex-col mb-2">
                            <label for="tipo_licencia" class="font-semibold mb-2 text-sm text-gray-700 block">TIPO
                                DE
                                LICENCIA:<span class="text-xl text-red-600">*</span>
                            </label>
                            <select wire:model="license_type_id"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>ELIGE UNA OPCIÓN</option>
                                @foreach ($licensetypes as $licensetype)
                                    <option value="{{ $licensetype->id }}">{{ $licensetype->name }}</option>
                                @endforeach
                            </select>
                            @error('license_type_id')
                                <span
                                    class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                            @enderror
                        </div>
                    @endif
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="vigencia" class="font-semibold mb-2 text-sm text-gray-700 block">VIGENCIA:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="vigencia" type="text" wire:model="expire" x-mask="99/99/9999"
                            placeholder="DD/MM/YYYY"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('expire')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="text-gray-600 text-lg mt-2 mb-4">
                    <ul class="list-disc text-lg text-sm ml-4 mt-2">
                        <li>¿Lesiones?</li>
                    </ul>
                </div>
                <div class="grid sm:grid-cols-4 gap-2">
                    <label for="Insignificante"
                        class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="Insignificante" value="Insignificante" name="lesiones"
                                wire:model="injuries" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Fatal</div>
                    </label>
                    <label for="Leve_lesion"
                        class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="Leve_lesion" value="Leve" wire:model="injuries"
                                name="lesiones" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Grave</div>
                    </label>
                    <label for="Import_lesion"
                        class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="Import_lesion" wire:model="injuries" value="Importante"
                                name="lesiones" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Leve</div>
                    </label>
                    <label for="danger_lesion"
                        class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="danger_lesion" wire:model="injuries" value="Peligroso"
                                name="lesiones" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Ileso</div>
                    </label>
                </div>
                @error('injuries')
                    <span
                        class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                @enderror
                <br>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <label for="name_copiloto" class="font-semibold mb-2 text-sm text-gray-700 block">NOMBRE
                            DEL COPILOTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="name_copiloto" type="text" wire:model="namePilot"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('namePilot')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="nacion_copiloto"
                            class="font-semibold mb-2 text-sm text-gray-700 block">NACIONALIDAD:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model="national_pilot"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($nationalities as $nationalcopilot)
                                <option value="{{ $nationalcopilot->name }}">{{ $nationalcopilot->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('national_pilot')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="class_licens_cop" class="font-semibold mb-2 text-sm text-gray-700 block">LICENCIA
                            CLASE:<span class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model.lazy="licensecopilot" wire:model="license_id_copilot"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="class_licens_cop" value="">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($licenses as $license)
                                <option value="{{ $license->id }}">{{ $license->name }}</option>
                            @endforeach
                        </select>
                        @error('license_id_copilot')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    @if (!is_null($licensetypesCopilot))
                        <div class="flex flex-col mb-2">
                            <label for="type_licens_cop" class="font-semibold mb-2 text-sm text-gray-700 block">TIPO
                                DE
                                LICENCIA:<span class="text-xl text-red-600">*</span>
                            </label>
                            <select
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="type_licens_cop" wire:model="license_type_id_copilot">
                                <option selected>ELIGE UNA OPCIÓN</option>
                                @foreach ($licensetypesCopilot as $licensetype)
                                    <option value="{{ $licensetype->id }}">{{ $licensetype->name }}</option>
                                @endforeach
                            </select>
                            @error('license_type_id_copilot')
                                <span
                                    class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                            @enderror
                        </div>
                    @endif
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="vigencia" class="font-semibold mb-2 text-sm text-gray-700 block">VIGENCIA:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="vigencia" type="text" wire:model="expirePilot" x-mask="99/99/9999"
                            placeholder="DD/MM/YYYY"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('expirePilot')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="text-gray-600 text-lg mt-2 mb-4">
                    <ul class="list-disc text-lg text-sm ml-4 mt-2">
                        <li>¿Lesiones?</li>
                    </ul>
                </div>
                <div class="grid sm:grid-cols-4 gap-2">
                    <label for="Insig_cop"
                        class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="Insig_cop" wire:model="injuriesPilot" value="Insignificante"
                                name="lesiones_cop" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Fatal</div>
                    </label>
                    <label for="Leve_lesion_cop"
                        class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="Leve_lesion_cop" wire:model="injuriesPilot" value="Leve"
                                name="lesiones_cop" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Grave</div>
                    </label>
                    <label for="Import_lesion_cop"
                        class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="Import_lesion_cop" wire:model="injuriesPilot"
                                value="Importante" name="lesiones_cop"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Leve</div>
                    </label>
                    <label for="danger_lesion_cop"
                        class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="danger_lesion_cop" wire:model="injuriesPilot"
                                value="Peligroso" name="lesiones_cop"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Ileso</div>
                    </label>
                </div>
                @error('injuriesPilot')
                    <span
                        class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                @enderror
                <div class="text-gray-600 text-lg mt-2 mb-4">
                    <ul class="list-disc text-lg text-sm ml-4 mt-2">
                        <li>DATOS DE PASAJEROS: ¿Lesiones?</li>
                    </ul>
                </div>
                <div class="grid sm:grid-cols-4 gap-2">
                    <label for="Insig_pas"
                        class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="Insig_pas" wire:model="injuriesPassengers"
                                value="Insignificante" name="lesiones_pass"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Fatal</div>
                    </label>
                    <label for="Leve_lesion_pas"
                        class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="Leve_lesion_pas" wire:model="injuriesPassengers"
                                value="Leve" name="lesiones_pass"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Grave</div>
                    </label>
                    <label for="Import_lesion_pas"
                        class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="Import_lesion_pas" wire:model="injuriesPassengers"
                                value="Importante" name="lesiones_pass"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Leve</div>
                    </label>
                    <label for="danger_lesion_pas"
                        class="flex p-3 block w-full bg-white border border-gray-300 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="danger_lesion_pas" wire:model="injuriesPassengers"
                                value="Peligroso" name="lesiones_pass"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Ileso</div>
                    </label>
                    @error('injuriesPassengers')
                        <span
                            class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            DATOS DEL VUELO:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <label for="origen_vuelo" class="font-semibold mb-2 text-sm text-gray-700 block">ORIGEN
                            DE
                            VUELO:<span class="text-xl text-red-600">*</span>
                        </label>

                        <select wire:model.lazy="origen_vuelo" wire:model="forigin_id"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($forigins as $forigin)
                                <option value="{{ $forigin->id }}">{{ $forigin->name }}</option>
                            @endforeach
                        </select>
                        @error('forigin_id')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="destino_vuelo" class="font-semibold mb-2 text-sm text-gray-700 block">DESTINO
                            DEL VUELO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model="fdestination_id"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($fdestinations as $fdestination)
                                <option value="{{ $fdestination->id }}">{{ $fdestination->name }}</option>
                            @endforeach
                        </select>
                        @error('fdestination_id')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <label for="mercacias_peligrosas"
                            class="font-semibold mb-2 text-sm text-gray-700 block">MERCANCÍAS
                            PELIGROSAS A
                            BORDO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="mercacias_peligrosas" type="text" wire:model="commodity"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('commodity')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="consite_en" class="font-semibold mb-2 text-sm text-gray-700 block">CONSISTENTE
                            EN:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="consite_en" type="text" wire:model="descriptionInvolved"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('descriptionInvolved')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="comen_observ" class="font-semibold mb-2 text-sm text-gray-700 block">COMENTARIOS
                            U
                            OBSERVACIONES:<span class="text-xl text-red-600">*</span>
                        </label>
                        <textarea wire:model="descriptionInvolved"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            name="" id="comen_observ" class="form-control" rows="3"></textarea>
                        @error('descriptionInvolved')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            {{-- CAMPOS CON VALIDACIONES EPICA 37 (TERCERA VALIDACIÓN) --}}
            <div
                x-show="sub_menu_event == '2' && sub_menu_event > 0 && involved_event === '1' ||sub_menu_event == '3' && sub_menu_event > 0 && involved_event === '1'||sub_menu_event >= 5 && sub_menu_event < 8 && sub_menu_event > 0 && involved_event === '1'||sub_menu_event >= 11 && sub_menu_event < 14 && sub_menu_event > 0 && involved_event === '1'||sub_menu_event == '19' && sub_menu_event > 0 && involved_event === 'SI'||sub_menu_event == '21' && sub_menu_event > 0 && involved_event === '1'||sub_menu_event >= 30 && sub_menu_event < 32 && sub_menu_event > 0 && involved_event === '1'||sub_menu_event == '33' && sub_menu_event > 0 && involved_event === '1'||sub_menu_event >= 35 && sub_menu_event < 39 && sub_menu_event > 0 && involved_event === '1'||sub_menu_event == '47' && sub_menu_event > 0 && involved_event === 'SI'||sub_menu_event == '51' && sub_menu_event > 0 && involved_event === '1'||sub_menu_event >= 56 && sub_menu_event < 59 && sub_menu_event > 0 && involved_event === '1'||sub_menu_event >= 70 && sub_menu_event < 76 && sub_menu_event > 0 && involved_event === '1'||sub_menu_event == '91' && sub_menu_event > 0 && involved_event === '1'||sub_menu_event == '99' && sub_menu_event > 0 && involved_event === '1'">
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-100 h-full bg-blue-800"></div>
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-3 mb-2">
                        <h1 class="sm:w-2/2 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                            IDENTIFICACIÓN DE LA AERONAVE:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="type_fly_indicent" class="font-semibold mb-2 text-sm text-gray-700 block">TIPO
                            DE AERONAVE:<span class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model.lazy="tipo" wire:model="type_id_proc"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($tipos as $tipo)
                                <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                            @endforeach
                        </select>
                        @error('type_id_proc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="marca_incident2"
                            class="font-semibold mb-2 text-sm text-gray-700 block">MARCA:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model.lazy="marca" wire:model="brand_id_proc"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        @error('brand_id_proc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="modelo_incident2"
                            class="font-semibold mb-2 text-sm text-gray-700 block">MODELO:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model="amodel_id_proc"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($amodels as $amodel)
                                <option value="{{ $amodel->id }}">{{ $amodel->name }}</option>
                            @endforeach
                        </select>
                        @error('amodel_id_proc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <div class="flex flex-col">
                        <label for="nserie" class="font-semibold mb-2 text-sm text-gray-700 block">NÚMERO DE
                            SERIE:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="nserie" type="text" wire:model="serialNumberProc"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('serialNumberProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold mb-2 text-sm text-gray-700 block">TIPO DE
                            MATRICULA:<span class="text-xl text-red-600">*</span>
                        </label>
                        <select x-model="type_tuition2" wire:model="typeLicensePlateProc"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            <option value="NACIONAL">NACIONAL</option>
                            <option value="EXTRANJERA">EXTRANJERA</option>
                        </select>
                        @error('typeLicensePlateProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label class="font-semibold mb-2 text-sm text-gray-700 block">MATRICULA:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <div>
                            <input x-mask:dynamic="type_tuition2.toString().startsWith('NACI') ? '**-***' : '' "
                                type="text" wire:model="licensePlateProc"
                                class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300">
                        </div>
                        @error('licensePlateProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <label for="prop_oper2" class="font-semibold mb-2 text-sm text-gray-700 block">OPERADOR:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="prop_oper2" type="text" wire:model="ownerProc"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('ownerProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="date_event_incident" class="font-semibold mb-2 text-sm text-gray-700 block">FECHA
                            DEL EVENTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="date_event_incident" type="date" wire:model="dateStartInvolvedProc"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('dateStartInvolvedProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="base_oper2" class="font-semibold mb-2 text-sm text-gray-700 block">BASE
                            DE OPERACIÓN:<span class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model="boperation_id_proc"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($boperations as $boperation)
                                <option value="{{ $boperation->id }}">{{ $boperation->name }}</option>
                            @endforeach
                        </select>
                        @error('boperation_id_proc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            MOTORES INVOLUCRADOS EN LA DIFICULTAD EN SERVICIO:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <label for="brand_engine" class="font-semibold mb-2 text-sm text-gray-700 block">MARCA:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="brand_engine" type="text" wire:model="brandProc"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('brandProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="model_engine" class="font-semibold mb-2 text-sm text-gray-700 block">MODELO:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="model_engine" type="text" wire:model="modelProc"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('modelProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col py-3">
                    <label for="prop_oper2" class="font-semibold mb-2 text-sm text-gray-700 block">A) INDIQUE EL
                        NÚMERO DE SERIE (S) DEL MOTOR INVOLUCRADO:<span class="text-xl text-red-600">*</span>
                    </label>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <div class="flex items-center mb-5">
                            <label for="pos1"
                                class="inline-block w-15 mr-5 text-right 
                                 font-bold text-gray-600">POS
                                1: </label>
                            <input type="text" id="pos1" placeholder="N. SERIE" wire:model="posProc1"
                                class="flex-1 py-2 border-b-2 border-gray-400 focus:border-blue-400 text-gray-900 placeholder-gray-400 outline-none">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center mb-5">
                            <label for="pos2"
                                class="inline-block w-15 mr-5 text-right 
                                 font-bold text-gray-600">POS
                                2: </label>
                            <input type="text" id="pos2" placeholder="N. SERIE" wire:model="posProc2"
                                class="flex-1 py-2 border-b-2 border-gray-400 focus:border-blue-400 text-gray-900 placeholder-gray-400 outline-none">
                        </div>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <div class="flex items-center mb-5">
                            <label for="pos3"
                                class="inline-block w-15 mr-5 text-right 
                                 font-bold text-gray-600">POS
                                3: </label>
                            <input type="text" id="pos3" placeholder="N. SERIE" wire:model="posProc3"
                                class="flex-1 py-2 border-b-2 border-gray-400 focus:border-blue-400 text-gray-900 placeholder-gray-400 outline-none">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center mb-5">
                            <label for="pos4"
                                class="inline-block w-15 mr-5 text-right 
                                 font-bold text-gray-600">POS
                                4: </label>
                            <input type="text" id="pos4" placeholder="N. SERIE" wire:model="posProc4"
                                class="flex-1 py-2 border-b-2 border-gray-400 focus:border-blue-400 text-gray-900 placeholder-gray-400 outline-none">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            HÉLICES INVOLUCRADAS EN LA DIFICULTAD EN SERVICIO:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <label for="brand_engine2" class="font-semibold mb-2 text-sm text-gray-700 block">MARCA:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="brand_engine2" type="text" wire:model="brandProcEngine"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('brandProcEngine')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="model_engine2"
                            class="font-semibold mb-2 text-sm text-gray-700 block">MODELO:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="model_engine2" type="text" wire:model="modelProcEngine"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('modelProcEngine')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col py-3">
                    <label for="prop_oper2" class="font-semibold mb-2 text-sm text-gray-700 block">A) INDIQUE EL
                        NÚMERO DE SERIE (S) DE LAS HÉLICES INVOLUCRADO:<span class="text-xl text-red-600">*</span>
                    </label>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <div class="flex items-center mb-5">
                            <label for="pos5"
                                class="inline-block w-15 mr-5 text-right 
                                 font-bold text-gray-600">POS
                                1: </label>
                            <input type="text" id="pos5" placeholder="N. SERIE"
                                wire:model="posProcEngine1"
                                class="flex-1 py-2 border-b-2 border-gray-400 focus:border-blue-400 text-gray-900 placeholder-gray-400 outline-none">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center mb-5">
                            <label for="pos6"
                                class="inline-block w-15 mr-5 text-right 
                                 font-bold text-gray-600">POS
                                2: </label>
                            <input type="text" id="pos6" placeholder="N. SERIE"
                                wire:model="posProcEngine2"
                                class="flex-1 py-2 border-b-2 border-gray-400 focus:border-blue-400 text-gray-900 placeholder-gray-400 outline-none">
                        </div>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <div class="flex items-center mb-5">
                            <label for="pos7"
                                class="inline-block w-15 mr-5 text-right 
                                 font-bold text-gray-600">POS
                                3: </label>
                            <input type="text" id="pos7" placeholder="N. SERIE"
                                wire:model="posProcEngine3"
                                class="flex-1 py-2 border-b-2 border-gray-400 focus:border-blue-400 text-gray-900 placeholder-gray-400 outline-none">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center mb-5">
                            <label for="pos8"
                                class="inline-block w-15 mr-5 text-right 
                                 font-bold text-gray-600">POS
                                4: </label>
                            <input type="text" id="pos8" placeholder="N. SERIE"
                                wire:model="posProcEngine4"
                                class="flex-1 py-2 border-b-2 border-gray-400 focus:border-blue-400 text-gray-900 placeholder-gray-400 outline-none">
                        </div>
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="name_signature1" class="font-semibold mb-2 text-sm text-gray-700 block">NOMBRE Y
                            FIRMA DE QUIEN LABORA EL REPORTE:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="name_signature1" type="text" wire:model=""
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                    </div>
                </div>
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            FASE EN TIERRA:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-5 gap-2">
                    <label for="parked"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="parked" value="ESTACIONADO" name="earth_phase"
                                wire:model="earthProc" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Estacionado</div>
                    </label>
                    <label for="maintenance"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="maintenance" value="MANTENIMIENTO" name="earth_phase"
                                wire:model="earthProc" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Mantenimiento</div>
                    </label>
                    <label for="trailer"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="trailer" value="REMOLQUE" name="earth_phase"
                                wire:model="earthProc" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Remolque</div>
                    </label>
                    <label for="rolling"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="rolling" value="RODANDO" name="earth_phase"
                                wire:model="earthProc" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Rodando</div>
                    </label>
                    <label for="unattended"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="unattended" value="DESATENDIDA" name="earth_phase"
                                wire:model="earthProc" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Desatendida</div>
                    </label>
                    @error('earthProc')
                        <span
                            class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="des_incident2"
                            class="font-semibold mb-2 text-sm text-gray-700 block">DESCRIPCIÓN
                            DE LA DIFICULTAD EN SERVICIO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <textarea
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            id="des_incident2" wire:model="descriptionProc" class="form-control" rows="3"></textarea>
                        @error('descriptionProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="origin_cause-root"
                            class="font-semibold mb-2 text-sm text-gray-700 block">ORIGEN/CAUSA-RAIZ PROBABLE DE LA
                            DIFICULTAD EN SERVICIO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <textarea
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            id="origin_cause-root" wire:model="origenProc" class="form-control" rows="3"></textarea>
                        @error('origenProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="corrective_action" class="font-semibold mb-2 text-sm text-gray-700 block">ACCIÓN
                            CORRECTIVA TOMADA:<span class="text-xl text-red-600">*</span>
                        </label>
                        <textarea
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            id="corrective_action" wire:model="actionProc" class="form-control" rows="3"></textarea>
                        @error('actionProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="part_component"
                            class="font-semibold mb-2 text-sm text-gray-700 block">ESPECIFICAR LA PARTE O COMPONENTE
                            QUE CAUSO LA DIFICULTAD EN SERVICIO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <textarea
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            id="part_component" wire:model="componentProc" class="form-control" rows="2"></textarea>
                        @error('componentProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="np_part" class="font-semibold mb-2 text-sm text-gray-700 block">N/P DE LA PARTE
                            O COMPONENTE QUE CAUSO LA DIFICULTAD EN SERVICIO:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="np_part" type="text" wire:model="nPProc"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('nPProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="ns_part" class="font-semibold mb-2 text-sm text-gray-700 block">N/S DE LA PARTE
                            O COMPONENTE QUE CAUSO LA DIFICULTAD EN SERVICIO:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="ns_part" type="text" wire:model="nsPProc"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('nsPProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="component_manufacturer"
                            class="font-semibold mb-2 text-sm text-gray-700 block">FABRICANTE DE LA PARTE O
                            COMPONENTE QUE CAUSO LA DIFICULTAD EN SERVICIO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="component_manufacturer" type="text" wire:model="factoryProc"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('factoryProc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col py-2">
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-lg mb-2 sm:mb-0">
                            NORMA DE CONTROL:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-4 gap-2">
                    <div class="flex flex-col">
                        <label for="hour_norms" class="font-semibold mb-2 text-sm text-gray-700 block">HORAS:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input id="hour_norms" type="text" wire:model="hourControl"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300">
                        @error('hourControl')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="cycles_norms"
                            class="font-semibold mb-2 text-xs text-gray-700 block">CICLOS:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input id="cycles_norms" type="text" wire:model="cycleControl"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300">
                        @error('cycleControl')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="days_norms" class="font-semibold mb-2 text-xs text-gray-700 block">DIAS:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input id="days_norms" type="text" wire:model="daysControl"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300">
                        @error('daysControl')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="other_norms" class="font-semibold mb-2 text-xs text-gray-700 block">OTROS:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input id="other_norms" type="text" wire:model="otherControl"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300">
                    </div>
                </div>
                <div class="flex flex-col py-2">
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-lg mb-2 sm:mb-0">
                            TIEMPOS O CICLOS DE COMPONENTE O PARTE:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-4 gap-2">
                    <div class="flex flex-col">
                        <label for="t_t" class="font-semibold mb-2 text-sm text-gray-700 block">T.T:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input id="t_t" type="text" wire:model="ttComponent"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300">
                        @error('ttComponent')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="ct_tc" class="font-semibold mb-2 text-xs text-gray-700 block">C.T/TC:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input id="ct_tc" type="text" wire:model="ctComponent"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300">
                        @error('ctComponent')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="turm_tso" class="font-semibold mb-2 text-sm text-gray-700 block">T.U.R.M /
                            TSO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input id="turm_tso" type="text" wire:model="turmComponent"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300">
                        @error('turmComponent')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="curm_cso" class="font-semibold mb-2 text-sm text-gray-700 block">C.U.R.M /
                            CSO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input id="curm_cso" type="text" wire:model="curmComponent"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300">
                        @error('curmComponent')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="aeronautical_workshop"
                            class="font-semibold mb-2 text-sm text-gray-700 block">TALLER AERONÁUTICO RESPONSABLE
                            DEL MANTENIMIENTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="aeronautical_workshop" type="text" wire:model="workshop"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('workshop')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col">
                    <label for="code_ata" class="font-semibold mb-2 text-sm text-gray-700 block">CÓDIGO
                        ATA:<span class="text-xl text-red-600">*</span>
                    </label>
                    <select x-ref="code_ata" wire:model="code_ata_id"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>ELIGE UNA OPCIÓN</option>
                        @foreach ($codeAtas as $codigo)
                            <option value="{{ $codigo->id }}">{{ $codigo->name }}</option>
                        @endforeach
                    </select>
                    @error('code_ata_id')
                        <span
                            class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="name_signature" class="font-semibold mb-2 text-sm text-gray-700 block">NOMBRE Y
                            FIRMA DE QUIEN LABORA EL REPORTE:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="name_signature" type="text" wire:model=""
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="name_signature" class="font-semibold mb-2 text-sm text-gray-700 block">STC O
                            ESTUDIO TÉCNICO SI LA DIFICULTAD EN SERVICIO ESTA RELACIONADA CON UNA MODIFICACIÓN:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="name_signature" type="text" wire:model="stc"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="info_add" class="font-semibold mb-2 text-sm text-gray-700 block">DATOS O
                            INFORMACIÓN ADICIONAL QUE CONSIDERE PERTINENTE INFORMAR:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <textarea wire:model="considerInformation"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            id="info_add" class="form-control" rows="2"></textarea>
                    </div>
                </div>
            </div>
            {{-- CAMPOS CON VALIDACIONES EPICA 40 (CUARTA VALIDACIÓN) --}}
            <div
                x-show="sub_menu_event === '45' && involved_event === '1'||sub_menu_event === '45' && involved_event === '2'">
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-100 h-full bg-blue-800"></div>
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-3 mb-2">
                        <h1 class="sm:w-2/2 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                            REPORTE DE:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <label for="pilot"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="pilot" value="PILOTO" wire:model="typeReport"
                                name="type_report2" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Piloto</div>
                    </label>
                    <label for="controller"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="controller" value="CONTROLADOR" wire:model="typeReport"
                                name="type_report2" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Controlador</div>
                    </label>
                    @error('typeReport')
                        <span
                            class="text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid sm:grid-cols-4 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="date_event_incident3"
                            class="font-semibold mb-2 text-sm text-gray-700 block">FECHA
                            DEL EVENTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="date_event_incident3" type="date" wire:model="dateStartRVSM"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('dateStartRVSM')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="time_event_incidente3"
                            class="font-semibold mb-2 text-sm text-gray-700 block">HORA
                            DEL EVENTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="time_event_incidente3" type="time" wire:model="hourStartRVSM"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('hourStartRVSM')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="type_deviation" class="font-semibold mb-2 text-sm text-gray-700 block">TIPO DE
                            DESVIACIÓN:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="type_deviation" type="text" wire:model="typeDeviation"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('typeDeviation')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="route_segment" class="font-semibold mb-2 text-sm text-gray-700 block">SEGMENTO
                            DE RUTA:<span class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model="routeSegment"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            <option value="DESPEGUE">DESPEGUE</option>
                            <option value="ELEVAR">ASCENSO</option>
                            <option value="CRUCERO">CRUCERO</option>
                            <option value="DESCENDENCIA">DESCENSO</option>
                            <option value="APROXIMACIÓN">APROXIMACIÓN</option>
                            <option value="ATERRIZAJE">ATERRIZAJE</option>
                        </select>
                        @error('routeSegment')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="acc" class="font-semibold mb-2 text-sm text-gray-700 block">ACC:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="acc" type="text" wire:model="acc"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('acc')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="deviation" class="font-semibold mb-2 text-sm text-gray-700 block">CAUSAS DE
                            LA DESVIACIÓN:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="deviation" type="text" wire:model="causes"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('causes')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-3 mb-2">
                        <h1 class="sm:w-2/2 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                            DATOS DE LA AERONAVE:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="aircraft_identification"
                            class="font-semibold mb-2 text-sm text-gray-700 block">IDENTIFICACIÓN DE AERONAVE:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="aircraft_identification" type="text" wire:model="airplaneIdenti"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('airplaneIdenti')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="Operator_Owner:"
                            class="font-semibold mb-2 text-sm text-gray-700 block">OPERADOR/
                            PROPIETARIO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="Operator_Owner" type="text" wire:model="ownerRVSM"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('ownerRVSM')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="type_fly_indicent3" class="font-semibold mb-2 text-sm text-gray-700 block">TIPO
                            DE AERONAVE:<span class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model.lazy="tipo" wire:model="type_id_rvsm"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($tipos as $tipo)
                                <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                            @endforeach
                        </select>
                        @error('type_id_rvsm')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="brand_incident3"
                            class="font-semibold mb-2 text-sm text-gray-700 block">MARCA:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model.lazy="marca" wire:model="brand_id_rvsm"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        @error('brand_id_rvsm')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="model_incident3"
                            class="font-semibold mb-2 text-sm text-gray-700 block">MODELO:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model="amodel_id_rvsm"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($amodels as $amodel)
                                <option value="{{ $amodel->id }}">{{ $amodel->name }}</option>
                            @endforeach
                        </select>
                        @error('amodel_id_rvsm')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="level_fly" class="font-semibold mb-2 text-sm text-gray-700 block">NIVEL DE VUELO
                            ASIGNADO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="level_fly" type="text" wire:model="assignedFlight"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('assignedFlight')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="level_fly_actual:" class="font-semibold mb-2 text-sm text-gray-700 block">NIVEL
                            DE
                            VUELO ACTUAL:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="level_fly_actual" type="text" wire:model="currentFlight"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('currentFlight')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="deviation_error" class="font-semibold mb-2 text-sm text-gray-700 block">ERROR DE
                            DESVIACIÓN (FT):<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="deviation_error" type="text" wire:model="mistake"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('mistake')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="time_elapsed" class="font-semibold mb-2 text-sm text-gray-700 block">TIEMPO
                            TRANSCURRIDO EN EL NIVEL DE VUELO/DERROTA INCORRECTO (A):<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="time_elapsed" type="text" wire:model="timeLine"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('timeLine')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="postion_deviation"
                            class="font-semibold mb-2 text-sm text-gray-700 block">POSICIÓN
                            DONDE SE OBSERVO LA DESVIACIÓN:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="postion_deviation" type="text" wire:model="deviationPosition"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('deviationPosition')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="traffic_conflict" class="font-semibold mb-2 text-sm text-gray-700 block">HUBO
                            OTRO
                            TRÁFICO EN CONFLICTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="traffic_conflict" type="text" wire:model="trafficConflict"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('trafficConflict')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="accion_atcpilot" class="font-semibold mb-2 text-sm text-gray-700 block">ACCIÓN
                            TOMADA POR
                            ATC/PILOTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <textarea wire:model="actionATC"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            id="accion_atcpilot" class="form-control" rows="2"></textarea>
                        @error('actionATC')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="other_comments" class="font-semibold mb-2 text-sm text-gray-700 block">OTROS
                            COMENTARIOS:<span class="text-xl text-red-600">*</span>
                        </label>
                        <textarea wire:model="otherComments"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            id="other_comments" class="form-control" rows="2"></textarea>
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="name_signature3" class="font-semibold mb-2 text-sm text-gray-700 block">NOMBRE Y
                            FIRMA:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="name_signature3" type="text" wire:model=""
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <label for="place_incedent1"
                            class="font-semibold mb-2 text-sm text-gray-700 block">LUGAR:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model.lazy="estado" wire:model="state_id_rvsm"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                        @error('state_id_rvsm')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="municipio_incident2"
                            class="font-semibold mb-2 text-sm text-gray-700 block">MUNICIPIO:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model="municipal_id_rvsm"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($municipals as $municipal)
                                <option value="{{ $municipal->id }}">{{ $municipal->name }}</option>
                            @endforeach
                        </select>
                        @error('municipal_id_rvsm')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="date_incidente5" class="font-semibold mb-2 text-sm text-gray-700 block">FECHA DE
                            LA
                            NOTIFICACION:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="date_incidente5" type="date" wire:model="dateNotification"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('dateNotification')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            {{-- CAMPOS CON VALIDACIONES EPICA 42 (CUARTA VALIDACIÓN) --}}
            <div
                x-show="sub_menu_event === '54' && involved_event === '1'||sub_menu_event === '54' && involved_event === '2'">
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-100 h-full bg-blue-800"></div>
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-3 mb-2">
                        <h1 class="sm:w-2/2 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                            LLENADO DE REPORTE</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="modelo" class="font-semibold mb-2 text-sm text-gray-700 block">TIPO DE
                            MATRICULA:<span class="text-xl text-red-600">*</span>
                        </label>
                        <select x-model="type_tuition3" wire:model="typeLicensePlateBird"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            <option value="NACIONAL">NACIONAL</option>
                            <option value="EXTRANJERA">EXTRANJERA</option>
                        </select>
                        @error('typeLicensePlateBird')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="modelo" class="font-semibold mb-2 text-sm text-gray-700 block">MATRICULA:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <div>
                            <input wire:model="licensePlateBird"
                                x-mask:dynamic="type_tuition3.toString().startsWith('NACI') ? '**-***' : ''  "
                                type="text"
                                class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300">
                            @error('licensePlateBird')
                                <span
                                    class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="type_fly_indicent4" class="font-semibold mb-2 text-sm text-gray-700 block">TIPO
                            DE AERONAVE:<span class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model.lazy="tipo" wire:model="type_id_bird"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($tipos as $tipo)
                                <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                            @endforeach
                        </select>
                        @error('type_id_bird')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="marca_incident4"
                            class="font-semibold mb-2 text-sm text-gray-700 block">MARCA:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model.lazy="marca" wire:model="brand_id_bird"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        @error('brand_id_bird')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="modelo_incident4"
                            class="font-semibold mb-2 text-sm text-gray-700 block">MODELO:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model="amodel_id_bird"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($amodels as $amodel)
                                <option value="{{ $amodel->id }}">{{ $amodel->name }}</option>
                            @endforeach
                        </select>
                        @error('amodel_id_bird')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="type_fly_indicent4" class="font-semibold mb-2 text-sm text-gray-700 block">MOTOR
                            <span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="date_incidente5" type="text" wire:model="engineBird"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('engineBird')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="marca_incident4"
                            class="font-semibold mb-2 text-sm text-gray-700 block">MARCA:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="date_incidente5" type="text" wire:model="brandProcEngineBird"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('brandProcEngineBird')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="modelo_incident4"
                            class="font-semibold mb-2 text-sm text-gray-700 block">MODELO:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="date_incidente5" type="text" wire:model="modelProcEngineBird"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('modelProcEngineBird')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="modelo_incident4" class="font-semibold mb-2 text-sm text-gray-700 block">NOMBRE
                            DEL
                            OPERADOR:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="date_incidente5" type="text" wire:model="ownerBird"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('ownerBird')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-4 gap-2">
                    <div class="flex flex-col mb-2">
                        <label for="date_event_incident4"
                            class="font-semibold mb-2 text-sm text-gray-700 block">FECHA
                            DEL EVENTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="date_event_incident4" type="date" wire:model="dateStartBird"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('dateStartBird')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="time_event_incidente4"
                            class="font-semibold mb-2 text-sm text-gray-700 block">HORA
                            DEL EVENTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="time_event_incidente4" type="time" wire:model="hourStartBird"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('hourStartBird')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="base_oper4" class="font-semibold mb-2 text-sm text-gray-700 block">NOMBRE DEL
                            AEROPUERTO:<span class="text-xl text-red-600">*</span>
                        </label>
                        <select wire:model="boperation_id_bird"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($boperations as $aeropuertos)
                                <option value="{{ $aeropuertos->id }}">{{ $aeropuertos->name }}</option>
                            @endforeach
                        </select>
                        @error('boperation_id_bird')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="clue_used" class="font-semibold mb-2 text-sm text-gray-700 block">PISTA
                            UTILIZADA:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="clue_used" type="text" wire:model="runway"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('runway')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="location_route" class="font-semibold mb-2 text-sm text-gray-700 block">UBICACIÓN
                            EN
                            RUTA:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="location_route" type="text" wire:model="location"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('location')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <label for="height" class="font-semibold mb-2 text-sm text-gray-700 block">ALTURA:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="height" type="text" wire:model="height"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('height')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="Speed" class="font-semibold mb-2 text-sm text-gray-700 block">VELOCIDAD:<span
                                class="text-xl text-red-600">*</span>
                        </label>
                        <input name="Speed" type="text" wire:model="speed"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('speed')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                    <div class="flex flex-col py-3">
                        <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                            <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                                FASE DE VUELO:</h1>
                        </div>
                    </div>
                    <div class="grid sm:grid-cols-4 gap-2">
                        <label for="parked2"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="parked2" value="ESTACIONADO"
                                    wire:model="flightPhases" name="flight_phases"
                                    class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Estacionado</div>
                        </label>
                        <label for="filming"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="filming" wire:model="flightPhases" value="EN RODAJE"
                                    name="flight_phases"
                                    class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">En rodaje</div>
                        </label>
                        <label for="takeoff"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="takeoff" wire:model="flightPhases" value="DESPEGUE"
                                    name="flight_phases"
                                    class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Despegue</div>
                        </label>
                        <label for="ascent"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="ascent" wire:model="flightPhases" value="ASCENSO"
                                    name="flight_phases"
                                    class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Ascenso</div>
                        </label>
                    </div>
                    <div class="grid sm:grid-cols-4 gap-2">
                        <label for="on_route"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="on_route" wire:model="flightPhases" value="EN RUTA"
                                    name="flight_phases"
                                    class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">En ruta</div>
                        </label>
                        <label for="decline"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="decline" wire:model="flightPhases" value="DESCENSO"
                                    name="flight_phases"
                                    class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Descenso</div>
                        </label>
                        <label for="approach"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="approach" wire:model="flightPhases"
                                    value="APROXIMACIÓN" name="flight_phases"
                                    class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Aproximación</div>
                        </label>
                        <label for="landing"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input type="radio" id="landing" wire:model="flightPhases"
                                    value="ATERRIZAJE" name="flight_phases"
                                    class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Aterrizaje</div>
                        </label>
                    </div>
                    @error('flightPhases')
                        <span
                            class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                </div>
                <div class="flex flex-col py-3">
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            PARTE (S) DE LA AERONAVE IMPACTADA (S) O DAÑADA (S):</h1>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div
                                class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-white dark:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase dark:text-gray-400">
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase dark:text-gray-400">
                                                IMPACTADA</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase dark:text-gray-400">
                                                DAÑADA</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700">
                                        <tr class="bg-gray-100">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                RADOMO</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="radomo_imp" type="radio" value="IMPACTADA"
                                                    wire:model="radome" name="radomo"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input checked id="radomo_dang" type="radio" value="DAÑADA"
                                                    wire:model="radome" name="radomo"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                PARABRISAS</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="windshield_imp" type="radio" value="IMPACTADA"
                                                    wire:model="windshield" name="parabrisas"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="windshield_dang" type="radio" value="DAÑADA"
                                                    wire:model="windshield" name="parabrisas"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>

                                        <tr class="bg-gray-100">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                NARIZ (EXCEPTO A Y B)</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="nariz_imp" type="radio" value="IMPACTADA"
                                                    wire:model="noseAB" name="nariz"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="nariz_dang" type="radio" value="DAÑADA"
                                                    wire:model="noseAB" name="nariz"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                MOTOR NO. 1</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="engine1_imp" type="radio" value="IMPACTADA"
                                                    wire:model="engine1" name="engine1"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="engine1_dang" type="radio" value="DAÑADA"
                                                    wire:model="engine1" name="engine1"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-100">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                MOTOR NO. 2</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="engine2_imp" type="radio" value="IMPACTADA"
                                                    wire:model="engine2" name="engine2"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="engine2_dang" type="radio" value="DAÑADA"
                                                    wire:model="engine2" name="engine2"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                MOTOR NO. 3</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="engine3_imp" type="radio" value="IMPACTADA"
                                                    wire:model="engine3" name="engine3"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="engine3_dang" type="radio" value="DAÑADA"
                                                    wire:model="engine3" name="engine3"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-100">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                MOTOR NO. 4</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="engine4_imp" type="radio" value="IMPACTADA"
                                                    wire:model="engine4" name="engine4"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="engine4_dang" type="radio" value="DAÑADA"
                                                    wire:model="engine4" name="engine4"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                HELICE</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="propeller_imp" type="radio" value="IMPACTADA"
                                                    wire:model="propeller" name="propeller_h"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="propeller_dang" type="radio" value="DAÑADA"
                                                    wire:model="propeller" name="propeller_h"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-100">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                ALA/ROTOR</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="wing_roto_impr" type="radio" value="IMPACTADA"
                                                    wire:model="rotor" name="wing_rotor"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="wing_rotor_dang" type="radio" value="DAÑADA"
                                                    wire:model="rotor" name="wing_rotor"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                FUSELAJE</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="fuselage_impr" type="radio" value="IMPACTADA"
                                                    wire:model="fuselage" name="fuselage"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="fuselage_dang" type="radio" value="DAÑADA"
                                                    wire:model="fuselage" name="fuselage"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-100">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                TREN DE ATERRIZAJE</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="undercarriage_imp" type="radio" value="IMPACTADA"
                                                    wire:model="undercarriage" name="undercarriage"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="undercarriage_dang" type="radio" value="DAÑADA"
                                                    wire:model="undercarriage" name="undercarriage"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                COLA</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="plane_tail_imp" type="radio" value="IMPACTADA"
                                                    wire:model="tail" name="plane_tail"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="plane_tail_dang" type="radio" value="DAÑADA"
                                                    wire:model="tail" name="plane_tail"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-100">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                LUCES</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="plane_lights_imp" type="radio" value="IMPACTADA"
                                                    wire:model="lights" name="plane_lights"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="plane_lights_dang" type="radio" value="DAÑADA"
                                                    wire:model="lights" name="plane_lights"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                OTRA <input type="text" id="plane_other_text" placeholder=""
                                                    wire:model="otherBirdResult"
                                                    class="flex-1 py-2 border-b-2 border-gray-400 focus:border-blue-400 text-gray-900 placeholder-gray-400 outline-none">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="plane_other_imp" type="radio" value="IMPACTADA"
                                                    wire:model="otherBird" name="plane_other"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="plane_other_dang" type="radio" value="DAÑADA"
                                                    wire:model="otherBird" name="plane_other"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col py-3">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                    </div>
                </div>
                <div class="flex flex-col py-2">
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            EFECTO DE EVENTO:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <label for="none"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="none" value="NINGUNO" name="event_effect"
                                wire:model="eventEffect"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Ninguno</div>
                    </label>
                    <label for="discontinued"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="discontinued" value="DESPEGUE DESCONTINUADO"
                                wire:model="eventEffect" name="event_effect"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Despegue descontinuado</div>
                    </label>
                    <label for="precautionary"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="precautionary" value="ATERRIZAJE PRECAUTORIO"
                                wire:model="eventEffect" name="event_effect"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Aterrizaje Precautorio</div>
                    </label>
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <label for="engines"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="engines" value="MOTORES" name="event_effect"
                                wire:model="eventEffect"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Motores</div>
                    </label>
                    <label for="off"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="off" value="APAGADOS" name="event_effect"
                                wire:model="eventEffect"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Apagados</div>
                    </label>
                    <label for="other4"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="other4" wire:model="eventEffect" value="OTRO"
                                name="event_effect" class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Otro:</div>
                        <input type="text" name="event_effect9" wire:model="eventEffectOther"
                            class="flex-1 py-0 border-b-2 border-gray-400 focus:border-blue-400 text-gray-900 placeholder-gray-400 outline-none">
                    </label>
                </div>
                @error('eventEffect')
                    <span
                        class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                @enderror
                <div class="flex flex-col py-2">
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            CONDICIÓN DEL CIELO:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <label for="clear"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="clear" value="DESPEJADO" name="sky_condition"
                                wire:model="skyCondition"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Despejado</div>
                    </label>
                    <label for="partly_cloudy"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="partly_cloudy" value="MEDIO NUBLADO" name="sky_condition"
                                wire:model="skyCondition"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Medio nublado</div>
                    </label>
                    <label for="cloudy"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="cloudy" value="NUBLADO" name="sky_condition"
                                wire:model="skyCondition"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Nublado</div>
                    </label>
                </div>
                @error('skyCondition')
                    <span
                        class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                @enderror
                <div class="flex flex-col py-2">
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            RESTRICCIONES A LA VISIBILIDAD:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <label for="fog"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="fog" value="NIEBLA" name="visibility"
                                wire:model="restrictionsVisibility"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Niebla</div>
                    </label>
                    <label for="rain"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="rain" value="LLUVIA" name="visibility"
                                wire:model="restrictionsVisibility"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Lluvia</div>
                    </label>
                    <label for="snow"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="snow" value="NIEVE" name="visibility"
                                wire:model="restrictionsVisibility"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Nieve</div>
                    </label>
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <label for="none5"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="none5" value="NINGUNA" name="visibility"
                                wire:model="restrictionsVisibility"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Ninguna</div>
                    </label>
                    <label for="other5"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="other5" value="OTRO" name="visibility"
                                wire:model="restrictionsVisibility"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Otro:</div>
                        <input type="text" id="" placeholder="" name="visibility"
                            wire:model="restrictionsOther"
                            class="flex-1 py-0 border-b-2 border-gray-400 focus:border-blue-400 text-gray-900 placeholder-gray-400 outline-none">
                    </label>
                </div>
                @error('restrictionsVisibility')
                    <span
                        class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                @enderror
                <div class="grid sm:grid-cols-1 gap-2 py-2">
                    <div class="flex flex-col">
                        <label for="wildlife_species"
                            class="font-semibold mb-2 text-sm text-gray-700 block">ESPECIES
                            (S) DE
                            FAUNA:
                        </label>
                        <input name="wildlife_species" type="text" wire:model="speciesfauna"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('speciesfauna')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col py-2">
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            NO. DE EJEMPLARES VISTOS Y/O IMPACTADOS:</h1>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div
                                class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-white dark:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase dark:text-gray-400">
                                                NÚMERO</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase dark:text-gray-400">
                                                VISTOS</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase dark:text-gray-400">
                                                IMPACTADOS</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700">
                                        <tr class="bg-gray-100">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                1</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="seen1" type="radio" value="VISTOS"
                                                    wire:model="specimensSeen1" name="specimens_seen1"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="shocked1" type="radio" value="IMPACTADOS"
                                                    wire:model="specimensSeen1" name="specimens_seen1"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                2-10</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="seen2" type="radio" value="VISTOS"
                                                    wire:model="specimensSeen2to10" name="specimens_seen2_10"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="shocked2" type="radio" value="IMPACTADOS"
                                                    wire:model="specimensSeen2to10" name="specimens_seen2_10"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>

                                        <tr class="bg-gray-100">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                11-100</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="seen3" type="radio" value="VISTOS"
                                                    wire:model="specimensSeen11to100" name="specimens_seen11_100"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                <input id="shocked3" type="radio" value="IMPACTADOS"
                                                    wire:model="specimensSeen11to100" name="specimens_seen11_100"
                                                    class="form-radio focus:outline-none focus:shadow-outline">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col py-2">
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            TAMAÑO DE (LOS) EJEMPLAR (ES):</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <label for="little"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="little" value="PEQUEÑO" name="size_especimen"
                                wire:model="specimenSize"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Pequeño</div>
                    </label>
                    <label for="medium"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="medium" value="MEDIANO" name="size_especimen"
                                wire:model="specimenSize"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Mediano</div>
                    </label>
                    <label for="big"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="big" value="GRANDE" name="size_especimen"
                                wire:model="specimenSize"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Grande</div>
                    </label>
                </div>
                @error('specimenSize')
                    <span
                        class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                @enderror
                <div class="flex flex-col py-2">
                    <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                        <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                            EL PILOTO FUE AVISADO SOBRE LA PRESENCIA DE FAUNA:</h1>
                    </div>
                </div>
                <div class="grid sm:grid-cols-3 gap-2">
                    <label for="yes"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="yes" value="SI" name="pilot_warned"
                                wire:model="pilotNotice"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">Si</div>
                    </label>
                    <label for="no"
                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <div class="text-teal-900 mr-3">
                            <input type="radio" id="no" value="NO" name="pilot_warned"
                                wire:model="pilotNotice"
                                class="form-radio focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="select-none text-gray-700">No</div>
                    </label>
                </div>
                @error('pilotNotice')
                    <span
                        class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                @enderror
                <div class="grid sm:grid-cols-1 gap-2 py-3">
                    <div class="flex flex-col">
                        <label for="comen_observ4"
                            class="font-semibold mb-2 text-md text-gray-700 block">OBSERVACIONES
                            (Describir daño, lesiones y otra información pertinente):
                        </label>
                        <textarea wire:model="observationsBird"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300"
                            name="" id="comen_observ4" class="form-control" rows="3"></textarea>
                        @error('observationsBird')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <label class="font-semibold mb-2 text-md text-gray-700 block" font-bold text-gray-600">TIEMPO DE
                    LA AERONAVE FUERA DE OPERACIÓN:</label>
                <div class="grid sm:grid-cols-4 gap-2">
                    <div class="flex flex-col">
                        <div class="flex items-center mb-5">
                            <input type="text" id="time_out_service" placeholder="" wire:model="aircraftOut"
                                class="flex-1 py-2 border-b-2 border-gray-400 focus:border-blue-400 text-gray-900 placeholder-gray-400 outline-none">
                            <label for="time_out_service"
                                class="inline-block w-15 mr-5 text-right 
                                 font-regular text-gray-600">horas</label>
                        </div>
                        @error('aircraftOut')
                            <span
                                class="text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <label for="repair_cost" class="font-semibold mb-2 text-sm text-gray-700 block">COSTO
                            ESTIMADO
                            DE
                            REPARACIÓN ($):
                        </label>
                        <input name="repair_cost" type="text" wire:model="repairCost"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('repairCost')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="cost_estimation"
                            class="font-semibold mb-2 text-sm text-gray-700 block">ESTIMACIÓN
                            DE OTROS
                            COSTOS ($) (Gasolina, Hoteles etc.):
                        </label>
                        <input name="cost_estimation" type="text" wire:model="otherCost"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('otherCost')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="report_for" class="font-semibold mb-2 text-sm text-gray-700 block">REPORTADO
                            POR:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="report_for" type="text" wire:model="reportedBy"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('reportedBy')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 gap-2 py-3">
                    <div class="flex flex-col">
                        <label for="stalls" class="font-semibold mb-2 text-sm text-gray-700 block">PUESTO:
                        </label>
                        <input name="stalls" type="text" wire:model="marketStall"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('marketStall')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="business5" class="font-semibold mb-2 text-sm text-gray-700 block">EMPRESA
                        </label>
                        <input name="business5" type="text" wire:model="company"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('company')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="elaborated_for" class="font-semibold mb-2 text-sm text-gray-700 block">ELABORADO
                            POR:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="elaborated_for" type="text" wire:model="producedBy"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('producedBy')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid sm:grid-cols-1 gap-2">
                    <div class="flex flex-col">
                        <label for="autority_receiving"
                            class="font-semibold mb-2 text-sm text-gray-700 block">AUTORIDAD
                            AERONAUTICA QUE RECIBE:<span class="text-xl text-red-600">*</span>
                        </label>
                        <input name="autority_receiving" type="text" wire:model="authority"
                            class="w-full px-3 py-2 shadow-sm text-gray-800 border rounded outline-none bg-white focus:outline-none focus:bg-white focus:ring ring-blue-300" />
                        @error('authority')
                            <span
                                class="mt-2 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-6 text-right">
        <button wire:click.prevent="save"
            class="text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            FINALIZAR REPORTE
        </button>
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
</div>
