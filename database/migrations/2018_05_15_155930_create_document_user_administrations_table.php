<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentUserAdministrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_user_administrations', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->string('title');
          $table->string('purpose');
          $table->text('process');
          $table->text('troubleshooting')->nullable();
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
        Schema::dropIfExists('document_user_administrations');
    }
}
