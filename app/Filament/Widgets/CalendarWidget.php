<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use App\Models\Service;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class CalendarWidget extends FullCalendarWidget
{
    /**
     * Return events that should be rendered statically on calendar.
     */

    /**
     * FullCalendar will call this function whenever it needs new event data.
     * This is triggered when the user clicks prev/next or switches views on the calendar.
     */
    public function fetchEvents(array $fetchInfo): array
    {
        return Appointment::where('start_time', '>=', $fetchInfo['start'])
            ->where('end_time', '<=', $fetchInfo['end'])
            ->where('status','ACTIVE')
            ->get()
            ->map(function (Appointment $task) {
                $service = Service::where('id',$task->service_id)->first();
                return [
                    'id'    => $task->id,
                    'title' => $task->name . ' - ' . $service->name,
                    'start' => $task->start_time,
                    'end'   => $task->end_time,
                ];
            })
            ->toArray();

    }
    public static function canView(): bool
    {
        return true;
    }
}