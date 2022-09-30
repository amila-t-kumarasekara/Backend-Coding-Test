<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->foreignId('locations_id')->constrained('locations')->onDelete('cascade');
            $table->foreignId('assets_id')->constrained('assets')->onDelete('cascade');
            $table->foreignId('managers_id')->constrained('managers')->onDelete('cascade');
            $table->foreignId('employees_id')->constrained('employees')->onDelete('cascade');
            $table->foreignId('companygroups_id')->nullable()->constrained("companygroups")->cascadeOnUpdate()->nullOnDelete();
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
        Schema::dropIfExists('company');
    }
}
