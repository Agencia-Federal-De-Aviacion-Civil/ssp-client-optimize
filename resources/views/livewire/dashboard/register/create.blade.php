<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mt-5 mb-4">
                    <div class="mt-10 grid xl:grid-cols-3 xl:gap-6">
                        <div class="mt-1 relative z-0 w-full group">
                            <x-input label="NOMBRE COMPLETO" placeholder="ESCRIBE..." wire:model.lazy="name" />
                        </div>
                        <div class="mt-1 relative z-0 w-full group">
                            <x-input label="APELLIDO PATERNO" placeholder="ESCRIBE..." wire:model.lazy="apPaterno" />
                        </div>
                        <div class="mt-1 relative z-0 w-full group">
                            <x-input label="APELLIDO MATERNO" placeholder="ESCRIBE..." wire:model.lazy="apMaterno" />
                        </div>
                    </div>
                    <div class="mt-10 grid xl:grid-cols-3 xl:gap-6">
                        <div class="mt-1 relative z-0 w-full group">
                            <x-input label="CORREO ELECTRÓNICO" placeholder="ESCRIBE..." wire:model.lazy="email" />
                        </div>
                        <div class="mt-1 relative z-0 w-full group">
                            <x-inputs.maskable label="TELEFONO" mask="(##) ####-####" placeholder="INGRESE..."
                                wire:model.lazy="telephone" />
                        </div>
                        <div class="mt-1 relative z-0 w-full group">
                            <x-inputs.maskable label="EXTENSIÓN" mask="####" placeholder="INGRESE..."
                                wire:model.lazy="extention" />
                        </div>
                    </div>
                    <div class="mt-10 grid xl:grid-cols-2 xl:gap-6">
                        <div class="mt-1 relative z-0 w-full group">
                            <x-input label="NOMBRE DE LA EMPRESA" placeholder="ESCRIBE..."
                                wire:model.lazy="enterprise" />
                        </div>
                        <div class="mt-1 relative z-0 w-full group">
                            <x-native-select label="TIPO DE PERSONA" wire:model="typePeople">
                                <option>Active</option>
                                <option>Pending</option>
                                <option>Stuck</option>
                                <option>Done</option>
                            </x-native-select>
                        </div>
                    </div>
                    {{-- <div class="mt-5 flex flex-col mb-4">
                        <label for="type_people_id" class="font-semibold mb-2 text-sm text-gray-700 block">
                            TIPO DE PERSONA:
                        </label>
                        <select name="typePeople"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring ring-blue-300 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            wire:model.lazy="typePeople">
                            <option value="" selected>ELIGE UNA OPCIÓN</option>
                            @foreach ($Peoples as $itemPeople)
                    <option value="{{ $itemPeople->id }}">{{ $itemPeople->name }}</option>
                @endforeach
                        </select>
                        @error('typePeople')
                            <span
                                class="mt-3 text-center bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                    </div> --}}
                    <div class="mt-12 mb-12 text-right">
                        <x-button label="GUARDAR" primary right-icon="arrow-circle-right" wire:click.prevent="save()"/>
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
            </div>
        </div>
    </div>
</div>
