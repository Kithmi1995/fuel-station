<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nic')->unique();
            $table->string('contact');
            $table->string('address');
            $table->date('dob');
            $table->string('role'); // admin, manager, owner, data entry operator, cashier
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'first_name' => 'Kithmi',
            'last_name' => 'Ranaweera',
            'nic' => '956791233V',
            'contact' => "12345678",
            'address' => 'Matara',
            'dob' => '1995-07-24',
            'role' => 'deo',
            'email' => 'kithmi1995kalpana@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
