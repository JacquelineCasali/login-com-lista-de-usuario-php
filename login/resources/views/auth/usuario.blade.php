
<x-app-layout>

    <x-auth-card>
   
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <!-- Name -->
            <div>
    <x-label for="name" :value="__('Name')" />

     <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}"  />
       </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label  :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                              value="{{$user->password}}"/>
            </div>

            <!-- Confirm Password -->
       
  <a  href='/../'> voltar</a>
  

   {{-- <a  href='/auth.login/'> voltar1</a> --}}
 
    </x-auth-card>
   
</x-app-layout>
