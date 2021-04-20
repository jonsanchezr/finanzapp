<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryTransaction;
use App\Models\TypeTransaction;

class CategoryTransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryTransaction::create([
          'type_transaction_id' => TypeTransaction::INCOME,
          'name' => 'Trabajo Jonathan',
        ]);

        CategoryTransaction::create([
          'type_transaction_id' => TypeTransaction::EXPENSE,
          'name' => 'Compras',
        ]);
    }
}
