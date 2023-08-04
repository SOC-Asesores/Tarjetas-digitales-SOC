<x-guest-layout>
    <form method="POST" action="{{ route('registerDirector') }}" enctype="multipart/form-data">
        @csrf

        <!-- Nombre -->
        <div>
            <x-input-label for="name" value="Nombre" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Puesto -->
        <div>
            <x-input-label for="puesto" value="Puesto" />
            <x-text-input id="puesto" class="block mt-1 w-full" type="text" name="puesto"  required />
        </div>

        <!-- Descripcion -->
        <div>
            <x-input-label for="descripcion" value="Descripcion" />
            <x-textarea id="descripcion" name="descripcion"  maxlength="500"  required />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" value="Email" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="password" value="Password" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" />
        </div>

        <!-- Telefono -->
        <div>
            <x-input-label for="telefono" value="Teléfono" />
            <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono"  required />
        </div>

        <!-- Whatsapp -->
        <div>
            <x-input-label for="telefono" value="Whatsapp" />
            <x-text-input id="whatsapp" class="block mt-1 w-full" type="text" name="whatsapp"  required />
        </div>

        <!-- facebook -->
        <div>
            <x-input-label for="facebook" value="Url facebook" />
            <x-text-input id="facebook" class="block mt-1 w-full" type="text" name="facebook" />
        </div>

        <!-- twitter -->
        <div>
            <x-input-label for="twitter" value="Url twitter" />
            <x-text-input id="twitter" class="block mt-1 w-full" type="text" name="twitter" />
        </div>

        <!-- instagram -->
        <div>
            <x-input-label for="instagram" value="Url instagram" />
            <x-text-input id="instagram" class="block mt-1 w-full" type="text" name="instagram" />
        </div>

        <!-- linkedin -->
        <div>
            <x-input-label for="linkedin" value="Url linkedin" />
            <x-text-input id="linkedin" class="block mt-1 w-full" type="text" name="linkedin" />
        </div>

        <!-- Foto -->
        <div class="mt-2">
            <x-input-label for="avatar" value="Foto de perfil" class="mb-2" style="line-height: 2;" />
            <input type="file" name="avatar">


        </div>
        <!-- Password -->
        <!--<div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>-->

        <!-- Confirm Password -->
        <!--<div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>-->

        <div class="flex items-center justify-end mt-4">
        
            <x-primary-button class="ml-4">
                Crear tarjeta
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
