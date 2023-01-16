<div>
    {{-- FALTA ARREGLA PARA QUE NO SE CIERRE EL MODAL --}}
    <x-dialog z-index="z-50" blur="md" align="center" />
    {{-- AQUI TAMBIEN --}}
    <div x-data="{ 'open': true }" @keydown.escape="open = true">
        <div x-on:click.away="open = true">
            <x-modal wire:model="modalAtention">
                <x-card title="Consent Terms">
                    <p class="text-gray-600">
                        Lorem Ipsum...
                    </p>

                    <x-slot name="footer">
                        <div class="flex justify-end gap-x-4">
                            <x-button flat label="Cancel" x-on:click="close" />
                            <x-button primary label="I Agree" />
                        </div>
                    </x-slot>
                </x-card>
            </x-modal>
        </div>
    </div>
    <div class="bg-white relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="p-4">
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
                    <x-input label="NOMBRE DE LA EMPRESA" placeholder="ESCRIBE..." wire:model.lazy="enterprise" />
                </div>
                <div class="mt-1 relative z-0 w-full group">
                    <x-native-select label="TIPO DE PERSONA" wire:model="typePeople">
                        <option value="">Seleccione...</option>
                        @foreach ($peoples as $people)
                            <option value="{{ $people->id }}">{{ $people->name }}</option>
                        @endforeach
                    </x-native-select>
                </div>
            </div>
            <div class="mt-12 mb-12 text-right">
                <x-button label="GUARDAR" blue right-icon="arrow-circle-right" wire:click.prevent="save()" />
                <div wire:loading.delay wire:target="save">
                    <div
                        class="flex justify-center bg-emerald-900 z-40 h-full w-full fixed top-0 left-0 items-center opacity-75">
                        <div
                        class="flex justify-center bg-gray-500 z-40 h-full w-full fixed top-0 left-0 items-center opacity-75">
                        <div style="color: #150495" class="la-ball-circus la-2x">
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
