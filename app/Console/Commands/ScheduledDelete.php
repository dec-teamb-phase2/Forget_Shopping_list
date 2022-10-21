<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Item;
use Illuminate\Http\Request;

class ScheduledDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:destroy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete Item';


    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $deleteItems = Item::where('updated_at', '<=', now()->subMinute())->get();
        // ($deleteItems);
        foreach ($deleteItems as $deleteItem){
            $result = $deleteItem->delete();
            // dd($deleteItem);
        }
        // return redirect()->route('item.index');
    }
}
