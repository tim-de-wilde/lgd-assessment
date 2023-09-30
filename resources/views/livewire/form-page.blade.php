<div class="pb-6">
    <form>
        <div class="space-y-12 sm:space-y-16">
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Base information</h2>

                <div class="mt-10 space-y-8 border-b border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:border-t sm:pb-0">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label for="first_name">First name</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input
                                wire:model.defer="data.first_name"
                                type="text"
                                id="first_name"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('data.first_name')" />
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label for="initials">Initials</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input
                                wire:model.defer="data.initials"
                                type="text"
                                id="initials"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('data.initials')" />
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label for="surname">Surname</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input
                                wire:model.defer="data.surname"
                                type="text"
                                id="surname"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('data.surname')" />
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label for="email">Email</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input
                                wire:model.defer="data.email"
                                type="email"
                                id="email"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('data.email')" />
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label for="phone">Telephone number</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input
                                wire:model.defer="data.phone"
                                type="text"
                                id="phone"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('data.phone')" />
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label for="password">Password</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input
                                wire:model.defer="data.password"
                                type="password"
                                id="password"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('data.password')" />
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Address information</h2>

                <div class="mt-10 space-y-8 border-b border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:border-t sm:pb-0">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label for="postal_code">Postal code</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input
                                wire:model.defer="data.postal_code"
                                type="text"
                                id="postal_code"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('data.postal_code')" />
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label for="house_number">House number</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input
                                wire:model.defer="data.house_number"
                                type="text"
                                id="house_number"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('data.house_number')" />
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <button wire:click="submit" type="button">
                    Submit
                </button>
            </div>
        </div>
    </form>
</div>
