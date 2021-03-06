<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("balance")->default(0);
            $table->integer("totaldepost")->default(0);
            $table->integer("pendingdeosit")->default(0);
            $table->integer("pendingwithdrawal")->default(0);
            $table->integer("totalwithdrawal")->default(0);
            $table->integer("currentinvestment")->default(0);
            $table->integer("totalbalance")->default(0);
            $table->integer("currentprofit")->default(0);
            $table->integer("userid");
            $table->integer("totalprofit")->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funds');
    }
}
