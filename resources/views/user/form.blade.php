<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Name') }}</label>
        <input id="name" name="name" type="text" value="{{ $user->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('name') ? ' border-red-500' : '' }}" placeholder="{{ __('Name') }}">
        @if ($errors->has('name'))
            <p class="text-red-500 text-xs italic">{{ $errors->first('name') }}</p>
        @endif
    </div>
    <div class="mb-6">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Email') }}</label>
        <input id="email" name="email" type="text" value="{{ $user->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('email') ? ' border-red-500' : '' }}" placeholder="{{ __('Email') }}">
        @if ($errors->has('email'))
            <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
        @endif
    </div>
    <!-- Password -->
    <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{ __('Submit') }}</button>
    </div>
</div>
