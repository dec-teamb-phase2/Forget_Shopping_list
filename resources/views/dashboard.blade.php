<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            <center>
            {{ __('Forgot_Shopping_list') }}
            </center>
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 font-semibold">
                    <h1>
                        <center>
                            ↓↓READ ME↓↓
                        </center>
                    </h1>
                    <p>
                        ＜＜このアプリの使い方＞＞
                    </p>
                    <p>
                        Createページで商品名とリンク、価格を入力します。
                    </p>
                    <p>
                        mypage画面でCreateページで入力した商品の確認ができます。
                    </p>
                    <p>
                        CREATEしたアイテムは上位hoge個を除いてhoge日でリストの下から消去されます。
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
