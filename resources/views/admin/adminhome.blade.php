<x-app-layout>
    <style>
        .btn-kkas {
            background-color: black;
            border: white;
            color: white;
            padding: 10px;
            border-radius: 20px;
        }
    </style>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Admin Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-6">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                  {{ __("You're logged in as admin!") }}
              </div>
          </div>
      </div>
  </div>


  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 " style="display: flex; margin-bottom: 10px;">
  <a style=" font-size: 14px; font-family: sans-serif; text-transform: uppercase; font-weight: 800;" class="btn-kkas" href="{{'/uploadpage'}}">Manage Books</a>
  </div>
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 " style="display: flex;">
    <a style=" font-size: 14px; font-family: sans-serif; text-transform: uppercase; font-weight: 800;" class="btn-kkas" href="{{'/managepage'}}">Manage Users</a>
    </div>





</x-app-layout>
