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

