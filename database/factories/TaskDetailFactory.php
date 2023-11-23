<?php

namespace Database\Factories;

use App\Models\TaskDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = TaskDetail::class;

    public function definition()
    {
        return [
            'task' => \App\Models\Task::factory(), // Assuming Task model and factory exist
            'fotos_around' => json_encode([
                'front' => $this->faker->imageUrl(),
                'front_right' => $this->faker->imageUrl(),
                'front_left' => $this->faker->imageUrl(),
                'midel_left' => $this->faker->imageUrl(),
                'midel_right' => $this->faker->imageUrl(),
                'back_left' => $this->faker->imageUrl(),
                'back_right' => $this->faker->imageUrl(),
                'back' => $this->faker->imageUrl(),
                        ]),
            'Kennzeichen' => $this->faker->bothify('??-###-####'),
            'schaden' => $this->faker->boolean,
            'Schadenart' => $this->faker->word,
            'schadenStelle' => $this->faker->word,
            'schadenFoto' => $this->faker->imageUrl(),
            'kmStand' => $this->faker->numberBetween(1000, 20000),
            'tankWert' => $this->faker->numberBetween(0, 100),
            'kmStandFoto' => $this->faker->imageUrl(),
            'tankWertFoto' => $this->faker->imageUrl(),
            'fahrzeugscheinID' => $this->faker->swiftBicNumber,
            'zulassungsDatum' => $this->faker->dateTime,
            'herstellerKurzbe' => $this->faker->word,
            'code22' => $this->faker->word,
            'fahrzeugID' => $this->faker->uuid,
            'farbe' => $this->faker->colorName,
            'kraftstoff' => $this->faker->word,
            'zustandA' => $this->faker->word,
            'zustandI' => $this->faker->word,
            'schlussel' => $this->faker->randomDigit,
            'serviceHeft' => $this->faker->boolean,
            'tankKarte' => $this->faker->boolean,
            'verbandKasten' => $this->faker->boolean,
            'zulassungSchein' => $this->faker->boolean,
            'warndreieck' => $this->faker->boolean,
            'warnweste' => $this->faker->boolean,
            'reifen' => $this->faker->word,
            'reifenzustand' => json_encode([
                'front_left' => $this->faker->randomElement(['new', 'worn', 'damaged']),
                'back_left' => $this->faker->randomElement(['new', 'worn', 'damaged']),
                'back_right' => $this->faker->randomElement(['new', 'worn', 'damaged']),
                'front_right' => $this->faker->randomElement(['new', 'worn', 'damaged']),
                // Add more as needed
            ]),
            'ersatzReifen' => $this->faker->boolean,
            'bemerkung' => json_encode(['note' => $this->faker->sentence]),
            'kundeUnterschrift' => $this->faker->name,
            'mitarbeiterUnterschrift' => $this->faker->name,

        ];
    }
}
