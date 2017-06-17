<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('requirement_id');
            $table->integer('user_id');//nötig? Siehe Requirements-Table
            $table->integer('functionalscore');
            $table->integer('dysfunctionalscore');  //nicht sicher ob eine score ID genutzt werden sollte mit nem table wo die werte zugewiesen werden, i.e. "erwarte ich = +5" --man kann doch den Radiobuttons direkt nen Wert geben
            $table->integer('functionalimportance');
            $table->integer('dysfunctionalimportance'); //same --Würde ich weglassen. Wir wollen doch eh nur bei den positiven Fragen nach der Wichtigkeit fragen.
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
        Schema::dropIfExists('reply');
    }
}
