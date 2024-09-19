<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class customDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

       protected $data;

       public function __construct($data)
        {
        $this->data = $data;
        }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
            $data = [
            ['name' => $this->data, 'email' => 'john@example.com','password'=>\Hash::make('password')],
            ['name' => 'Jane', 'email' => 'jane@example.com','password'=>\Hash::make('password')],
            ['name' => 'Bob', 'email' => 'bob@example.com','password'=>\Hash::make('password')],
        ];

        foreach ($data as $row) {
            \DB::table('users')->insert($row);
        }
    }
}
