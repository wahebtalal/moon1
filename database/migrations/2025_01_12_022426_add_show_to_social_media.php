<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShowToSocialMedia extends Migration
{
    public function up(): void
    {
        Schema::table('social_media', function (Blueprint $table) {
$table->boolean('show')->default(true);
        });
    }

    public function down(): void
    {
        Schema::table('social_media', function (Blueprint $table) {
            $table->dropColumn('show');
            //
        });
    }
}
