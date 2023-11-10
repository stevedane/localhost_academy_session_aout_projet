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
        Schema::create('payments', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id();
=======
            $table->idpayment();
            $table->foreignId('idlocation');
            $table->decimal('montant');
            $table->string('reference');
            $table->enum('systemPaiement', ['card','MobileMoney','Espece']);
            $table->string('paymentNumber');
>>>>>>> 6becef5 (update_table_category_and_table_payments)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
