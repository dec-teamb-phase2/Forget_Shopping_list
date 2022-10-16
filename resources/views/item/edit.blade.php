<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      <center>
      {{ __('Edit Item') }}
      </center>
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <form class="mb-6" action="{{ route('item.update', $item->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-semibold text-lg text-grey-darkest" for="item_name"><center>NAME</center></label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="item_name" id="item_name" value="{{$item->item_name}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-semibold text-lg text-grey-darkest" for="item_link"><center>LINK</center></label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="item_link" id="item_link" value="{{$item->item_link}}">
            </div>
            <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-semibold text-lg text-grey-darkest" for="item_price"><center>PRICE</center></label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="item_price" id="item_price" value="{{$item->item_price}}">
            </div>
            <!-- <div class="flex flex-col mb-4">
              <label class="mb-2 uppercase font-semibold text-lg text-grey-darkest" for="item_time"><center>ITEM_TIME</center></label>
              <input class="border py-2 px-3 text-grey-darkest" type="text" name="item_time" id="item_time">
            </div> -->
            <div class="flex justify-evenly">
              <a href="{{ url()->previous() }}" class="block text-center w-5/12 py-3 mt-6 font-medium tracking-widest text-black uppercase bg-gray-100 shadow-sm focus:outline-none hover:bg-gray-200 hover:shadow-none">
                Back
              </a>
                <button type="text" class="w-full py-3 mt-6 font-semibold tracking-widest text-brack uppercase bg-black shadow-lg hover:bg-gray-900">
                    Update
                </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
