<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editsuppliers', function (Blueprint $table) {
            $table->id('supplierId');
            $table->string('name',60);
            $table->string('email',100);
            $table->date('dateOfJoin');
            $table->enum('shift',["Sat-Mon-Wed-Fri","Sun-Tue-Thrs"]);
            $table->integer('salary');
            $table->integer('bonus');
            $table->boolean('status')->default(1);
            $table->string('vehicle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('editsuppliers');
    }
};
