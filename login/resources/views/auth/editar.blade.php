<x-app-layout>
    <x-auth-card>
       

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/dashboard/editar/{{$user->id}}">
            @csrf
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
   <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Editar') }}
                </x-button>
            </div>   
        </form>
    </x-auth-card>
</x-app-layout> 
