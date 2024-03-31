<?php

namespace App\Providers\Filament;


use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;
use App\Filament\Widgets\CalendarWidget;
use App\Filament\Widgets\CalendarWidgetSuper;


class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->plugin(
                FilamentFullCalendarPlugin::make()
                ->config(
                    [
                        'timeZone' => config('app.timezone'),
                    
                        'locale' => config('app.locale'),
                    
                        'headerToolbar' => [
                            'left'   => 'prev,next today',
                            'center' => 'title',
                            'right'  => 'dayGridMonth,timeGridWeek'
                        ],
                    
                        'height' => 550,

                        'navLinks' => false,
                    
                        'editable' => false,

                        'eventDurationEditable' => false,
                    
                        'selectable' => false,
                    
                        'dayMaxEvents' => true,

                        'scrollTime' => '08:00:00'
                    ]
                )
            )
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                CalendarWidget::class,
                CalendarWidgetSuper::class
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
