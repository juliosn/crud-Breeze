<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('district');
            $table->string('cep');
            $table->string('city');
            $table->enum('state',   [   'AC',
                                        'AL',
                                        'AP',
                                        'AM',
                                        'BA',
                                        'CE',
                                        'DF',
                                        'ES',
                                        'GO',
                                        'MA',
                                        'MT',
                                        'MS',
                                        'MG',
                                        'PA',
                                        'PB',
                                        'PR',
                                        'PE',
                                        'PI',
                                        'RJ',
                                        'RN',
                                        'RS',
                                        'RO',
                                        'RR',
                                        'SC',
                                        'SP',
                                        'SE',
                                        'TO'
                                    ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
