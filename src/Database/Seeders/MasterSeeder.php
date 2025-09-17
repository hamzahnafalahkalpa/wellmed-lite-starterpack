<?php

namespace Hanafalah\WellmedLiteStarterpack\Database\Seeders;

use Hanafalah\KlinikStarterpack\Database\Seeders as KlinikStarterpack;
use Hanafalah\ModuleEmployee\Seeders\EmployeeTypeSeeder;
use Hanafalah\ModuleExamination\Seeders\{
    ExaminationStuffSeeder,
    MasterVaccineSeeder,
    FormSeeder
};
use Hanafalah\ModulePeople\Database\Seeders\DatabaseSeeder as PeopleCollectionSeeder;
use Hanafalah\ModuleAnatomy\Database\Seeders\DatabaseSeeder as AnatomyCollectionSeeder;
use Hanafalah\ModuleItem\Database\Seeders\DatabaseSeeder as ItemCollectionSeeder;
use Hanafalah\ModuleInformedConsent\Seeders\MasterInformedConsentSeeder;
use Hanafalah\ModulePayment\Database\Seeders\WalletSeeder;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder{
    public function run()
    {
        $this->call([
                PeopleCollectionSeeder::class,
                KlinikStarterpack\ItemStuffSeeder::class,
                KlinikStarterpack\PatientTypeSeeder::class,
                KlinikStarterpack\PatientTypeServiceSeeder::class,
                KlinikStarterpack\MedicServiceSeeder::class,
                KlinikStarterpack\PaymentMethodSeeder::class,
                KlinikStarterpack\ProfessionSeeder::class,
                KlinikStarterpack\OccupationSeeder::class,
                FormSeeder::class,
                ExaminationStuffSeeder::class,
                MasterVaccineSeeder::class,
                AnatomyCollectionSeeder::class,
                KlinikStarterpack\RegionalSeeder::class,
                EmployeeTypeSeeder::class,
                EmployeeSeeder::class,
                KlinikStarterpack\PatientOccupationSeeder::class,
                KlinikStarterpack\FundingSeeder::class,
                WalletSeeder::class,
                KlinikStarterpack\DosageFormSeeder::class,
                KlinikStarterpack\FreqUnitSeeder::class,
                KlinikStarterpack\MedicalCompositionUnitSeeder::class,
                KlinikStarterpack\CompositionUnitSeeder::class,
                KlinikStarterpack\MedicalNetUnitSeeder::class,
                KlinikStarterpack\MixUnitSeeder::class,
                KlinikStarterpack\TherapeuticClassSeeder::class,
                KlinikStarterpack\PackageFormSeeder::class,
                KlinikStarterpack\TrademarkSeeder::class,
                KlinikStarterpack\UsageLocationSeeder::class,
                KlinikStarterpack\UsageRouteSeeder::class,
                // KlinikStarterpack\RoomItemCategorySeeder::class,
                ItemCollectionSeeder::class,
                // KlinikStarterpack\ClassRoomSeeder::class,
                KlinikStarterpack\BrandSeeder::class,
                KlinikStarterpack\InfrastructureSeeder::class,
                // KlinikStarterpack\PurchaseLabelSeeder::class,
                // KlinikStarterpack\SampleSeeder::class,
                // KlinikStarterpack\ClinicalPathologySeeder::class,
                // KlinikStarterpack\RadiologySeeder::class,
                // KlinikStarterpack\ProgramCategorySeeder::class,
                // KlinikStarterpack\ProgramOccupationSeeder::class,
                MasterInformedConsentSeeder::class
                // KlinikStarterpack\ScreeningSeeder::class
        ]);
    }
}
