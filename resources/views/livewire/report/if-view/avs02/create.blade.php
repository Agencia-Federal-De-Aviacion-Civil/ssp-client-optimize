<div>
    <section class="bg-gray-50 dark:bg-gray-900 py-10">
        <div class="container px-6 py-6 mx-auto content-center">
            <h1 class="text-xl font-semibold text-center text-gray-800 capitalize lg:text-2xl dark:text-white">AP.7
                REPORTE DE PRESENCIA DE AVES AVS-02
            </h1>
            <div class="flex justify-center mx-auto mt-6">
                <span class="inline-block w-80 h-1 bg-blue-500 rounded-full"></span>
                <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
            </div>
            <p class="max-w-2xl mx-auto mt-2 text-center text-gray-500 dark:text-gray-300 lg:text-xl">
                AVS-02
            </p>
        </div>
        <section class="max-w-6xl p-2 mx-auto bg-gray-50"
            style="background-position:50%;background-repeat:no-repeat;background-image: url('{{ asset('images/escudo-hi-opac2.png') }}')">
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Fecha</label>
                    <x-datetime-picker wire:model="date" class="w-full" placeholder="Seleccione fecha..."
                        parse-format="YYYY-MM-DD" without-time="true" />
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Hora</label>
                    <x-time-picker wire:model="hour" placeholder="00:00" format="24" class="w-full px-2 py-2" />
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Nombre del aeródromo</label>
                    <x-input type="text" wire:model="aerodromeName"
                        class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..."/>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Nombre del observador</label>
                    <x-input type="text" wire:model="observerName"
                        class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..."/>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Dependencia</label>
                    <x-input type="text" wire:model="dependence"
                        class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..."/>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Empresa</label>
                    <x-input type="text" wire:model="company"
                        class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..."/>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Ubicación de las aves</label>
                    <x-input type="text" wire:model="birdLocation"
                        class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..."/>
                </div>
            </div>
            <div class="flex flex-col py-0">
                <div class="flex flex-wrap sm:flex-row flex-col py-2 mb-2">
                    <h1 class="sm:w-2/2 text-gray-700 font-medium title-font text-xl mb-2 sm:mb-0">
                        CONDICIONES METEOROLÓGICAS</h1>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Temperatura</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="temperature">
                        <x-select.option label="DESPEJADO" value="DESPEJADO" />
                        <x-select.option label="PARCIALMENTE NUBLADO" value="PARCIALMENTE NUBLADO" />
                        <x-select.option label="NUBLADO " value="NUBLADO" />
                        <x-select.option label="LLUVIA TEMPERATURA" value="LLUVIA TEMPERATURA" />
                        <x-select.option label="FRÍO" value="FRÍO" />
                        <x-select.option label="CALUROSO" value="CALUROSO" />
                        <x-select.option label="FRESCO " value="FRESCO" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Viento</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="wind">
                        <x-select.option label="FUERTE" value="FUERTE" />
                        <x-select.option label="SUAVE" value="SUAVE" />
                        <x-select.option label="BRISA" value="BRISA" />
                        <x-select.option label="CALMA" value="CALMA" />
                    </x-select>
                </div>
            </div>
            <br>
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
            </div>
            <div class="px-1 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Tipo de ave (si se conoce)</label>
                    <x-input type="text" wire:model="birdType"
                        class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..."/>
                </div>
            </div>

            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Tamaño del ave</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="birdSize">
                        <x-select.option label="PEQUEÑO (GORRIÓN)" value="PEQUEÑO (GORRIÓN)" />
                        <x-select.option label="MEDIANO (GAVIOTA)" value="MEDIANO (GAVIOTA)" />
                        <x-select.option label="GRANDE " value="GRANDE" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Número de aves
                        observadas:</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="birdNumber">
                        <x-select.option label="01" value="01" />
                        <x-select.option label="DE 02 a 10" value="de 02 a 10" />
                        <x-select.option label="DE 11 a 50" value="de 11 a 50" />
                        <x-select.option label="MÁS de 50" value="más de 50" />
                    </x-select>
                </div>
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Color de las aves: </label>
                    <x-input type="text" wire:model="birdColor"
                        class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..."/>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Algún rasgo llamativo de las
                        aves</label>
                    <x-input type="text" wire:model="strikingFeature"
                        class="py-0.5 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresar..."/>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">¿Qué hacían las aves durante la
                        observación?</label>
                    <x-textarea cols="30" rows="2" type="text" wire:model="birdsObservation"
                        class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa..." />
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 font-semibold dark:text-white">Causas probables de
                        la presencia de aves.</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="probableCauses">
                        <x-select.option label="TIRADEROS DE BASURA" value="TIRADEROS DE BASURA" />
                        <x-select.option label="LAGOS Y LAGUNAS" value="LAGOS Y LAGUNAS" />
                        <x-select.option label="RÍOS " value="RÍOS" />
                        <x-select.option label="PASTOS ALTOS" value="PASTOS ALTOS" />
                        <x-select.option label="SEMBRADÍOS" value="SEMBRADÍOS" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Descríbanse de que tipo:</label>
                    <x-textarea cols="30" rows="2" type="text" wire:model="describeType"
                        class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa..." />
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                <div>
                    <label for="" class="block text-lg mb-2 font-semibold dark:text-white">Otros indicios de
                        presencia de aves:</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="otherSigns">
                        <x-select.option label="PLUMAS" value="PLUMAS" />
                        <x-select.option label="NIDOS" value="NIDOS" />
                        <x-select.option label="RESTOS" value="RESTOS" />
                        <x-select.option label="DESCARGAS DE AGUA" value="DESCARGAS DE AGUA" />
                        <x-select.option label="BEBEDEROS" value="BEBEDEROS" />
                        <x-select.option label="OTROS" value="OTROS" />
                    </x-select>
                </div>
            </div>
            <div class="px-1 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="" class="block text-lg mb-2 dark:text-white">Descríbalos:</label>
                    <x-textarea cols="30" rows="2" type="text" wire:model="describeThem"
                        class="uppercase w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-1 focus:ring-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        placeholder="ingresa..." />
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
        <a href="#"
            class="text-xl font-bold text-gray-600 transition-colors duration-300 dark:text-white hover:text-gray-700 dark:hover:text-gray-300">Revisión:</a>
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
