<?php

namespace App\Providers;

use App\Models\Option;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    public function getSchedule(): array
    {
        $schedule = [];

        if(Schema::hasTable('options')) {
            $options = Option::where(['options_category' => 'schedule'])->get()->toArray();

            $days = '';
            $n = 0;
            $i = 0;

            foreach ($options as $key => $option) {
                if ($key === 0) {
                    $schedule[$i] = [$option['options_name'] => $option['options_value']];
                    $i++;
                } else if ($options[$key - 1]['options_value'] !== $option['options_value']) {
                    if ((count($options) - 1) === $key) {
                        $schedule[$i] = [$option['options_name'] => $option['options_value']];
                    } else if ($options[$key + 1]['options_value'] === $option['options_value']) {
                        $schedule[$i] = [$option['options_name'] => $option['options_value']];
                        $days = 'Du ' . $option['options_name'];
                    } else {
                        $schedule[$i] = [$option['options_name'] => $option['options_value']];
                    }
                    $n = $i;
                    $i++;
                } else if ($options[$key - 1]['options_value'] === $option['options_value']) {
                    if ((count($options) - 1) === $key || $options[$key + 1]['options_value'] !== $option['options_value']) {
                        $schedule[$n] = [$days .= ' au ' . $option['options_name'] => $option['options_value']];
                    } else if ($key || $options[$key + 1]['options_value'] === $option['options_value']) {
                        $schedule[$n] = [$days => $option['options_value']];
                    }
                }
            }
        }

        return $schedule;
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        if(env('REDIRECT_HTTPS')) {
            $this->app['request']->server->set('HTTPS', true);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(UrlGenerator $url): void
    {
        if(env('REDIRECT_HTTPS')) {
            $url->formatScheme('https');
        }
        if(Schema::hasTable('options')) {
            $options = Option::get()->toArray();

            View::share('schedule', $this->getSchedule());
            View::share('options', $options);
        }
    }
}
