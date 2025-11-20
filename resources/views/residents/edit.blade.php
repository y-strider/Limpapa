<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Resident') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('residents.update', $resident->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="first_name" :value="__('First Name')" />
                                <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name', $resident->first_name)" required />
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="last_name" :value="__('Last Name')" />
                                <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name', $resident->last_name)" required />
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="middle_name" :value="__('Middle Name')" />
                                <x-text-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name" :value="old('middle_name', $resident->middle_name)" />
                                <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="birth_date" :value="__('Birth Date')" />
                                <x-text-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date', $resident->birth_date)" required />
                                <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="gender" :value="__('Gender')" />
                                <select id="gender" name="gender" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                    <option value="Male" {{ old('gender', $resident->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ old('gender', $resident->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
                                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="civil_status" :value="__('Civil Status')" />
                                <x-text-input id="civil_status" class="block mt-1 w-full" type="text" name="civil_status" :value="old('civil_status', $resident->civil_status)" required />
                                <x-input-error :messages="$errors->get('civil_status')" class="mt-2" />
                            </div>

                            <div class="md:col-span-2">
                                <x-input-label for="address" :value="__('Address')" />
                                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address', $resident->address)" required />
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="contact_number" :value="__('Contact Number')" />
                                <x-text-input id="contact_number" class="block mt-1 w-full" type="text" name="contact_number" :value="old('contact_number', $resident->contact_number)" required />
                                <x-input-error :messages="$errors->get('contact_number')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="occupation" :value="__('Occupation')" />
                                <x-text-input id="occupation" class="block mt-1 w-full" type="text" name="occupation" :value="old('occupation', $resident->occupation)" />
                                <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="psgc_code" :value="__('PSGC Code')" />
                                <x-text-input id="psgc_code" class="block mt-1 w-full" type="text" name="psgc_code" :value="old('psgc_code', $resident->psgc_code)" required />
                                <x-input-error :messages="$errors->get('psgc_code')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="purok_id" :value="__('Purok')" />
                                <select id="purok_id" name="purok_id" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                    @foreach(\App\Models\Purok::all() as $purok)
                                        <option value="{{ $purok->id }}" {{ old('purok_id', $resident->purok_id) == $purok->id ? 'selected' : '' }}>{{ $purok->purok_name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('purok_id')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button>
                                {{ __('Update Resident') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
