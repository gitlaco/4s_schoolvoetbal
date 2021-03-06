<?php

namespace Database\Seeders;


use App\Models\Match;
use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wedstrijd = new Match();
        $wedstrijd->title = "4S Schoolvoetbal vs FC Breda";
        $wedstrijd->team1_id = 1;
        $wedstrijd->team2_id = 2;
        $wedstrijd->score_team1 = 1;
        $wedstrijd->score_team2 = 3;
        $wedstrijd->field_id = 1;
        $wedstrijd->datum = '2021-12-20 18:00:00';
        $wedstrijd->scheidsrechter_id = 1;
        $wedstrijd->status = "FC Tilburg heeft gewonen";
        $wedstrijd->save();

        $wedstrijd = new Match();
        $wedstrijd->title = "FC Tilburg vs FC Breda";
        $wedstrijd->team1_id = 1;
        $wedstrijd->team2_id = 2;
        $wedstrijd->score_team1 = 2;
        $wedstrijd->score_team2 = 4;
        $wedstrijd->field_id = 2;
        $wedstrijd->datum = '2022-1-19 18:00:00';
        $wedstrijd->scheidsrechter_id = 2;
        $wedstrijd->status = "FC Tilburg heeft gewonen";
        $wedstrijd->save();

        $wedstrijd = new Match();
        $wedstrijd->title = "";
        $wedstrijd->team1_id = 3;
        $wedstrijd->team2_id = 2;
        $wedstrijd->field_id = 1;
        $wedstrijd->datum = '2022-2-13 19:00:00';
        $wedstrijd->scheidsrechter_id = 2;
        $wedstrijd->status = "";
        $wedstrijd->save();

        $wedstrijd = new Match();
        $wedstrijd->title = "";
        $wedstrijd->team1_id = 2;
        $wedstrijd->team2_id = 3;
        $wedstrijd->field_id = 3;
        $wedstrijd->datum = '2022-2-20 20:00:00';
        $wedstrijd->scheidsrechter_id = 1;
        $wedstrijd->status = "";
        $wedstrijd->save();
    }
}
