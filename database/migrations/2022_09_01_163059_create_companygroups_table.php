<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companygroups', function (Blueprint $table) {
            $table->id();
            $table->string('sub_groups');
            $table->string('company_group_head');
            $table->foreignId('employees_id')->nullable()->references("employees")->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
            // $table->temporary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_company_groups');
    }
}
