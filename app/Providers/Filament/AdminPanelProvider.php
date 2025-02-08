<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Settings\Font;
use App\Filament\Pages\Settings\Header;
use App\Filament\Pages\Settings\Seo;
use App\Filament\Plugins\FilamentArtisanPlugin;
use App\Filament\Plugins\FilamentBrowserPlugin;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets as GoogleAnalyticsWidgets;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use GeoSot\FilamentEnvEditor\FilamentEnvEditorPlugin;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Outerweb\FilamentSettings\Filament\Plugins\FilamentSettingsPlugin;
use Z3d0X\FilamentFabricator\FilamentFabricatorPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login( )
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
//            ->topNavigation()
            ->profile()
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
//                Widgets\FilamentInfoWidget::class,
                GoogleAnalyticsWidgets\PageViewsWidget::class,
                GoogleAnalyticsWidgets\VisitorsWidget::class,
                GoogleAnalyticsWidgets\ActiveUsersOneDayWidget::class,
                GoogleAnalyticsWidgets\ActiveUsersSevenDayWidget::class,
                GoogleAnalyticsWidgets\ActiveUsersTwentyEightDayWidget::class,
                GoogleAnalyticsWidgets\SessionsWidget::class,
                GoogleAnalyticsWidgets\SessionsDurationWidget::class,
                GoogleAnalyticsWidgets\SessionsByCountryWidget::class,
                GoogleAnalyticsWidgets\SessionsByDeviceWidget::class,
                GoogleAnalyticsWidgets\MostVisitedPagesWidget::class,
                GoogleAnalyticsWidgets\TopReferrersListWidget::class,
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
            ->colors([
                'primary'=> '#262262'
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->brandLogo(asset('/storage/assets/logo.png'))
            ->brandLogoHeight('3rem')
//            ->navigation(false)
        ->plugins([
                \BezhanSalleh\FilamentGoogleAnalytics\FilamentGoogleAnalyticsPlugin::make()

,
             FilamentArtisanPlugin::make(),
                FilamentEnvEditorPlugin::make()
                ->navigationGroup('المطور')
,
                \FilipFonal\FilamentLogManager\FilamentLogManager::make(),


                FilamentFabricatorPlugin::make(),
                FilamentSettingsPlugin::make()
                ->pages([
                    Header::class,
                    Seo::class,
                    Font::class
                ]),
                FilamentBrowserPlugin::make()
                    ->hiddenFolders([
//                        base_path('app')
                    ])
                    ->hiddenFiles([
//                        base_path('.env')
                    ])
                    ->hiddenExtantions([
//                        "php"
                    ])
                    ->allowCreateFolder()
                    ->allowEditFile()
                    ->allowCreateNewFile()
                    ->allowCreateFolder()
                    ->allowRenameFile()
                    ->allowDeleteFile()
                    ->allowMarkdown()
                    ->allowCode()
                    ->allowPreview()
                    ->basePath(base_path())

            ]);
    }
}
