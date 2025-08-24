{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
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

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('master')

@section('title')
    Register | Breeze Auth App
@endsection

@section('main-content')
    <div class="w-full">
      <div class="max-w-md mx-auto px-4 py-12">
        <div class="border border-gray-200 rounded-xl shadow-lg p-6">
          <h2 class="text-lg font-semibold text-center mb-6">Create an Account</h2>

          <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf
            <div>
              <label class="block text-sm font-medium mb-1">Name</label>
              <input type="text" name="name" autocomplete="off" value="{{ old('name') }}" 
                     class="@error('name') is-invalid @enderror w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:border-black focus:ring-0">
            </div>
            <div>
              <label class="block text-sm font-medium mb-1">Email</label>
              <input type="email" name="email" autocomplete="off" value="{{ old('email') }}"
                     class="@error('email') is-invalid @enderror w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:border-black focus:ring-0">
            </div>
            <div>
              <label class="block text-sm font-medium mb-1">Password</label>
              <input type="password" name="password" value="{{ old('password') }}" 
                     class="@error('password') is-invalid @enderror w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:border-black focus:ring-0">
            </div>
            <div>
              <label class="block text-sm font-medium mb-1">Confirm Password</label>
              <input type="password" name="password_confirmation" 
                     class="@error('password_confirmation') is-invalid @enderror w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:border-black focus:ring-0">
            </div>
            <button type="submit" 
                    class="w-full bg-black text-white rounded-lg py-2 text-sm font-medium hover:bg-gray-800 transition shadow">
              Register
            </button>
          </form>
        </div>
      </div>
    </div>
@endsection