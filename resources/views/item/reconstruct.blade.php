<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('DELETED_ITEM') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-lg text-grey-dark border-b border-grey-light">DELETED LIST</th>
              </tr>
            </thead>
            <tbody>
                <!-- $amount = 0 -->
              @foreach ($items as $item)
              @if ($item->user_id == Auth::user()->id)
              <tr class="hover:bg-grey-lighter">
                <td class="py-4 px-6 border-b border-grey-light">
                    <!--{{$item->item_name}} が 何を表示するかを決めている部分です。-->
                  <h3 class="font-bold text-lg text-grey-dark">{{$item->item_name}}</h3>
                  <!-- <h3 class="font-bold text-lg text-grey-dark">{{$item->item_link}}</h3> -->
                  <a class="color:skyblue" href={{$item->item_link}}>☆━━━☆・‥…━━━☆商品リンク☆━━━…‥・☆━━━☆</a>
                  <!-- <a href="https://www.deepl.com/ja/translator">text</a> -->
                  <h3 style="text-align:right" class="font-bold text-lg text-grey-dark">￥{{$item->item_price}}</h3>
                  <div class="flex">
                    <!-- 復元ボタン -->
                    <form action="{{ route('item.restore',$item) }}" method="POST" class="text-left">
                        @method('delete')
                      @csrf
                      <button type="submit" class="mr-2 ml-2 text-sm hover:bg-gray-200 hover:shadow-none text-white py-1 px-2 focus:outline-none focus:shadow-outline"style="text-align: right">
                        <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="black">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
              @endif
              @endforeach
              <!-- amountの表示 -->
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</x-app-layout>

