<?php

namespace Encore\CustomActionsButton;

use Illuminate\Support\ServiceProvider;
use Encore\Admin\Grid;

class CustomActionsButtonServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(CustomActionsButton $extension)
    {
        if (!CustomActionsButton::boot()) {
            return;
        }

        $this->app->booted(function () {
            Grid::init(function (Grid $grid) {
                $grid->actions(CustomActions::class);
            });
        });
    }
}
