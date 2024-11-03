<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesForHomeServiceMarketplace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Locations Table
        Schema::create('locations', function (Blueprint $table) {
            $table->id('location_id');
            $table->string('location_name');
            $table->timestamps();
        });

        // Service Categories Table
        Schema::create('service_categories', function (Blueprint $table) {
            $table->id('category_id');
            
            $table->string('category_name');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        // Services Table
        Schema::create('services', function (Blueprint $table) {
            $table->id('service_id');
            $table->unsignedBigInteger('category_id');
            $table->string('service_name');
            $table->text('description');
            $table->string('image_path')->nullable();
            $table->timestamps();

            // Foreign key relation
            $table->foreign('category_id')->references('category_id')->on('service_categories')->onDelete('cascade');
        });

        // Users Table
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id'); 
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone', 15);
            $table->string('address');
            $table->unsignedBigInteger('location_id');
            $table->timestamps();

            // Foreign key relation
            $table->foreign('location_id')->references('location_id')->on('locations')->onDelete('cascade');
        });

        Schema::create('divisions', function (Blueprint $table) {
            $table->id(); // division_id (Primary Key)
            $table->string('division')->unique(); // Division name
            $table->timestamps();
        });

        // 2. Create 'districts' table with foreign key to 'divisions'
        Schema::create('districts', function (Blueprint $table) {
            $table->id(); // district_id (Primary Key)
            $table->string('district')->unique(); // District name
            $table->foreignId('division_id') // Foreign key to 'divisions'
                ->constrained('divisions')
                ->onDelete('cascade');
            $table->timestamps();
        });

        // 3. Create 'upazilas' table with foreign key to 'districts'
        Schema::create('upazilas', function (Blueprint $table) {
            $table->id(); // upazila_id (Primary Key)
            $table->string('upazila')->unique(); // Upazila name
            $table->foreignId('district_id') // Foreign key to 'districts'
                ->constrained('districts')
                ->onDelete('cascade');
            $table->timestamps();
        });

        // 4. Create 'service_providers' table with foreign key to 'upazilas'
        Schema::create('service_providers', function (Blueprint $table) {
            $table->id('provider_id'); // Primary key (provider_id)
            $table->unsignedBigInteger('user_id'); // References the 'users' table (assumed foreign key)
            $table->unsignedBigInteger('upazila_id');
            // Columns based on your form:
            $table->string('service'); // Service type (Plumbing, Electrician, etc.)
            $table->string('nid'); // National ID number (NID)
            $table->integer('experience_years'); // Experience in years
            $table->text('biography')->nullable(); // Short biography
            $table->string('profile_picture')->nullable(); // Path for profile picture
            
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade'); // References 'users' table
           // $table->unsignedBigInteger('upazila_id'); // Foreign key to 'upazilas'
            $table->foreign('upazila_id')->references('id')->on('upazilas')->onDelete('cascade'); // Foreign key to 'upazilas'
        });

        // Service Requests Table
        // Schema::create('service_requests', function (Blueprint $table) {
        //     $table->id('request_id');
        //     $table->unsignedBigInteger('user_id');
        //     $table->unsignedBigInteger('service_id');
        //     $table->text('details');
        //     $table->timestamps();

        //     // Foreign key relations
        //     $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        //     $table->foreign('service_id')->references('service_id')->on('services')->onDelete('cascade');
        // });

        // Job Offers Table
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id('offer_id');
            $table->unsignedBigInteger('request_id');
            $table->unsignedBigInteger('provider_id');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            // Foreign key relations
            $table->foreign('request_id')->references('request_id')->on('service_requests')->onDelete('cascade');
            $table->foreign('provider_id')->references('user_id')->on('users')->onDelete('cascade');
        });

        // Payments Table
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->unsignedBigInteger('request_id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('amount', 8, 2);
            $table->timestamps();

            // Foreign key relations
            $table->foreign('request_id')->references('request_id')->on('service_requests')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });

        // Reviews Table
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('review_id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('user_id');
            $table->text('review');
            $table->integer('rating')->unsigned();
            $table->timestamps();

            // Foreign key relations
            $table->foreign('service_id')->references('service_id')->on('services')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });

        // Notifications Table
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('notification_id');
            $table->unsignedBigInteger('user_id');
            $table->text('message');
            $table->timestamps();

            // Foreign key relation
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });

        // Chat Messages Table
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id('message_id');
            $table->unsignedBigInteger('sender_id');
            $table->unsignedBigInteger('receiver_id');
            $table->text('message');
            $table->timestamps();

            // Foreign key relations
            $table->foreign('sender_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('receiver_id')->references('user_id')->on('users')->onDelete('cascade');
        });

        // Service Locations Table
        Schema::create('service_locations', function (Blueprint $table) {
            $table->id('service_location_id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('location_id');
            $table->timestamps();

            // Foreign key relations
            $table->foreign('service_id')->references('service_id')->on('services')->onDelete('cascade');
            $table->foreign('location_id')->references('location_id')->on('locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_locations');
        Schema::dropIfExists('chat_messages');
        Schema::dropIfExists('notifications');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('job_offers');
        Schema::dropIfExists('service_requests');
        Schema::dropIfExists('services');
        Schema::dropIfExists('service_categories');
        Schema::dropIfExists('users');
        Schema::dropIfExists('locations');
        Schema::dropIfExists('upazilas');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('divisions');
        
    }
}
