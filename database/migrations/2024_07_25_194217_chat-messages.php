<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chat_messages', function(Blueprint $t){
            $t->id();
            $t->foreignId('sender_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $t->foreignId('receiver_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $t->text('message');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_messages');
    }
};
