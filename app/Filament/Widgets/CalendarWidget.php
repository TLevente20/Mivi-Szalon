<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use App\Models\Service;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;


class CalendarWidget extends FullCalendarWidget
{
    public Model | string | null $model = Appointment::class;

    public function fetchEvents(array $fetchInfo): array
    {
        return Appointment::where('start_time', '>=', $fetchInfo['start'])
            ->where('end_time', '<=', $fetchInfo['end'])
            ->where('status','ACTIVE')->where('user_id',auth()->id())
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