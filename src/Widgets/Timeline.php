<?php

namespace Dcat\Admin\Widgets;

class Timeline extends Widget
{
    /**
     * @var string
     */
    protected $view = 'admin::widgets.timeline';

    /**
     * @var array
     */
    protected $items = [];

    /**
     * Collapse constructor.
     */
    public function __construct()
    {
        $this->id('timeline-box-' . uniqid());
        $this->class('box-group');
        $this->style('margin-bottom: 20px');
    }

    /**
     * Add item.
     *
     * @param string $title
     * @param string $content
     *
     * @return $this
     */
    public function add($time_label, $title, $time, $content = '', $icon = 'fa fa-bullseye bg-green')
    {
        $this->items[] = [
            'time_label' => $time_label,
            'title' => $title,
            'content' => $content,
            'time' => $time,
            'icon' => $icon,
        ];
        return $this;
    }

    // 图标
    public function icons($strings)
    {
        $this->items[count($this->items) - 1]['icon'] = $strings;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function defaultVariables()
    {
        return [
            'id' => $this->id,
            'items' => $this->items,
            'attributes' => $this->formatAttributes(),
        ];
    }

}
