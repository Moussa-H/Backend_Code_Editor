<?php

namespace Database\Seeders;

use App\Models\ChatMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; 
class ChatMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // ChatMessage::factory(50)->create();
        // Ensure there are users in the database
    //    $users = User::factory()->count(10)->create();

      //  foreach ($users as $user) {
            // Create a random number of chat messages for each user
      //      ChatMessage::factory()->count(rand(1, 5))->create([
      //          'sender_id' => $user->id,
      //          'receiver_id' => $users->except($user->id)->random()->id, // Make sure the receiver is different from the sender
      //      ]);
        }
    }
