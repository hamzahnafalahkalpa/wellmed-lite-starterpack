<?php

namespace Hanafalah\WellmedLiteStarterpack\Database\Seeders;

use Illuminate\Database\Seeder;
use Hanafalah\KlinikStarterpack\Database\Seeders as KlinikStarterpack;
use Hanafalah\ModulePeople\Database\Seeders\DatabaseSeeder as PeopleCollectionSeeder;
use Hanafalah\ModuleAnatomy\Database\Seeders\DatabaseSeeder as AnatomyCollectionSeeder;
use Hanafalah\ModuleEmployee\Seeders\EmployeeTypeSeeder;
use Hanafalah\ModuleInformedConsent\Seeders\MasterInformedConsentSeeder;
use Hanafalah\ModuleItem\Database\Seeders\DatabaseSeeder as ItemCollectionSeeder;
use Hanafalah\ModuleExamination\Seeders\{
    ExaminationStuffSeeder,
    MasterVaccineSeeder,
    FormSeeder
};
use Hanafalah\ModulePayment\Database\Seeders\WalletSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            \Illuminate\Support\Facades\Artisan::call('telescope:pause');

            $this->call([
                WorkspaceSeeder::class,
                ApiAccessSeeder::class,
                PermissionSeeder::class,
                RoleSeeder::class,
                EncodingSeeder::class,
                MasterSeeder::class
            ]);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            throw $th;
        }
    }
}
