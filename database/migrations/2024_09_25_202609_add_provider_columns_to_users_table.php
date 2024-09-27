<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProviderColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('provider')->nullable()->after('email'); // Store the OAuth provider (e.g., 'github', 'google')
            $table->string('provider_id')->nullable()->after('provider'); // Store the provider's unique user ID
            $table->string('provider_token')->nullable()->after('provider_id'); // Store the token provided by the OAuth service
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
            $table->dropColumn(['provider', 'provider_id', 'provider_token']);
        });
    }
}
