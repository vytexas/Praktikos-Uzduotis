<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $workers = [
            'Kestutis Ulevskis',
            'Benonas Kateiva',
            'Valentinas Kavaliauskas',
            'Janas Kazlaukas'
        ];

        $brand = [
            'BMW',
            'Bentley',
            'Alfa Romeo'
        ];

        $model = [
            'KIZASHI',
            'SLAMMER',
            'H1'
        ];

        $year = [
            '2011',
            '2012',
            '2013'
        ];

        $owner = [
            'Vykantas Stankevičius ',
            'Danas Stankevičius',
            'Renius Jankauskas'
        ];

        $phone = [
            '8655563380',
            '869842149',
            '8627142348'
        ];

        $task = [
            'Salonas',
            'Filtrų Keitimas',
            'Skysčių Keitimas',
        ];

        $description = [
            'Aprašymas pvz 01',
            'Aprašymas pvz 02',
            'Aprašymas pvz 03'
        ];

        $due_to = [
            '2020-11-24',
            '2020-11-25',
            '2020-11-27'
        ];


        return [
            'assigned_to' => $workers[rand(0, 3)],
            'brand' => $brand[rand(0, 2)],
            'model' => $model[rand(0, 2)],
            'year' => $year[rand(0, 2)],
            'owner' => $owner[rand(0, 2)],
            'phone' => $phone[rand(0, 2)],
            'task' => $task[rand(0, 2)],
            'description' => $description[rand(0, 2)],
            'due_to' => $due_to[rand(0, 2)],
            'status' => 'Neatlikta'
        ];
    }
}
