<?php

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // se utilizzo db statico con array dovro' togliere i parametri dentro run()
    public function run(Faker $faker)
    {
    
        for($i = 0; $i < 20; $i++){

            $newTrain =  new Train();
            $newTrain->azienda= $faker->name(); 
            $newTrain->stazione_di_partenza= "Stazione di:" ." ". $faker->name(); 
            $newTrain->stazione_di_arrivo="Stazione di:" ." ". $faker->name(); 
            $newTrain->orario_di_partenza=$faker->time(); 
            $newTrain->orario_di_arrivo=$faker->time(); 
            $newTrain->codice_treno=$faker->lexify(); 
            $newTrain->numero_carrozze=$faker->numberBetween(1, 20); 
            $newTrain->in_orario= $faker->boolean(); 
            $newTrain->cancellato= $faker->boolean(); 
            $newTrain->save();
        }


    }
}


       
    // soluzione statica

    //     $trains = [
    //         [
    //             "azienda"=> "Trenitalia",
    //             "stazione_di_partenza"=> "Milano",
    //             "stazione_di_arrivo"=>"Roma",
    //             "orario_di_partenza"=>"13:00",
    //             "orario_di_arrivo"=>"17:00",
    //             "codice_treno"=>"HFRAWZXC",
    //             "numero_carrozze"=> 20,
    //             "in_orario"=>false,
    //             "cancellato"=>false,
    //         ],
    //         [
    //             "azienda"=> "Trenitalia",
    //             "stazione_di_partenza"=> "Milano",
    //             "stazione_di_arrivo"=>"Roma",
    //             "orario_di_partenza"=>"13:00",
    //             "orario_di_arrivo"=>"17:00",
    //             "codice_treno"=>"HFRAWZXC",
    //             "numero_carrozze"=> 20,
    //             "in_orario"=>false,
    //             "cancellato"=>false,
    //         ],
    //         [
    //             "azienda"=> "Trenitalia",
    //             "stazione_di_partenza"=> "Milano",
    //             "stazione_di_arrivo"=>"Roma",
    //             "orario_di_partenza"=>"13:00",
    //             "orario_di_arrivo"=>"17:00",
    //             "codice_treno"=>"HFRAWZXC",
    //             "numero_carrozze"=> 20,
    //             "in_orario"=>false,
    //             "cancellato"=>false,  
    //         ],
    //         [
    //             "azienda"=> "Trenitalia",
    //             "stazione_di_partenza"=> "Milano",
    //             "stazione_di_arrivo"=>"Roma",
    //             "orario_di_partenza"=>"13:00",
    //             "orario_di_arrivo"=>"17:00",
    //             "codice_treno"=>"HFRAWZXC",
    //             "numero_carrozze"=> 20,
    //             "in_orario"=>false,
    //             "cancellato"=>false,
    //         ],
    //     ];

    //     foreach($trains as $train){
    //         $newTrain = new Train();
    //         $newTrain->azienda=$train['azienda']; 
    //         $newTrain->stazione_di_partenza=$train['stazione_di_partenza']; 
    //         $newTrain->stazione_di_arrivo=$train['stazione_di_arrivo']; 
    //         $newTrain->orario_di_partenza=$train['orario_di_partenza']; 
    //         $newTrain->orario_di_arrivo=$train['orario_di_arrivo']; 
    //         $newTrain->codice_treno=$train['codice_treno']; 
    //         $newTrain->numero_carrozze=$train['numero_carrozze']; 
    //         $newTrain->in_orario=$train['in_orario']; 
    //         $newTrain->cancellato=$train['cancellato']; 
    //         $newTrain->save();
    //     }