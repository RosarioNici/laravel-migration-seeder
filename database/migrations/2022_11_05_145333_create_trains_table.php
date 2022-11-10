<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{

    public function up()
        {
            Schema::create('trains', function (Blueprint $table) {
                $table->id();
                $table->string('azienda', 100); // tabella aziende?
                $table->string('stazione_partenza', 50); // tabella stazione?
                $table->string('stazione_arrivo', 50); // tabella stazione?
                $table->time('orario_di_partenza');
                $table->time('orario_di_arrivo');
                $table->date('data_di_partenza');
                $table->date('data_di_arrivo');
                $table->string('codice_treno', 10)->unique();
                $table->tinyInteger('numero_carrozze')->unsigned()->default(0);
                $table->boolean('in_orario')->default(true);
                $table->tinyInteger('cancellato')->default(0);

            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('trains');
        }
    }
