<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $userId = Auth::id();
        $tasks = Task::where('user_id', $userId)
                    ->orderBy('due_date', 'asc')
                    ->get();

        return view('dashboard', [
            'tasks' => $tasks,
        ]);
    }
}
