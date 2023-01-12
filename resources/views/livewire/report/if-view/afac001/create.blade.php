<div>
    <x-notifications position="top-center" />
    <section class="bg-gray-50 dark:bg-gray-900 py-20 sm:py-11">
        <div class="container px-6 py-20 mx-auto content-center">
            <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">AP.1
                NOTIFICACIÓN AFAC-001</h1>
            <div class="flex justify-center mx-auto mt-6">
                <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
            </div>
            <p class="max-w-2xl mx-auto mt-6 text-center text-gray-500 dark:text-gray-300 lg:text-xl">
                PRIMERA NOTICIA DE ACCIDENTE
            </p>
        </div>
        <section class="max-w-6xl p-2 mx-auto bg-gray-50"
            style="background-position:50%;background-repeat:no-repeat;background-image: url('{{ asset('images/escudo-hi-opac2.png') }}')">

            <div class="px-4 grid grid-cols-1 gap-4 mt-0 sm:grid-cols-4">
                <div>
                    <label for="input-label" class="block text-lg mb-2 dark:text-white">Ingrese la fecha del
                        evento</label>
                    <x-datetime-picker placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="false"
                        wire:model.defer="dateEvent" />
                </div>
                <div>
                    <label for="input-label" class="block text-lg mb-2 dark:text-white">Ingresa la hora del
                        evento</label>
                    <x-time-picker placeholder="00:00" format="24" wire:model.defer="hourEvent" />
                </div>
            </div>
            {{-- LLENADO DE FORMATO --}}
            <div class="py-2 px-4 grid grid-cols-1 gap-4 mt-0 sm:grid-cols-3">
                <div>
                    <label for="input-label" class="block text-lg mb-2 dark:text-white">Marca</label>
                    <x-select class="w-full" placeholder="Selecciona" wire:model="brand_id">
                        @foreach ($brands as $brand)
                            <x-select.option label="{{ $brand->name }}" value="{{ $brand->id }}" />
                        @endforeach
                    </x-select>
                </div>
                @if (!is_null($models))
                    <div>
                        <label for="input-label" class="block text-lg mb-2 dark:text-white">Modelo</label>
                        <x-native-select class="w-full" placeholder="Selecciona" wire:model="amodel_id">
                            <option value="">SELECCIONE...</option>
                            @foreach ($models as $model)
                                <option value="{{ $model->id }}">{{ $model->name }}</option>
                            @endforeach
                        </x-native-select>
                    </div>
                @endif
                <div>
                    <label for="number_serie" class="block text-lg mb-2 dark:text-white">Núm. de serie</label>
                    <x-input class="mt-1 py-2 w-full" wire:model.defer="serialNumber" placeholder="INGRESE..." />
                </div>
            </div>
            <div class="px-4 py-2 grid grid-cols-4 gap-2 mt-0 sm:grid-cols-4">
                <div>
                    <label for="number_serie" class="block text-lg mb-2 dark:text-white">Matricula</label>
                    <x-input class="mt-1 py-2 w-full" wire:model.defer="licensePlate" placeholder="INGRESE..." />
                </div>
                <div>
                    <label for="number_serie" class="block text-lg mb-2 dark:text-white">Peso maximo de despegue</label>
                    <x-input class="mt-1 py-2 w-full" wire:model.defer="maximumWeight" placeholder="Ingresa el peso"
                        suffix="kg" />
                </div>
                <div>
                    <label for="number_serie" class="block text-base mb-2 dark:text-white">Certificado de
                        aeronavegabilidad núm</label>
                    <x-input class="mt-1 py-2 w-full" wire:model.defer="airworthinessCertificate"
                        placeholder="INGRESE..." />
                </div>
                <div>
                    <label for="number_serie" class="block text-lg mb-2 dark:text-white">Vigente al</label>
                    <x-datetime-picker placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD" without-time="false"
                        wire:model="validity" wire:model.defer="customFormat" />
                </div>
            </div>
            <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="number_serie" class="block text-lg mb-2 dark:text-white">Propietario</label>
                    <x-input class="mt-1 py-2 w-full" wire:model.defer="owner" placeholder="INGRESE..." />
                </div>
            </div>
            <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                <div>
                    <label for="number_serie" class="block text-lg mb-2 dark:text-white">Lugar</label>
                    <x-input class="mt-1 py-2 w-full" wire:model.defer="place" placeholder="INGRESE..." />
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-4">
                    <div>
                        <label for="number_serie" class="block text-lg mb-2 dark:text-white"></label>
                        <label for="number_serie" class="block text-lg mb-2 dark:text-white">Coordenadas
                            geográficas:</label>
                    </div>
                    <div>
                        <label for="number_serie" class="block text-lg mb-2 dark:text-white">Latitud</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="latitude" placeholder="INGRESE..." />
                    </div>
                    <div>
                        <label for="number_serie" class="block text-lg mb-2 dark:text-white">Longitud</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="longitude" placeholder="INGRESE..." />
                    </div>
                    <div>
                        <label for="number_serie" class="block text-lg mb-2 dark:text-white">Elevación</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="elevation" placeholder="INGRESE..." />
                    </div>
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                    <div>
                        <label for="number_serie" class="block text-lg mb-2 dark:text-white">Características físicas
                            del
                            sitio del accidente:</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="crashSite" placeholder="INGRESE..." />
                    </div>
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                    <div>
                        <label for="number_serie" class="block text-lg mb-2 dark:text-white">Daños a la
                            aeronave:</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="aircraftDamage"
                            placeholder="INGRESE..." />
                    </div>
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                    <div>
                        <label for="number_serie" class="block text-lg mb-2 dark:text-white">Origen</label>
                        <x-select class="w-full" placeholder="Selecciona"
                            wire:model.defer="place_destination_origin_id">
                            @foreach ($placesDestinations as $placesDestination)
                                <x-select.option label="{{ $placesDestination->name }}"
                                    value="{{ $placesDestination->id }}" />
                            @endforeach
                        </x-select>
                    </div>
                    <div>
                        <label for="number_serie" class="block text-lg mb-2 dark:text-white">Destino</label>
                        <x-select class="w-full" placeholder="Selecciona"
                            wire:model.defer="place_destination_destiny_id">
                            @foreach ($placesDestinations as $placesDestination)
                                <x-select.option label="{{ $placesDestination->name }}"
                                    value="{{ $placesDestination->id }}" />
                            @endforeach
                        </x-select>
                    </div>
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                    <div>
                        <label for="number_serie" class="block text-lg mb-2 dark:text-white">Servicio al que está
                            destinada</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="serviceOfDestiny"
                            placeholder="INGRESE..." />
                    </div>
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                    <div>
                        <label for="number_serie" class="block text-lg mb-2 dark:text-white">Mercancías
                            peligrosas</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="dangerousGoods"
                            placeholder="INGRESE..." />
                    </div>
                    <div>
                        <label for="number_serie" class="block text-lg mb-2 dark:text-white">Tipo</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="type" placeholder="INGRESE..." />
                    </div>
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                    <div>
                        <label for="base_operation_id" class="block text-lg mb-2 dark:text-white">Base de
                            operaciónes</label>
                        <x-select class="w-full" placeholder="Selecciona" wire:model.defer="base_operation_id">
                            @foreach ($operationsBase as $operationBase)
                                <x-select.option label="{{ $operationBase->name }}"
                                    value="{{ $operationBase->id }}" />
                            @endforeach
                        </x-select>
                    </div>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                    <div>
                        <label for="peopleOnBoard" class="block text-lg mb-2 dark:text-white">Núm. personas a bordo
                            (PAB)</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="peopleOnBoard"
                            placeholder="INGRESE..." />
                    </div>
                    <div>
                        <label for="fatalInjuries" class="block text-lg mb-2 dark:text-white">Núm. de PAB lesiones
                            fatales</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="fatalInjuries"
                            placeholder="INGRESE..." />
                    </div>
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                    <div>
                        <label for="seriousInjuries" class="block text-lg mb-2 dark:text-white">Núm. de PAB con
                            lesiones
                            graves</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="seriousInjuries"
                            placeholder="INGRESE..." />
                    </div>
                    <div>
                        <label for="otherFatalInjuries" class="block text-lg mb-2 dark:text-white">Otras lesiones
                            fatales
                            o graves</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="otherFatalInjuries"
                            placeholder="INGRESE..." />
                    </div>
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                    <div>
                        <label for="nationality_passengers_id" class="block text-lg mb-2 dark:text-white">Nacionalidad
                            de
                            pasajeros (s)</label>
                        <x-select class="w-full" placeholder="Selecciona"
                            wire:model.defer="nationality_passengers_id">
                            @foreach ($nacionalities as $nacionality)
                                <x-select.option label="{{ $nacionality->name }}" value="{{ $nacionality->id }}" />
                            @endforeach
                        </x-select>
                    </div>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                    <div>
                        <label for="commanderName" class="block text-lg mb-2 dark:text-white">Nombre del
                            comandante</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="commanderName"
                            placeholder="INGRESE..." />
                    </div>
                    <div>
                        <label for="otherFatalInjuries"
                            class="block text-lg mb-2 dark:text-white">Nacionalidad</label>
                        <x-select class="w-full" placeholder="Selecciona"
                            wire:model.defer="nationality_commander_id">
                            @foreach ($nacionalities as $nacionality)
                                <x-select.option label="{{ $nacionality->name }}" value="{{ $nacionality->id }}" />
                            @endforeach
                        </x-select>
                    </div>
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                    <div>
                        <label for="commanderName" class="block text-lg mb-2 dark:text-white">Licencia No:</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="licenseNumber"
                            placeholder="INGRESE..." />
                    </div>
                    <div>
                        <label for="commanderName" class="block text-lg mb-2 dark:text-white">Categoría</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="category" placeholder="INGRESE..." />
                    </div>
                    <div>
                        <label for="commanderName" class="block text-lg mb-2 dark:text-white">Vigencia</label>
                        <x-datetime-picker class="w-full" placeholder="Seleccione fecha..."
                            wire:model.defer="validityLicense" parse-format="YYYY-MM-DD" without-time="false"
                            :min="now()" />
                    </div>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                    <div>
                        <label for="commanderName" class="block text-lg mb-2 dark:text-white">Nombre del primer
                            oficial</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="oficialName" placeholder="INGRESE..." />
                    </div>
                    <div>
                        <label for="otherFatalInjuries"
                            class="block text-lg mb-2 dark:text-white">Nacionalidad</label>
                        <x-select class="w-full" placeholder="Selecciona" wire:model.defer="nationality_oficial_id">
                            @foreach ($nacionalities as $nacionality)
                                <x-select.option label="{{ $nacionality->name }}" value="{{ $nacionality->id }}" />
                            @endforeach
                        </x-select>
                    </div>
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-3">
                    <div>
                        <label for="commanderName" class="block text-lg mb-2 dark:text-white">Licencia No:</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="licenseNumberOficial"
                            placeholder="INGRESE..." />
                    </div>
                    <div>
                        <label for="commanderName" class="block text-lg mb-2 dark:text-white">Categoría</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="categoryOficial"
                            placeholder="INGRESE..." />
                    </div>
                    <div>
                        <label for="commanderName" class="block text-lg mb-2 dark:text-white">Vigencia</label>
                        <x-datetime-picker placeholder="Seleccione fecha..." parse-format="YYYY-MM-DD"
                            without-time="false" wire:model.defer="validityLicenseOficial" />
                    </div>
                </div>
                <div class="h-1 bg-gray-200 rounded overflow-hidden">
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                    <div>
                        <label for="copilotInjuries" class="block text-lg mb-2 dark:text-white">Lesiones
                            comandante/copiloto:</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="copilotInjuries"
                            placeholder="INGRESE..." />
                    </div>
                </div>
                <div class="px-4 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-6">
                    <div class="md:flex col-span-3">
                        <p class="text-lg py-2 whitespace-no-wrap">Se activo el Equipo localizador de emergencia:</p>
                    </div>
                    <div class="md:flex py-2">
                        <x-radio class="text-lg" id="emergencyTeam1" name="emergencyTeam" left-label="SI"
                            value="SI" wire:model.defer="emergencyTeam" />
                    </div>
                    <div class="md:flex py-2">
                        <x-radio class="text-lg" id="emergencyTeam2" name="emergencyTeam" left-label="NO"
                            value="NO" wire:model.defer="emergencyTeam" />
                    </div>
                </div>
                <div class="px-4 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-6">
                    <div class="md:flex col-span-3">
                        <p class="text-lg py-2 whitespace-no-wrap">Se realizaron labores de búsqueda y salvamento:</p>
                    </div>
                    <div class="md:flex">
                        <x-radio class="text-lg" id="searchWorkSi" name="searchWork" left-label="SI" value="SI"
                            wire:model.defer="searchWork" />
                    </div>
                    <div class="md:flex">
                        <x-radio class="text-lg" id="searchWorkNo" name="searchWork" left-label="NO" value="NO"
                            wire:model.defer="searchWork" />
                    </div>
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                    <div>
                        <label for="descriptionFacts" class="block text-lg mb-2 dark:text-white">Descripción de los
                            hechos</label>
                        <x-textarea wire:model.defer="descriptionFacts" class="w-full px-2 mt-1 py-2"
                            placeholder="INGRESA LA DESCRIPCIÓN" />
                    </div>
                </div>
                <div class="px-4 py-2 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-1">
                    <div>
                        <label for="investigatorCharge" class="block text-lg mb-2 dark:text-white">Investigador a
                            cargo:</label>
                        <x-input class="mt-1 py-2 w-full" wire:model.defer="investigatorCharge"
                            placeholder="Ingresar..." />
                    </div>
                </div>
                <div class="px-4 py-1 grid grid-cols-1 gap-2 mt-0 sm:grid-cols-2">
                    <div>
                        <label for="telephone" class="block text-lg mb-2 dark:text-white">Teléfono</label>
                        <x-inputs.maskable wire:model.defer="telephone" class="mt-1 w-full"
                            mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']" />
                    </div>
                    <div>
                        <label for="telephone" class="block text-lg mb-2 dark:text-white">Correo</label>
                        <x-input class="mt-1 py-2 w-full" wire:model="email" placeholder="correo" />
                    </div>
                </div>
                <div class="mb-20 py-4 text-right">
                    <x-button wire:click.prevent="save" icon="document-download" positive label="GENERAR REPORTE" />
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
