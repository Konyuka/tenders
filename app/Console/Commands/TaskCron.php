<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

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
        info("Refreshing Tenders Using Cron!");
        $apiURL = env('TENDER_API_URL');
        $response = Http::get($apiURL, ['auth' =>  ['C62A8CB5DD405E768CAD792637AC0446', 'F4454993C1DE1AB1948A9D33364FA9CC']]);
        $data = json_decode($response, true);
        $posts = $data['TenderDetails'][0]['TenderLists'];
        info('Tenders Refreshed');
        set_time_limit(50000);
        foreach ($posts as $post => $value) {
            if (!Post::where('bdr_no', $value['BDR_No'])->exists()) {
                $createdPost = Post::Create([
                    'bdr_no' => $value['BDR_No'],
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