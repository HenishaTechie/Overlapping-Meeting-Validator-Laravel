<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\MeetingService;
use Illuminate\Http\Request;

class MeetingController extends Controller
{

    private $existingMeetings = [
        ["start" => "10:00", "end" => "10:30"],
        ["start" => "11:00", "end" => "11:30"],
        ["start" => "12:15", "end" => "13:00"]
    ];

       public function getMeetings()
    {
        return response()->json([
            "status" => true,
            "meetings" => $this->existingMeetings
        ]);
    }

      public function checkMeeting(Request $request, MeetingService $service)
    {
      
        $newMeeting = [
            "start" => $request->start,
            "end" => $request->end
        ];

        $result = $service->canScheduleMeeting($this->existingMeetings, $newMeeting);

        return response()->json($result);
    }
}
