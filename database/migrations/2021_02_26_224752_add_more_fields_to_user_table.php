<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreFieldsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->bigInteger('referred_by')->nullable();
            $table->string('phone')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('id_type')->nullable();
            $table->string('id_image')->nullable();
            $table->string('profile_image')->nullable();

            $table->decimal('bonus_wallet', 11, 3)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
//           $table->dropColumn(['phone', 'postal_code', 'date_of_birth', 'city', 'state', 'country', 'address', 'id_type', 'id_image', 'profile_image', 'bonus_wallet']);
        });
    }
}
