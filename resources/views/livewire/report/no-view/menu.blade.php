<div>
    @section('title', 'SSP')
    <div class="py-12">
        <div class="container mx-auto px-4 py-4 bg-white shadow-xl sm:rounded-lg">
            <div class="mt-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="text-lg font-bold text-gray-700 leading-tight">
                    HOLA {{ $userData[0]->name . ' ' . $userData[0]->apPaterno }}
                </div>
                <div class="text-gray-600 text-lg mt-2 mb-4">
                    Contesta detenidamente las siguientes preguntas.
                </div>
                <div class="text-gray-600 text-lg mt-2 mb-4">
                    <ul class="list-disc text-sm ml-4 mt-2">
                        <li>¿Qué desea reportar?</li>
                    </ul>
                </div>
                <div x-data="{ type: 0 }">
                    <div class="grid sm:grid-cols-3 gap-2">
                        <label for="accient"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input x-ref="type" x-model="type" type="radio" id="accient" value="Accidente"
                                    name="type" class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Accidente</div>
                            <a tabindex="0" role="link" aria-label="tooltip 2"
                                class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative mt-0 md:mt-0 px-4"
                                onmouseover="showTooltip(1)" onfocus="showTooltip(1)" onmouseout="hideTooltip(1)">
                                <div class="cursor-pointer text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div id="tooltip1" role="tooltip"
                                    class="z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg bg-white p-4 hidden">
                                    <svg class="absolute left-0 -ml-2 bottom-0 top-0 h-full" width="9px"
                                        height="16px" viewBox="0 0 9 16" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)"
                                                fill="#FFFFFF">
                                                <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                    <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                        <polygon id="Triangle"
                                                            transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                                            points="4.5 57.5 12.5 66.5 -3.5 66.5">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="text-sm font-bold text-gray-800 pb-1">ACCIDENTE</p>
                                    <p class="text-xs leading-4 text-gray-600 pb-3">Todo suceso por el
                                        que se cause la
                                        muerte o lesiones graves a personas relacionadas con la
                                        operación de una
                                        aeronave o
                                        bien, se ocasionen daños o roturas estructurales a la aeronave,
                                        o por el que la
                                        aeronave desaparezca o se encuentre en un lugar inaccesible</p>
                                </div>
                            </a>
                        </label>
                        <label for="incident"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-900 mr-3">
                                <input x-ref="type" x-model="type" type="radio" id="incident" value="Incidente"
                                    name="type" class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Incidente</div>
                            <a tabindex="0" role="link" aria-label="tooltip 2"
                                class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative mt-0 md:mt-0 px-4"
                                onmouseover="showTooltip(2)" onfocus="showTooltip(2)" onmouseout="hideTooltip(2)">
                                <div class="cursor-pointer text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div id="tooltip2" role="tooltip"
                                    class="z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg bg-white p-4 hidden">
                                    <svg class="absolute left-0 -ml-2 bottom-0 top-0 h-full" width="9px"
                                        height="16px" viewBox="0 0 9 16" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)"
                                                fill="#FFFFFF">
                                                <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                    <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                        <polygon id="Triangle"
                                                            transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                                            points="4.5 57.5 12.5 66.5 -3.5 66.5">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="text-sm font-bold text-gray-800 pb-1">INCIDENTE</p>
                                    <p class="text-xs leading-4 text-gray-600 pb-3">Todo suceso
                                        relacionado con la
                                        utilización de una aeronave, que no llegue a ser un accidente
                                        que afecte o pueda
                                        afectar la seguridad de las operaciones.</p>
                                </div>
                            </a>
                        </label>

                        <label for="danger"
                            class="flex p-3 block w-full bg-white border border-gray-200 rounded-md lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <div class="text-teal-600 mr-3">
                                <input x-ref="type" x-model="type" type="radio" id="danger" value="Peligro"
                                    name="type" class="form-radio focus:outline-none focus:shadow-outline" />
                            </div>
                            <div class="select-none text-gray-700">Peligro</div>
                            <a tabindex="0" role="link" aria-label="tooltip 2"
                                class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative mt-0 md:mt-0 px-4"
                                onmouseover="showTooltip(3)" onfocus="showTooltip(3)" onmouseout="hideTooltip(3)">
                                <div class="cursor-pointer text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div id="tooltip3" role="tooltip"
                                    class="z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg bg-white p-4 hidden">
                                    <svg class="absolute left-0 -ml-2 bottom-0 top-0 h-full" width="9px"
                                        height="16px" viewBox="0 0 9 16" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)"
                                                fill="#FFFFFF">
                                                <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                    <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                        <polygon id="Triangle"
                                                            transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                                            points="4.5 57.5 12.5 66.5 -3.5 66.5">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="text-sm font-bold text-gray-800 pb-1">PELIGRO</p>
                                    <p class="text-xs leading-4 text-gray-600 pb-3">Condición, objeto o
                                        actividad que
                                        podría
                                        causar lesiones al personal, daños al equipamiento o
                                        estructuras, pérdida de
                                        material, o reducción de la habilidad para desempeñar una
                                        función determinada,
                                        misma
                                        que puede amenazar la seguridad operacional.</p>
                                </div>
                            </a>
                        </label>
                    </div>
                    <div x-show="type === 'Accidente'">
                        @livewire('report.no-view.accident', ['id_user' => $id_user])
                    </div>
                    <div x-show="type === 'Incidente'">
                        {{-- @livewire('reportes.save-incident', ['users_reporter_id' => $users_reporter_id]) --}}
                    </div>
                    <div x-show="type === 'Peligro'">
                        {{-- @livewire('reportes.save-danger', ['users_reporter_id' => $users_reporter_id]) --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // function app() {
        //     return {
        //         step: 2,
        //     }
        // }

        function showTooltip(flag) {
            switch (flag) {
                case 1:
                    document.getElementById("tooltip1").classList.remove("hidden");
                    break;
                case 2:
                    document.getElementById("tooltip2").classList.remove("hidden");
                    break;
                case 3:
                    document.getElementById("tooltip3").classList.remove("hidden");
                    break;
                case 4:
                    document.getElementById("tooltip4").classList.remove("hidden");
                    document.getElementById("tooltip4_incident").classList.remove("hidden");
                    break;
                case 5:
                    document.getElementById("tooltip5").classList.remove("hidden");
                    document.getElementById("tooltip5_incident").classList.remove("hidden")
                    break;
                case 6:
                    document.getElementById("tooltip6").classList.remove("hidden");
                    document.getElementById("tooltip6_incident").classList.remove("hidden")
                    break;
            }
        }

        function hideTooltip(flag) {
            switch (flag) {
                case 1:
                    document.getElementById("tooltip1").classList.add("hidden");
                    break;
                case 2:
                    document.getElementById("tooltip2").classList.add("hidden");
                    break;
                case 3:
                    document.getElementById("tooltip3").classList.add("hidden");
                    break;
                case 4:
                    document.getElementById("tooltip4").classList.add("hidden");
                    document.getElementById("tooltip4_incident").classList.add("hidden");
                    break;
                case 5:
                    document.getElementById("tooltip5").classList.add("hidden");
                    document.getElementById("tooltip5_incident").classList.add("hidden");
                    break;
                case 6:
                    document.getElementById("tooltip6").classList.add("hidden");
                    document.getElementById("tooltip6_incident").classList.add("hidden");
                    break;
            }
        }
    </script>
</div>
