<?php

namespace Encore\CustomActionsButton;

use Encore\Admin\Grid;
use Illuminate\Support\ServiceProvider;

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
                $grid->setActionClass(CustomActions::class);
            });
        });
    }
}
