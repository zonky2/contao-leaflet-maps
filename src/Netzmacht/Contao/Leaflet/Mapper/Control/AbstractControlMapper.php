<?php

/**
 * @package    contao-leaflet-maps
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014-2016 netzmacht David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Contao\Leaflet\Mapper\Control;

use Netzmacht\Contao\Leaflet\Mapper\AbstractTypeMapper;

/**
 * Class AbstractControlMapper is the base mapper for the control model.
 *
 * @package Netzmacht\Contao\Leaflet\Mapper\Control
 */
class AbstractControlMapper extends AbstractTypeMapper
{
    /**
     * Class of the model being build.
     *
     * @var string
     */
    protected static $modelClass = 'Netzmacht\Contao\Leaflet\Model\ControlModel';

    /**
     * {@inheritdoc}
     */
    protected function initialize()
    {
        $this->optionsBuilder->addOption('position');
    }
}