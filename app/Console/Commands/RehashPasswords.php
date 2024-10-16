<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User; // Import the User model
use Illuminate\Support\Facades\Hash; // Import the Hash facade

class RehashPasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:rehash-passwords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Get all users
        $users = User::all();

        // Loop through each user and rehash if needed
        foreach ($users as $user) {
            if (!Hash::needsRehash($user->password)) {
                $user->password = Hash::make($user->password);
                $user->save();

                // Output to console
                $this->info("Rehashed password for user: {$user->email}");
            }
        }

        return 0;
    }
}
