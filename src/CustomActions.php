<?php

namespace Encore\CustomActionsButton;

use Encore\Admin\Grid\Displayers\Actions;

class CustomActions extends Actions
{
    /**
     * Options default.
     *
     * @return array
     */
    private $optionsDefault = [
        'view' => [
            'label' => '',
            'icon'  => 'fa fa-eye',
            'class' => 'btn btn-sm btn-info',
        ],
        'edit' => [
            'label' => '',
            'icon'  => 'fa fa-edit',
            'class' => 'btn btn-sm btn-warning',
        ],
        'delete' => [
            'label' => '',
            'icon'  => 'fa fa-trash',
            'class' => 'btn btn-sm btn-danger',
        ],
    ];

    /**
     * GET Config Options.
     *
     * @return array
     */
    private function getOptions($name)
    {
        return array_merge($this->optionsDefault[$name], (array) config("admin.extensions.custom-actions-button.{$name}"));
    }

    /**
     * Render delete action.
     *
     * @return string
     */
    protected function renderDelete()
    {
        $this->setupDeleteScript();
        $options = $this->getOptions('delete');

        return <<<EOT
<a href="javascript:void(0);" data-id="{$this->getKey()}" class="{$this->grid->getGridRowName()}-delete {$options['class']}" style="margin-right:3px">
    <i class="{$options['icon']}"></i> {$options['label']}
</a>
EOT;
    }

    /**
     * Render edit action.
     *
     * @return string
     */
    protected function renderEdit()
    {
        $options = $this->getOptions('edit');

        return <<<EOT
 <a href="{$this->getResource()}/{$this->getRouteKey()}/edit" class="{$this->grid->getGridRowName()}-edit {$options['class']}" style="margin-right:3px">
     <i class="{$options['icon']}"></i> {$options['label']}
 </a>
EOT;
    }

    /**
     * Render view action.
     *
     * @return string
     */
    protected function renderView()
    {
        $options = $this->getOptions('view');

        return <<<EOT
 <a href="{$this->getResource()}/{$this->getRouteKey()}" class="{$this->grid->getGridRowName()}-view {$options['class']}">
     <i class="{$options['icon']}"></i> {$options['label']}
 </a>
EOT;
    }
}
