<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCommentMultiFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->string('created_at')->nullable()->change();
            $table->string('google_access_token', 1024)->nullable()->after('body');
            $table->string('google_refresh_token', 1024)->nullable()->after('google_access_token');
            $table->smallInteger('google_expires_in')->nullable()->after('google_refresh_token');
            $table->timestamp('google_token_issued_at')->nullable()->after('google_expires_in');
            $table->string('google_customer_id')->nullable()->after('google_token_issued_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
