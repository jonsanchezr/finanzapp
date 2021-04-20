<?php

namespace Database\Seeders;

use App\Models\TypeTransaction;
use Illuminate\Database\Seeder;

class TypeTransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $typetransactions = [
           'income',
           'expense',
           'transfer'
        ];
     
        foreach ($typetransactions as $typetransaction) {
             TypeTransaction::create(['name' => $typetransaction]);
        }
    }
}
