<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistanceFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistance_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('type_id')->constrained('donation_types');
            $table->string('description');
            $table->decimal('amount');
            $table->string('applicant_name');
            $table->string('applicant_address');
            $table->string('applicant_number');
            $table->boolean('is_accepted')->nullable();
            $table->boolean('is_completed')->default(false);
            
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
        Schema::dropIfExists('assistance_forms');
    }
}
