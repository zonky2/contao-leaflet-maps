<?php

/**
 * @package    dev
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Contao\Leaflet\Mapper\Control;

/**
 * Class ZoomControlMapper maps the zoom database definition to the zoom control.
 *
 * @package Netzmacht\Contao\Leaflet\Mapper\Control
 */
class ZoomControlMapper extends AbstractControlMapper
{
    /**
     * Class of the definition being created.
     *
     * @var string
     */
    protected static $definitionClass = 'Netzmacht\LeafletPHP\Definition\Control\Zoom';

    /**
     * Layer type.
     *
     * @var string
     */
    protected static $type = 'zoom';

    /**
     * {@inheritdoc}
     */
    protected function initialize()
    {
        parent::initialize();

        $this
            ->addConditionalOption('zoomInText')
            ->addConditionalOption('zoomOutText')
            ->addConditionalOption('zoomInTitle')
            ->addConditionalOption('zoomOutTitle');
    }
}