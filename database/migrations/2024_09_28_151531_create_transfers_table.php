<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2);
            $table->string('name_of_account');
            $table->string('account_number');
            $table->string('bank_name');
            $table->string('swift_code')->nullable();
            $table->string('source_of_funds');
            $table->text('purpose')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transfers');
    }
};
