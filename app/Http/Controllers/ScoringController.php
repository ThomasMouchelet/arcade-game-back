<?php

namespace App\Http\Controllers;

use App\Models\Parties;
use Illuminate\Http\Request;

class ScoringController extends Controller
{
    public function getParties()
    {
        $parties = Parties::orderBy('username', 'asc')
            ->paginate(10);
        return response()->json($parties);
    }

    public function sortByTime()
    {
        $parties = Parties::orderBy('time', 'desc')
            ->paginate(10);
        return response()->json($parties);
    }

    public function searchParty($username)
    {
        if(empty($username)) {
            return response()->json('Aucun utilisateurs');
        }
        $users = Parties::where('username', 'LIKE', "%{$username}%")
            ->select('id', 'username')
            ->paginate(5);
        return response()->json($users, 200);
    }
}
