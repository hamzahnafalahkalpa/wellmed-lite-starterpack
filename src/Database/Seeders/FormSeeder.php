<?php

namespace Hanafalah\WellmedLiteStarterpack\Database\Seeders;

use Hanafalah\LaravelSupport\Concerns\Support\HasRequestData;
use Hanafalah\ModuleExamination\Models\Form\Form;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder{
    use HasRequestData;

    private $__form;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->__form = app(config('database.models.Form', Form::class));

        $forms = [
            $this->modelMorph('AdministrationVitaminA') => [
                'name'    => 'Pemberian Vitamin A',
                'ordering' => 1,
                'type'    => 'Plan'
            ],
            $this->modelMorph('Allergy') => [
                'name' => 'Riwayat Alergi Pasien',
                'ordering' => 3,
                'type' => 'Subjective'
            ],
            $this->modelMorph('Alloanamnese') => [
                'name' => 'Alloanamnese',
                'ordering' => 1,
                'type' => 'Subjective'
            ],
            $this->modelMorph('ANCTerpadu') => [
                'name'    => 'ANC TERPADU',
                'type'    => 'Subjective',
                'form_has_survey' => [
                    "survey" => include(__DIR__ . '/data/forms/ANCTerpadu.php')
                ]
            ],
            $this->modelMorph('Anthropometry') => [
                'name' => 'Anthropometry',
                'ordering' => 2,
                'type'    => 'Objective'
            ],
            // $this->modelMorph('AudiometriTest') => [
            //     'name' => 'Tes Audiometri',
            //     'ordering' => 3,
            //     'type'    => 'Objective'
            // ],
            // $this->modelMorph('BloodSugarTest') => [
            //     'name' => 'Tes Gula Darah',
            //     'ordering' => 3,
            //     'type'    => 'Plan'
            // ],
            // $this->modelMorph('ChildAndPregnancyHistory') => [
            //     'name' => 'Anak dan Riwayat Persalinan',
            //     'type'    => 'Subjective'
            // ],
            // $this->modelMorph('ChildGrowth') => [
            //     'name' => 'Tumbuh Kembang Anak',
            //     'type'    => 'Objective',
            //     'form_has_survey' => [
            //         "survey" => include(__DIR__ . '/data/forms/ChildGrowth.php')
            //     ]
            // ],
            // $this->modelMorph('EarExamination') => [
            //     'name' => 'Pemeriksaan Telinga',
            //     'type'    => 'Objective'
            // ],
            // $this->modelMorph('EyeExamination') => [
            //     "name" => "Pemeriksaan Mata Lengkap",
            //     'type'    => 'Objective'
            // ],
            // $this->modelMorph('EyeRefractionExamination') => [
            //     "name" => "Refraksi Mata",
            //     'type'    => 'Objective'
            // ],
            // $this->modelMorph('EyeVisionColor') => [
            //     "name" => "Pemeriksaan matan dan Color Vision",
            //     'type'    => 'Objective'
            // ],
            // $this->modelMorph('FamilyPlanningService') => [
            //     "name" => "Pelayanan KB",
            //     'type'    => 'Plan'
            // ],
            // $this->modelMorph('Partus') => [
            //     "name" => "Persalinan",
            //     'type'    => 'Objective',
            //     'form_has_survey' => [
            //         "survey" => include(__DIR__ . '/data/forms/Partus.php')
            //     ]
            // ],
            // $this->modelMorph('HearingFunction') => [
            //     'name'    => 'PEMERIKSAAN FUNGSI PENDENGARAN',
            //     'type' => 'Objective',
            //     'form_has_survey' => [
            //         "survey" => include(__DIR__ . '/data/forms/HearingFunction.php')
            //     ]
            // ],
            // $this->modelMorph('HearingLossHistory') => [
            //     'name' => 'Gangguan Pendengaran',
            //     'type' => 'Objective'
            // ],
            // $this->modelMorph('HemoglobinTest') => [
            //     "name" => "Pemeriksaan Hemoglobin (HB)",
            //     'type' => 'Objective'
            // ],
            // $this->modelMorph('ImmunizationHistory') => [
            //     "name" => "Riwayat Imunisasi",
            //     'type' => 'Objective'
            // ],
            // $this->modelMorph('LarynxExamination') => [
            //     'name' => 'Pemeriksaan Laring',
            //     'type' => 'Objective'
            // ],
            // $this->modelMorph('MouthCavity') => [
            //     'name'    => 'KEADAAN RONGGA MULUT',
            //     'type'    => 'Objective',
            //     'form_has_survey' => [
            //         "survey" => include(__DIR__ . '/data/forms/MouthCavity.php')
            //     ]
            // ],
            // $this->modelMorph('MouthCavityOther') => [
            //     'name'    => 'KEADAAN GUSI, KEBERSIHAN GIGI,DAN KONDISI LAINNYA',
            //     'type'    => 'Objective',
            //     'form_has_survey' => [
            //         "survey" => include(__DIR__ . '/data/forms/MouthCavityOther.php')
            //     ]
            // ],
            // $this->modelMorph('NeonatalEsensial') => [
            //     "name" => "Neonatal Esential",
            //     'type'    => 'Objective',
            //     'form_has_survey' => [
            //         "survey" => include(__DIR__ . '/data/forms/NeonatalEsensial.php')
            //     ] 
            // ],
            // $this->modelMorph('NewBornCheckUp') => [
            //     'name'    => 'PEMERIKSAAN BAYI BARU LAHIR',
            //     'type'    => 'Objective',
            //     'form_has_survey' => [
            //         "survey" => include(__DIR__ . '/data/forms/NewBornCheckUp.php')
            //     ]
            // ],
            // $this->modelMorph('NoseExamination') => [
            //     'name' => 'Pemeriksaan Hidung',
            //     'type'    => 'Objective'
            // ],
            // $this->modelMorph('Odontogram') => [
            //     'name' => 'Odontogram',
            //     'type'    => 'Objective'
            // ],
            // $this->modelMorph('POPMHistory') => [
            //     "name" => "Pemberian obat pencegahan massal cacingan (POPM)",
            //     'type' => 'Objective'
            // ],
            $this->modelMorph('PainScale') => [
                'name' => 'Sekala Nyeri',
                'type'    => 'Objective'
            ],
            // $this->modelMorph('PostpartumObservation') => [
            //     'name'    => 'PELAYANAN KESEHATAN IBU NIFAS',
            //     'type'    => 'Objective',
            //     'form_has_survey' => [
            //         "survey" => include(__DIR__ . '/data/forms/PostpartumObservation.php')
            //     ]
            // ],
            $this->modelMorph('Symptom') => [
                'name' => 'Gejala & Keluhan',
                'type'    => 'Subjective'
            ],
            // $this->modelMorph('TTDExamination') => [
            //     "name" => "Tablet Tambah Darah (TTD)",
            //     'type'    => 'Assessment'
            // ],
            $this->modelMorph('TetanusImmunization') => [
                "name" => "Riwayat Imunisasi Tetanus",
                'type'    => 'Subjective'
            ],
            $this->modelMorph('ThoraxExamination') => [
                'name'    => 'PEMERIKSAAN FOTO THORAX',
                'type'    => 'Objective',
                'form_has_survey' => [
                    "survey" => include(__DIR__ . '/data/forms/ThoraxExamination.php')
                ]
            ],
            // $this->modelMorph('ThroatExamination') => [
            //     'name' => 'Pemeriksaan Tenggorokan',
            //     'type'    => 'Objective'
            // ],
            // $this->modelMorph('VisualImpairmentTest') => [
            //     "name" => "Formulir Gangguan Pengelihatan",
            //     'type'    => 'Objective'
            // ],
            $this->modelMorph('VitalSign') => [
                'name' => 'Tanda Tanda Vital',
                'type'    => 'Objective'
            ],
            $this->modelMorph('InitialDiagnose') => [
               'name'  => 'Diagnosa Awal/Masuk',
               'type'    => 'Objective',
            ],
            $this->modelMorph('PrimaryDiagnose') => [
                'name'  => 'Diagnosa Primer',
               'type'    => 'Objective'
            ],
            $this->modelMorph('SecondaryDiagnose') => [
                'name'  => 'Diagnosa Sekunder',
                'type'    => 'Objective'
            ],
            $this->modelMorph('HistoryIllness') => [
                'name' => 'Riwayat Penyakit Patient',
                'type'    => 'Subjective'
            ],
            $this->modelMorph('FamilyIllness') => [
                'name' => 'Riwayat Penyakit Keluarga Patient',
                'type'    => 'Subjective'
            ],
            $this->modelMorph('PhysicalExamination') => [
                'name' => 'Pemeriksaan Fisik',
                'type'    => 'Objective'
            ],
            $this->modelMorph('ClinicalTreatment') => [
                'name' => 'Tindakan Medis Poliklinik',
                'type'    => 'Assessment'
            ],
            $this->modelMorph('Prescription') => [
                'name' => 'Resep Obat',
                'type'    => 'Plan'
            ],
            $this->modelMorph('MedicToolPrescription') => [
                'name' => 'Resep BMHP',
                'type'    => 'Plan'
            ],
            $this->modelMorph('MixPrescription') => [
                'name' => 'Resep Racik',
                'type'    => 'Plan'
            ]
        ];
        $this->createForm($forms);
    }

    private function model(string $model): Model{
        return app(config('database.models.'.$model));
    }

    private function modelMorph(string $model): string{
        try {
            return $this->model($model)->getMorphClass();
        } catch (\Throwable $th) {
            dd($model);
        }
    }

    private function createForm($forms,$parent_id=null){
        foreach ($forms as $label => $form) {
            $form['label'] = $label;
            try {
                $form_model = app(config('app.contracts.Form'))->prepareStoreForm(
                    $this->requestDTO(config('app.contracts.FormData'), $form),
                );
            } catch (\Throwable $th) {
                dd($th->getMessage());
                throw $th;
            }

            // $form_model = $this->__form->updateOrCreate([
            //     'parent_id' => $parent_id,
            //     'label'     => $label,
            //     'name'      => $form['name']
            // ]);

            // if (isset($form['prop']) && count($form['prop']) > 0){
            //     foreach ($form['prop'] as $prop_key => $prop) $form_model->{$prop_key} = $prop;
            //     $form_model->save();
            // }

            // if (isset($form['childs']) && count($form['childs']) > 0){
            //     $this->createForm($form['childs'],$form_model->getKey());
            // }

            // if (isset($surveys)){
            //     $surveys = $form['form_has_survey'] ?? [];
            //     if (!is_array($surveys)) $surveys = [$surveys];

            //     $attaches = [];
            //     foreach ($surveys as $survey) {
            //         $survey_model = $this->model('Survey')->updateOrCreate([
            //             'flag' => $survey['flag']
            //         ],[
            //             'name' => $survey['name']
            //         ]);

            //         if (isset($survey['props'])){
            //             $dynamic_forms = [];
            //             foreach ($survey['props']['dynamic_forms'] as $key => $dynamic_form){
            //                 $dynamic_form['ordering'] = $key + 1;
            //                 $dynamic_forms[] = $dynamic_form;
            //             }
            //             $survey_model->setAttribute('dynamic_forms', $dynamic_forms);
            //             $survey_model->save();
            //         }
            //         $attaches[] = $survey_model;
            //     }
            //     $form_model->surveys()->sync($attaches);
            // }
        }
    }
}
