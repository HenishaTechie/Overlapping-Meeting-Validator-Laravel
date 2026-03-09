<?php

namespace App\Services;

class MeetingService
{
    public function canScheduleMeeting($existingMeetings, $newMeeting)
    {
        $newStart = strtotime($newMeeting['start']);
        $newEnd = strtotime($newMeeting['end']);

        if ($newStart >= $newEnd) {
            return [
                'status' => false,
                'message' => 'Invalid meeting time'
            ];
        }

        foreach ($existingMeetings as $meeting) {

            $existingStart = strtotime($meeting['start']);
            $existingEnd = strtotime($meeting['end']);

            if ($newStart < $existingEnd && $newEnd > $existingStart) {
                return [
                    'status' => false,
                    'message' => 'Conflict with existing meeting'
                ];
            }
        }

        return [
            'status' => true,
            'message' => 'Meeting scheduled successfully'
        ];
    }
}
