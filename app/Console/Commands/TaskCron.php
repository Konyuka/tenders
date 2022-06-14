<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Illuminate\Support\Facades\Log;


class TaskCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hit Tenders Endpoint Daily';

    /**
     * Create a new command instance.
     *
     * @return void
     */
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
        // return 0;
        \Log::info("Cron is working fine!");

        $response = Http::get('https://www.biddetail.com/kenya/C62A8CB5DD405E768CAD792637AC0446/F4454993C1DE1AB1948A9D33364FA9CC');
        $data = json_decode($response, true);
        // $posts = $request->tenders;

        $posts = $data['TenderDetails'][0]['TenderLists'];

        set_time_limit(50000);
        foreach ($posts as $post => $value ) {
            if(!Post::where('tender_number',$value['Tender_No'])->exists()){

                Post::Create([
                    'purchasing_authority' => $value['Purchasing_Authority'],
                    'tender_number' => $value['Tender_No'],
                    'tender_brief' => $value['Tender_Brief'],
                    'competition_type' => $value['CompetitionType'],
                    'funded_by' => $value['Funding'],
                    'country' => $value['Geographical_Addresses'],
                    'value' => $value['Tender_Value'],
                    'work_detail' => $value['Work_Detail'],
                    'email' => $value['Email_Address'],
                    'link' => $value['FileUrl'],
                    'expiry' => $value['Tender_Expiry']
                ]);
            }


        };
    }
}
