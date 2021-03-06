<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Mail;
use App\User;
use App\Tournament;
use App\Mail\TournamentDeleted;

/**
 * DeleteTournaments – klasa za komandu automatskog brisanja turnira
 *
 * @author Natalija Mitić 0085/17
 *
 * @version 1.0
 */
class DeleteTournaments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tournament:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete past tournaments';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Pronalaženje isteklih turnira, poziv fje slanja mejlova,
     * brisanje turnira i pratećih informacija.
     *
     * @return void
     */
    public function handle()
    {
        $now = Carbon::now()->toDateString();

        $tournaments = Tournament::where("endDate", "<",  "$now")->get();
        foreach ($tournaments as $tournament) {
            (new AdminController)->sendMail($tournament);
            DB::table('registered')->where('tournament_id', $tournament->id)->delete();
            DB::table('participates')->where('tournament_id', $tournament->id)->delete();
        }

        DB::table('tournaments')->where("endDate", "<",  "$now")->delete();
    }
}
