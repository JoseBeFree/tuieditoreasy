<?php
/**
 * Created by PhpStorm.
 * User: DrekTop
 * Date: 23/01/2018
 * Time: 09:57 AM
 */

namespace Josebefree\Tuieditor;
use Illuminate\Support\ServiceProvider;

class TuieditorProvider extends ServiceProvider
{

    protected $defer = true;

    public function register() {
        $this->app->singleton(TuieditorBuilder::class, function ($app) {
            return $app->build(TuieditorBuilder::class);
        });
    }

    public function boot() {
        $this->publishes([
            __DIR__ . '/dist' => public_path(TuieditorBuilder::$path)
        ], 'public');
    }

    public function provider() {
        return [TuieditorBuilder::class];
    }



}