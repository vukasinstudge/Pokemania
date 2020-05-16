<?php

use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tournaments')->insert(array(
            array(
                'name' => 'Ultra Champs',
                'prize' => 1000,
                'minLevel' => 1,
                'maxLevel' => 10,
                'entryFee' => 50,
                'endDate' => '2020-01-01'
            ),
            array(
                'name' => 'Belgrade Top 10',
                'prize' => 10000,
                'minLevel' => 71,
                'maxLevel' => 100,
                'entryFee' => 500,
                'endDate' => '2020-7-10'
            ),
            array(
                'name' => 'AR Top 10',
                'prize' => 34300,
                'minLevel' => 34,
                'maxLevel' => 43,
                'entryFee' => 300,
                'endDate' => '2020-01-02'
            ),
            array(
                'name' => 'Tournament4',
                'prize' => 1000,
                'minLevel' => 1,
                'maxLevel' => 10,
                'entryFee' => 50,
                'endDate' => '2020-10-10'
            ),
            array(
                'name' => 'Tournament5',
                'prize' => 10000,
                'minLevel' => 71,
                'maxLevel' => 100,
                'entryFee' => 500,
                'endDate' => '2020-7-10'
            ),
            array(
                'name' => 'Tournament6',
                'prize' => 34300,
                'minLevel' => 34,
                'maxLevel' => 43,
                'entryFee' => 300,
                'endDate' => '2020-7-29'
            ),
            array(
                'name' => 'Tournament7',
                'prize' => 1000,
                'minLevel' => 1,
                'maxLevel' => 10,
                'entryFee' => 50,
                'endDate' => '2020-10-10'
            ),
            array(
                'name' => 'Tournament8',
                'prize' => 10000,
                'minLevel' => 71,
                'maxLevel' => 100,
                'entryFee' => 500,
                'endDate' => '2020-7-10'
            ),
            array(
                'name' => 'Tournament9',
                'prize' => 34300,
                'minLevel' => 34,
                'maxLevel' => 43,
                'entryFee' => 300,
                'endDate' => '2020-7-29'
            ),
        ));

        DB::table('participates')->insert(array(
            array(
                'user_id' => 2,
                'tournament_id' => 1,
                'cntWin' => 3,
            ),
            array(
                'user_id' => 2,
                'tournament_id' => 2,
                'cntWin' => 3,
            ),
            array(
                'user_id' => 2,
                'tournament_id' => 3,
                'cntWin' => 2,
            ),
            array(
                'user_id' => 3,
                'tournament_id' => 1,
                'cntWin' => 7,
            ),
            array(
                'user_id' => 1,
                'tournament_id' => 1,
                'cntWin' => 5,
            ),
            array(
                'user_id' => 4,
                'tournament_id' => 1,
                'cntWin' => 7,
            ),
            array(
                'user_id' => 5,
                'tournament_id' => 1,
                'cntWin' => 5,
            ),
            array(
                'user_id' => 6,
                'tournament_id' => 1,
                'cntWin' => 7,
            ),
            array(
                'user_id' => 7,
                'tournament_id' => 1,
                'cntWin' => 5,
            ),
            array(
                'user_id' => 8,
                'tournament_id' => 1,
                'cntWin' => 7,
            ),
            array(
                'user_id' => 9,
                'tournament_id' => 1,
                'cntWin' => 5,
            ),
            array(
                'user_id' => 10,
                'tournament_id' => 1,
                'cntWin' => 7,
            ),
            array(
                'user_id' => 11,
                'tournament_id' => 1,
                'cntWin' => 5,
            ),
            array(
                'user_id' => 12,
                'tournament_id' => 1,
                'cntWin' => 7,
            ),
        ));

        DB::table('registered')->insert(array(
            array(
                'user_id' => 3,
                'tournament_id' => 2,
            ),
            array(
                'user_id' => 3,
                'tournament_id' => 3,
            ),
            array(
                'user_id' => 1,
                'tournament_id' => 3,
            ),
            array(
                'user_id' => 4,
                'tournament_id' => 3,
            ),
            array(
                'user_id' => 5,
                'tournament_id' => 3,
            )            
        ));
    }
}
