<div>
    {{-- <x-errors></x-errors> --}}
    <x-notifications position="top-center" />
    <x-dialog z-index="z-50" blur="md" align="center" />
    <section class="bg-gray-50 dark:bg-gray-900 py-12">
        <div class="container px-6 py-4 mx-auto content-center">
            <h1 class="text-xl font-semibold text-center text-gray-800 capitalize lg:text-2xl dark:text-white">AP.6 RECLASIFICACIÓN DE UN INCIDENTE AFAC-006</h1>
            <div class="flex justify-center mx-auto mt-6">
                <span class="inline-block w-80 h-1 bg-blue-500 rounded-full"></span>
                <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
            </div>
            <p class="max-w-2xl mx-auto mt-4 text-center text-gray-500 dark:text-gray-300 lg:text-xl">
                AFAC-006
            </p>
            <p class="max-w-4xl mx-auto mt-4 text-center text-gray-500 dark:text-gray-300 lg:text-regular">Llene este formato para la reclasificación de una
                notificación de incidente (PIA ENR 1.14-4 NOV-23-
                2006 o Apéndice A de la NOM-069, AFAC-001,
                AFAC-005). Complete todos los campos en blanco
                y envíelo a la DAAIA.</p>  
        </div>
        <section class="max-w-6xl p-2 mx-auto bg-gray-50" style="background-position:50%;background-repeat:no-repeat;background-image: url('{{ asset('images/escudo-hi-opac2.png') }}')">
            <label for="instruccion" class="text-center flex p-1 block w-full lg:text-base xs:text-xl focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                <div class="select-none text-gray-700 font-semibold text-gray-600">INSTRUCCIONES</div>
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
                        <div id="tooltip1" role="tooltip" class="z-20 -mt-20 w-96 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg bg-white p-4 hidden">
                            <svg class="absolute left-0 -ml-2 bottom-0 top-0 h-full" width="9px"
                            height="16px" viewBox="0 0 9 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                        <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                            <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5">
                                                </polygon>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <p class="text-sm font-bold text-gray-800 pb-1">INSTRUCCIONES</p>
                            <p class="text-sm leading-4 text-gray-600 pb-3">La reclasificación de un incidente debe basarse
                                en información nueva que no estaba disponible cuando se presentó la notificación ante la DAAIA,
                                se utilizará este formulario para corregir un número de informe de incidente. No es
                                necesario realizar un informe de investigación si se reclasifica el suceso como "Evidencias
                                insuficientes para investigar" o "No incidente", se debe anexar a este formato el Acta de hechos.
                            </p>
                        </div>
                    </a>
            </label>
            <div class="flex flex-col py-0">
                <p class="px-1 text-lg py-2 whitespace-no-wrap">Número de folio de Incidente / Incidente grave asignado por la DAAIA</p>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <x-input type="text" wire:model="folioNumber" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..." />
                </div>
            </div>
            <div class="flex flex-col py-0">
                <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                    <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                        FECHA Y DÍA DEL INCIDENTE</h1>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Ciudad o poblado más cercano y Estado</label>
                    <x-input type="text" wire:model="cityTown" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar..."/>
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fecha (UTC)</label>
                    <x-datetime-picker wire:model="dateUTC" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Hora (UTC)</label>
                    <x-time-picker wire:model="timeUTC" placeholder="00:00" format="24" class="w-full px-2 py-2" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Hora local</label>
                    <x-time-picker wire:model="localTime" placeholder="00:00" format="24" class="w-full px-2 py-2" />
                </div>
            </div>
            <div class="flex flex-col py-0">
                <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                    <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                        RECLASIFICANDO LA UNIDAD DE TRÁNSITO AÉREO</h1>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Región (Centro, Noreste, Noroeste,
                        Occidente y Sureste)</label>
                    <x-input type="text" wire:model="region" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..." />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Identificación de los Servicios de Tránsito
                        Aéreo (ACC Mazatlán, ACC Mérida, ACC
                        México y ACC Monterrey)</label>
                    <x-input type="text" wire:model="identificationServices" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..." />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Control de tránsito aéreo (de Área,
                        Aproximación, de Aeródromo,
                        asesoramiento, de Vuelo, de Alerta)</label>
                    <x-input type="text" wire:model="airtrafficControl" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..." />
                </div>
            </div>
            <br>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Incidente reclasificado como</label>
                    <x-select class="w-full" wire:model="incidentReclassified">                        
                        <x-select.option label="A. Error operacional " value="A" />
                        <x-select.option label="B. Desviación operacional " value="B" />
                        <x-select.option label="C. Corrección del número de reporte " value="C" />
                        <x-select.option label="D. Evidencias insuficientes para investigar " value="D" />
                        <x-select.option label="E. No incidente " value="E" />
                        <x-select.option label="F. Otro" value="F" />
                    </x-select>
                </div>
                {{-- SE APARECE AL DAR CLIC otro --}}
                <div>
                    @if ($incidentReclassified=='F')
                    <label for="" class="block text-lg mb-2 dark:text-white">Especifique</label>
                    <input type="text" wire:model="specify" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar...">                        
                    @endif
                </div>
            </div>
            <div class="px-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Nuevo número de incidente otorgado por la
                        DAAIA</label>
                    <x-input type="text" wire:model="incidentNumber" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    placeholder="ingresar..." />
                </div>
                {{-- SE APARECE AL DAR CLIC otro --}}
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">ó nueva reclasificación.</label>
                    <x-select class="w-full" wire:model="newReclassification">
                        <x-select.option label="A. Error operacional" value="A-RECLASIFICACION" /> 
                        <x-select.option label="B. Desviación operacional o pérdida de la separación " value="B-RECLASIFICACION" /> 
                        <x-select.option label="C. Reclasificar como 'Evidencias insuficientes para investigar'" value="C-RECLASIFICACION" />
                        <x-select.option label="D. Reclasificar como 'No incidente' " value="D-RECLASIFICACION'" /> 
                        <x-select.option label="E. No aplica " value="E-RECLASIFICACION" /> 
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Razón de la reclasificación</label>
                    <div class="md:flex col-span-8">
                        <textarea wire:model="reasonReclassification" name="" id="" cols="30" rows="2" type="text" wire:model="" class="uppercase w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-1 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa..."></textarea>
                    </div>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                    <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                        INSPECTOR VERIFICADOR AERONÁUTICO</h1>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                <div class="col-span-2">
                    <label for="" class="block text-lg mb-2 dark:text-white">Nombre</label>
                    <x-input type="text" wire:model="name" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..." />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">FIRMA</label>
                    <x-input type="text" wire:model="firm" class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..." />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fecha</label>
                    <x-datetime-picker wire:model="date" class="w-full" placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="true" />
                </div>
            </div>
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
                            Se debe de anexar a este formato el Acta de hechos
                        </div>
                        <form>
                            <label for="small-file-input" class="sr-only">Choose file</label>
                            <input wire:model="fileMinutes" type="file" name="small-file-input" id="small-file-input" class="bg-gray-50 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                      file:bg-transparent file:border-0
                      file:bg-gray-200 file:mr-4
                      file:py-2 file:px-4
                      dark:file:bg-gray-700 dark:file:text-gray-400">
                        </form>
                    </div>
                </div>
            </div>
            <div class="py-4 mb-2 text-right">
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