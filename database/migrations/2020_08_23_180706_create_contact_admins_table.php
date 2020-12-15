<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_admins', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('merkez_adresi');
            $table->longText('fabrika_adresi');
            $table->string('musteri_hatti');
            $table->string('telefon_hatti');
            $table->string('whatsapp');
            $table->longText('email');
            $table->string('acilis');
            $table->string('kapanis');
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
        Schema::dropIfExists('contact_admins');
    }
}
