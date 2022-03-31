<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        /**
         * Strategy to validate user status/type
         * 1 - don't have any relationship with people
         * 2 - don't have any relationship with teams
         * 3 - have relationship with only one team
         * 4 - have relationship with more than one team
         */

        $people = new PeopleController();
        $teams = new TeamsController();

        $peopleLinked = $people->userPerson()->count();
        $teamsLinked =($peopleLinked == 1)?$teams->userTeams()->count():0;

        return Inertia::render(
            'Home',
            [
                'personLinked' => $peopleLinked,
                'teamsLinked' => $teamsLinked,
                'people' => $people->index(),
                'teams' => $teams->index(),
            ]
        );
    }
}
