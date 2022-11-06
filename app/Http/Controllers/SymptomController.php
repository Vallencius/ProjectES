<?php

namespace App\Http\Controllers;

use App\Models\Symptom;
use Illuminate\Http\Request;

class SymptomController extends Controller
{
    public function index(){
        $gejala = Symptom::groupBy('KodeGejala')->count();
        $penyakit = Symptom::groupBy('KodePenyakit')->count();
        $pengetahuan = Symptom::count();
        return view('content.dashboard', [
            'gejala' => $gejala,
            'pengetahuan' => $pengetahuan,
            'penyakit' => $penyakit,
        ]);
    }

    public function diagnosis(){
        $symptoms = Symptom::groupBy('KodeGejala')->get();
        return view('content.diagnosis', ['symptoms' => $symptoms]);
    }

    public function diagnosisVerify(Request $request){
        //CF[H, e] Depresi (P01)
        $CFHe1 = [];
        $i = 1;

        $sympP1 = Symptom::All()->where('KodePenyakit', '==', "P01");
        foreach($sympP1 as $symp){
            if($i<10){
                $CFHe1[$i] = $symp->CFValue * $request["G0".$i];
            }else{
                $CFHe1[$i] = $symp->CFValue * $request["G".$i];
            }
            $i++;
        }
        
        //CF[H, e] PTSD (P02)
        $CFHe2 = [];
        $i = 1;

        $sympP2 = Symptom::All()->where('KodePenyakit', '==', "P02");
        foreach($sympP2 as $symp){
            if($i<10){
                $CFHe2[$i] = $symp->CFValue * $request["G0".$i];
            }else{
                $CFHe2[$i] = $symp->CFValue * $request["G".$i];
            }
            $i++;
        }
        
        //CF[H, e] Anxiety Disorder (P03)
        $CFHe3 = [];
        $i = 1;

        $sympP3 = Symptom::All()->where('KodePenyakit', '==', "P03");
        foreach($sympP3 as $symp){
            if($i<10){
                $CFHe3[$i] = $symp->CFValue * $request["G0".$i];
            }else{
                $CFHe3[$i] = $symp->CFValue * $request["G".$i];
            }
            $i++;
        }
        
        //CF[H, e] Schizofrenia (P04)
        $CFHe4 = [];
        $i = 1;

        $sympP4 = Symptom::All()->where('KodePenyakit', '==', "P04");
        foreach($sympP4 as $symp){
            if($i<10){
                $CFHe4[$i] = $symp->CFValue * $request["G0".$i];
            }else{
                $CFHe4[$i] = $symp->CFValue * $request["G".$i];
            }
            $i++;
        }

        //CFCombine
        //P01 Depresi
        $CFCombine1 = 0;
        $CFCombine1 = $CFHe1[1] + ($CFHe1[2] * (1-$CFHe1[1]));
        for($i=2; $i <= count($CFHe1); $i++){
            $CFCombine1 = $CFHe1[$i] + ($CFCombine1 * (1-$CFHe1[$i]));
        }
        //P02 PTSD
        $CFCombine2 = 0;
        $CFCombine2 = $CFHe2[1] + ($CFHe2[2] * (1-$CFHe2[1]));
        for($i=2; $i <= count($CFHe2); $i++){
            $CFCombine2 = $CFHe2[$i] + ($CFCombine2 * (1-$CFHe2[$i]));
        }
        //P03 Gangguan Kecemasan
        $CFCombine3 = 0;
        $CFCombine3 = $CFHe3[1] + ($CFHe3[2] * (1-$CFHe3[1]));
        for($i=2; $i <= count($CFHe3); $i++){
            $CFCombine3 = $CFHe3[$i] + ($CFCombine3 * (1-$CFHe3[$i]));
        }
        //P04 Skizofrenia
        $CFCombine4 = 0;
        $CFCombine4 = $CFHe4[1] + ($CFHe4[2] * (1-$CFHe4[1]));
        for($i=2; $i <= count($CFHe4); $i++){
            $CFCombine4 = $CFHe4[$i] + ($CFCombine4 * (1-$CFHe4[$i]));
        }
        $value = max($CFCombine1, $CFCombine2, $CFCombine3, $CFCombine4);
        switch($value){
            case $CFCombine1:
                $penyakit = "Depresi";
                break;
            case $CFCombine2:
                $penyakit = "PTSD";
                break;
            case $CFCombine3:
                $penyakit = "Gangguan Kecemasan";
                break;
            case $CFCombine4:
                $penyakit = "Skizofrenia";
                break;
        }

        return view('content.result', [
            'penyakit' => $penyakit,
            'value' => $value
        ]);
    }
}
