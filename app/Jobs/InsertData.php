<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class InsertData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        $data = [
        ['name' => 'John', 'email' => 'john@example.com','password'=>\Hash::make('password')],
        ['name' => 'Jane', 'email' => 'jane@example.com','password'=>\Hash::make('password')],
        ['name' => 'Bob', 'email' => 'bob@example.com','password'=>\Hash::make('password')],
       ];

        foreach ($data as $row) {
        \DB::table('users')->insert($row);
        }

    }
}
