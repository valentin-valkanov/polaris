<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('position_states', function (Blueprint $table) {
            $table->id();
            $table->foreignId('position_id')->constrained()->onDelete('cascade');
            $table->timestamp('time');
            $table->string('symbol');
            $table->string('type');
            $table->string('system');
            $table->string('strategy');
            $table->string('asset_class');
            $table->float('volume');
            $table->float('price_level');
            $table->float('stop_loss');
            $table->float('commission');
            $table->float('dividend');
            $table->float('swap');
            $table->float('profit');
            $table->string('grade');
            $table->string('state');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('position_states');
    }
};
