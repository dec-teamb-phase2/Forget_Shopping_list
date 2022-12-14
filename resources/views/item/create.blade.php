<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      <center>
      {{ __('Create New Item') }}
      </center>
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('item.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-semibold text-lg text-grey-darkest" for="tweet"><center>NAME</center></label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="item_name" id="item_name">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-semibold text-lg text-grey-darkest" for="item_link"><center>LINK</center></label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="item_link" id="item_link">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-semibold text-lg text-grey-darkest" for="item_price"><center>PRICE</center></label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="item_price" id="item_price">
            </div>
            <!-- <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-semibold text-lg text-grey-darkest" for="item_time"><center>ITEM_TIME</center></label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="item_time" id="item_time">
            </div> -->
            <button type="text" class="w-full py-3 mt-6 font-semibold tracking-widest text-brack uppercase bg-black shadow-lg hover:bg-gray-900">
              Create
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
