<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Symptom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Symptom::create([
            'KodeGejala' => 'G01',
            'NamaGejala' => 'Easily angry and emotional',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G01',
            'NamaGejala' => 'Easily angry and emotional',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G01',
            'NamaGejala' => 'Easily angry and emotional',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G01',
            'NamaGejala' => 'Easily angry and emotional',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G02',
            'NamaGejala' => 'Changeable appetite',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G02',
            'NamaGejala' => 'Changeable appetite',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G02',
            'NamaGejala' => 'Changeable appetite',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G02',
            'NamaGejala' => 'Changeable appetite',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G03',
            'NamaGejala' => 'Insomnia',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G03',
            'NamaGejala' => 'Insomnia',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G03',
            'NamaGejala' => 'Insomnia',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G03',
            'NamaGejala' => 'Insomnia',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G04',
            'NamaGejala' => 'Anxious, restless and shock',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G04',
            'NamaGejala' => 'Anxious, restless and shock',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G04',
            'NamaGejala' => 'Anxious, restless and shock',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G04',
            'NamaGejala' => 'Anxious, restless and shock',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G05',
            'NamaGejala' => 'Wistful and muse',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G05',
            'NamaGejala' => 'Wistful and muse',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G05',
            'NamaGejala' => 'Wistful and muse',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G05',
            'NamaGejala' => 'Wistful and muse',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G06',
            'NamaGejala' => 'Bad Prejudice',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G06',
            'NamaGejala' => 'Bad Prejudice',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G06',
            'NamaGejala' => 'Bad Prejudice',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G06',
            'NamaGejala' => 'Bad Prejudice',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G07',
            'NamaGejala' => 'Easily offended',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G07',
            'NamaGejala' => 'Easily offended',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G07',
            'NamaGejala' => 'Easily offended',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G07',
            'NamaGejala' => 'Easily offended',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G08',
            'NamaGejala' => 'Unfocused and dazed',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G08',
            'NamaGejala' => 'Unfocused and dazed',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G08',
            'NamaGejala' => 'Unfocused and dazed',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G08',
            'NamaGejala' => 'Unfocused and dazed',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G09',
            'NamaGejala' => 'Headaches',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G09',
            'NamaGejala' => 'Headaches',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G09',
            'NamaGejala' => 'Headaches',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G09',
            'NamaGejala' => 'Headaches',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G10',
            'NamaGejala' => 'Loneliness',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G10',
            'NamaGejala' => 'Loneliness',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G10',
            'NamaGejala' => 'Loneliness',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G10',
            'NamaGejala' => 'Loneliness',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G11',
            'NamaGejala' => 'Sad all the time',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0.4
        ]);
        Symptom::create([
            'KodeGejala' => 'G11',
            'NamaGejala' => 'Sad all the time',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G11',
            'NamaGejala' => 'Sad all the time',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.4
        ]);
        Symptom::create([
            'KodeGejala' => 'G11',
            'NamaGejala' => 'Sad all the time',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G12',
            'NamaGejala' => 'Desperate and feeling depressed',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G12',
            'NamaGejala' => 'Desperate and feeling depressed',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G12',
            'NamaGejala' => 'Desperate and feeling depressed',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G12',
            'NamaGejala' => 'Desperate and feeling depressed',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G13',
            'NamaGejala' => 'Slow motion',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0.4
        ]);
        Symptom::create([
            'KodeGejala' => 'G13',
            'NamaGejala' => 'Slow motion',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G13',
            'NamaGejala' => 'Slow motion',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G13',
            'NamaGejala' => 'Slow motion',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G14',
            'NamaGejala' => 'Rampage',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G14',
            'NamaGejala' => 'Rampage',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.6
        ]);
        Symptom::create([
            'KodeGejala' => 'G14',
            'NamaGejala' => 'Rampage',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G14',
            'NamaGejala' => 'Rampage',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G15',
            'NamaGejala' => 'Fickle and inconsistent',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G15',
            'NamaGejala' => 'Fickle and inconsistent',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G15',
            'NamaGejala' => 'Fickle and inconsistent',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G15',
            'NamaGejala' => 'Fickle and inconsistent',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G16',
            'NamaGejala' => 'Excessive hallucinations',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G16',
            'NamaGejala' => 'Excessive hallucinations',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.4
        ]);
        Symptom::create([
            'KodeGejala' => 'G16',
            'NamaGejala' => 'Excessive hallucinations',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.4
        ]);
        Symptom::create([
            'KodeGejala' => 'G16',
            'NamaGejala' => 'Excessive hallucinations',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0.4
        ]);
        Symptom::create([
            'KodeGejala' => 'G17',
            'NamaGejala' => 'Feel guilty',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G17',
            'NamaGejala' => 'Feel guilty',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G17',
            'NamaGejala' => 'Feel guilty',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G17',
            'NamaGejala' => 'Feel guilty',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G18',
            'NamaGejala' => 'Suicide Desire',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G18',
            'NamaGejala' => 'Suicide Desire',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.6
        ]);
        Symptom::create([
            'KodeGejala' => 'G18',
            'NamaGejala' => 'Suicide Desire',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G18',
            'NamaGejala' => 'Suicide Desire',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0.6
        ]);
        Symptom::create([
            'KodeGejala' => 'G19',
            'NamaGejala' => 'Sleep disturbance such as nightmares',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G19',
            'NamaGejala' => 'Sleep disturbance such as nightmares',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G19',
            'NamaGejala' => 'Sleep disturbance such as nightmares',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G19',
            'NamaGejala' => 'Sleep disturbance such as nightmares',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G20',
            'NamaGejala' => 'Remembering the past',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G20',
            'NamaGejala' => 'Remembering the past',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.6
        ]);
        Symptom::create([
            'KodeGejala' => 'G20',
            'NamaGejala' => 'Remembering the past',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G20',
            'NamaGejala' => 'Remembering the past',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G21',
            'NamaGejala' => 'Responsive toward the past',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G21',
            'NamaGejala' => 'Responsive toward the past',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G21',
            'NamaGejala' => 'Responsive toward the past',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G21',
            'NamaGejala' => 'Responsive toward the past',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G22',
            'NamaGejala' => 'Apathetic',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G22',
            'NamaGejala' => 'Apathetic',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G22',
            'NamaGejala' => 'Apathetic',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G22',
            'NamaGejala' => 'Apathetic',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G23',
            'NamaGejala' => 'Avoid social',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G23',
            'NamaGejala' => 'Avoid social',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G23',
            'NamaGejala' => 'Avoid social',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G23',
            'NamaGejala' => 'Avoid social',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G24',
            'NamaGejala' => 'Loss of interest',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G24',
            'NamaGejala' => 'Loss of interest',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.1
        ]);
        Symptom::create([
            'KodeGejala' => 'G24',
            'NamaGejala' => 'Loss of interest',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G24',
            'NamaGejala' => 'Loss of interest',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G25',
            'NamaGejala' => 'Post-traumatic stress disorder',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G25',
            'NamaGejala' => 'Post-traumatic stress disorder',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G25',
            'NamaGejala' => 'Post-traumatic stress disorder',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G25',
            'NamaGejala' => 'Post-traumatic stress disorder',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G26',
            'NamaGejala' => 'Agitation',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G26',
            'NamaGejala' => 'Agitation',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G26',
            'NamaGejala' => 'Agitation',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G26',
            'NamaGejala' => 'Agitation',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G27',
            'NamaGejala' => 'Excessive sweating',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G27',
            'NamaGejala' => 'Excessive sweating',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G27',
            'NamaGejala' => 'Excessive sweating',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.4
        ]);
        Symptom::create([
            'KodeGejala' => 'G27',
            'NamaGejala' => 'Excessive sweating',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G28',
            'NamaGejala' => 'Urinating too often',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G28',
            'NamaGejala' => 'Urinating too often',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G28',
            'NamaGejala' => 'Urinating too often',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G28',
            'NamaGejala' => 'Urinating too often',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G29',
            'NamaGejala' => 'Panic attack',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G29',
            'NamaGejala' => 'Panic attack',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G29',
            'NamaGejala' => 'Panic attack',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G29',
            'NamaGejala' => 'Panic attack',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G30',
            'NamaGejala' => 'Possessed',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G30',
            'NamaGejala' => 'Possessed',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G30',
            'NamaGejala' => 'Possessed',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G30',
            'NamaGejala' => 'Possessed',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0.6
        ]);
        Symptom::create([
            'KodeGejala' => 'G31',
            'NamaGejala' => 'Weird Talk',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G31',
            'NamaGejala' => 'Weird Talk',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G31',
            'NamaGejala' => 'Weird Talk',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G31',
            'NamaGejala' => 'Weird Talk',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0.2
        ]);
        Symptom::create([
            'KodeGejala' => 'G32',
            'NamaGejala' => 'Weird Talk',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Depression',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G32',
            'NamaGejala' => 'Weird Talk',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'PTSD',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G32',
            'NamaGejala' => 'Weird Talk',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Anxiety Disorder',
            'CFValue' => 0
        ]);
        Symptom::create([
            'KodeGejala' => 'G32',
            'NamaGejala' => 'Weird Talk',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Schizofrenia',
            'CFValue' => 0.2
        ]);
    }
}
