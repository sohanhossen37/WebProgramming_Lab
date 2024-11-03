<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('admin_id'); // Primary key for the admins table
            $table->unsignedBigInteger('user_id'); // Foreign key reference to users table
            $table->string('role')->default('superadmin'); // Role specific to admin, with default value
            $table->string('education')->nullable(); // Educational background for the admin
            $table->timestamps(); // Created at and updated at timestamps

            // Foreign key relation
            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users')
                  ->onDelete('cascade'); // Cascades delete to maintain referential integrity
        });
    }

    public function down()
    {
        Schema::dropIfExists('admins'); // Drop the admins table if it exists
    }
}
