<?php

/**
 * Leaflet maps for Contao CMS.
 *
 * @package    contao-leaflet-maps
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014-2017 netzmacht David Molineus. All rights reserved.
 * @license    LGPL-3.0 https://github.com/netzmacht/contao-leaflet-maps/blob/master/LICENSE
 * @filesource
 */

$GLOBALS['TL_LANG']['tl_leaflet_control']['name_legend']   = 'Title and type';
$GLOBALS['TL_LANG']['tl_leaflet_control']['config_legend'] = 'Configuration';
$GLOBALS['TL_LANG']['tl_leaflet_control']['active_legend'] = 'Activation';

$GLOBALS['TL_LANG']['tl_leaflet_control']['new'][0]      = 'Create control';
$GLOBALS['TL_LANG']['tl_leaflet_control']['new'][1]      = 'Create new control';
$GLOBALS['TL_LANG']['tl_leaflet_control']['edit'][0]     = 'Edit control';
$GLOBALS['TL_LANG']['tl_leaflet_control']['edit'][1]     = 'Edit control ID %s';
$GLOBALS['TL_LANG']['tl_leaflet_control']['copy'][0]     = 'Copy control';
$GLOBALS['TL_LANG']['tl_leaflet_control']['copy'][1]     = 'Copy control ID %s';
$GLOBALS['TL_LANG']['tl_leaflet_control']['delete'][0]   = 'Delete control';
$GLOBALS['TL_LANG']['tl_leaflet_control']['delete'][1]   = 'Delete control ID %s';
$GLOBALS['TL_LANG']['tl_leaflet_control']['toggle'][0]   = 'Toggle activation';
$GLOBALS['TL_LANG']['tl_leaflet_control']['toggle'][1]   = 'Toggle activation of control ID %s';
$GLOBALS['TL_LANG']['tl_leaflet_control']['show'][0]     = 'Show details';
$GLOBALS['TL_LANG']['tl_leaflet_control']['show'][1]     = 'Show control ID %s details';
$GLOBALS['TL_LANG']['tl_leaflet_control']['pastenew'][0] = 'Copy control';
$GLOBALS['TL_LANG']['tl_leaflet_control']['pastenew'][1] = 'Create new copy of control ID %s';

$GLOBALS['TL_LANG']['tl_leaflet_control']['title'][0]              = 'Title';
$GLOBALS['TL_LANG']['tl_leaflet_control']['title'][1]              = 'Title of the control.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['alias'][0]              = 'Alias';
$GLOBALS['TL_LANG']['tl_leaflet_control']['alias'][1]              = 'Alias of the control.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['type'][0]               = 'Type';
$GLOBALS['TL_LANG']['tl_leaflet_control']['type'][1]               = 'Choose the control type.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['position'][0]           = 'Position';
$GLOBALS['TL_LANG']['tl_leaflet_control']['position'][1]           = 'Position of the control.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['zoomInText'][0]         = 'Zoom in text';
$GLOBALS['TL_LANG']['tl_leaflet_control']['zoomInText'][1]         = 'The text set on the zoom in button. By default its the "+" sign. Leave empty for the default value';
$GLOBALS['TL_LANG']['tl_leaflet_control']['zoomOutText'][0]        = 'Zoom out text';
$GLOBALS['TL_LANG']['tl_leaflet_control']['zoomOutText'][1]        = 'The text set on the zoom out button. By default its the "-" sign. Leave empty for the default value';
$GLOBALS['TL_LANG']['tl_leaflet_control']['zoomInTitle'][0]        = 'Zoom in title';
$GLOBALS['TL_LANG']['tl_leaflet_control']['zoomInTitle'][1]        = 'The title set on the zoom in button.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['zoomOutTitle'][0]       = 'Zoom out title';
$GLOBALS['TL_LANG']['tl_leaflet_control']['zoomOutTitle'][1]       = 'The title set on the zoom out button.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['active'][0]             = 'Activate control';
$GLOBALS['TL_LANG']['tl_leaflet_control']['active'][1]             = 'Activate control on the map.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['attributions'][0]       = 'Attributions';
$GLOBALS['TL_LANG']['tl_leaflet_control']['attributions'][1]       = 'Add attribution texts. HTML is allowed here.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['prefix'][0]             = 'Attribution prefix';
$GLOBALS['TL_LANG']['tl_leaflet_control']['prefix'][1]             = 'Customize the attribution prefix. By default it\'s the Leaflet link. HTML is allowed here.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['maxWidth'][0]           = 'Max width';
$GLOBALS['TL_LANG']['tl_leaflet_control']['maxWidth'][1]           = 'Maximum width of the control in pixels. The width is set dynamically to show round values (e.g. 100, 200, 500).';
$GLOBALS['TL_LANG']['tl_leaflet_control']['metric'][0]             = 'Metric scale';
$GLOBALS['TL_LANG']['tl_leaflet_control']['metric'][1]             = 'Whether to show the metric scale line (m/km).';
$GLOBALS['TL_LANG']['tl_leaflet_control']['imperial'][0]           = 'Imperial scale';
$GLOBALS['TL_LANG']['tl_leaflet_control']['imperial'][1]           = 'Whether to show the imperial scale line (mi/ft).';
$GLOBALS['TL_LANG']['tl_leaflet_control']['updateWhenIdle'][0]     = 'Update when idle';
$GLOBALS['TL_LANG']['tl_leaflet_control']['updateWhenIdle'][1]     = 'If true, the control is updated on moveend, otherwise it\'s always up-to-date (updated on move).';
$GLOBALS['TL_LANG']['tl_leaflet_control']['layers'][0]             = 'Layers';
$GLOBALS['TL_LANG']['tl_leaflet_control']['layers'][1]             = 'Add layers to the control.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['layer'][0]              = 'Layer';
$GLOBALS['TL_LANG']['tl_leaflet_control']['layer'][1]              = 'Choose a layer. Each layer can only be added once.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['layerMode'][0]          = 'Mode';
$GLOBALS['TL_LANG']['tl_leaflet_control']['layerMode'][1]          = 'Add layer as baselayer or overlay.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['collapsed'][0]          = 'Collapsed';
$GLOBALS['TL_LANG']['tl_leaflet_control']['collapsed'][1]          = 'If true, the control will be collapsed into an icon and expanded on mouse hover or touch.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['autoZIndex'][0]         = 'Auto zIndex';
$GLOBALS['TL_LANG']['tl_leaflet_control']['autoZIndex'][1]         = 'If true, the control will assign zIndexes in increasing order to all of its layers so that the order is preserved when switching them on/off.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['spin'][0]               = 'Spin.js configuration';
$GLOBALS['TL_LANG']['tl_leaflet_control']['spin'][1]               = 'Use valid json to configure the spin.js plugin. For more details see <a href="http://fgnass.github.io/spin.js/" target="_blank">http://fgnass.github.io/spin.js/</a>.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['spinjs'][0]             = 'Use spin.js';
$GLOBALS['TL_LANG']['tl_leaflet_control']['spinjs'][1]             = 'Instead of an background image the spin.js plugin is used.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['separate'][0]           = 'Separate';
$GLOBALS['TL_LANG']['tl_leaflet_control']['separate'][1]           = 'Display control separate from zoom control.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['zoomControl'][0]        = 'Zoom control';
$GLOBALS['TL_LANG']['tl_leaflet_control']['zoomControl'][1]        = 'Assign loading control to a specific zoom control. If it\'s not used on the map/activated the default one is used.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['layerMode'][0]          = 'Mode';
$GLOBALS['TL_LANG']['tl_leaflet_control']['layerMode'][1]          = 'Add layer as baselayer or overlay.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['layerMode'][0]          = 'Mode';
$GLOBALS['TL_LANG']['tl_leaflet_control']['layerMode'][1]          = 'Add layer as baselayer or overlay.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['buttonTitle'][0]        = 'Button title';
$GLOBALS['TL_LANG']['tl_leaflet_control']['buttonTitle'][1]        = 'Title attribute of the control button.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['simulateFullScreen'][0] = 'Always simulate fullscreen';
$GLOBALS['TL_LANG']['tl_leaflet_control']['simulateFullScreen'][1] = 'Simulate fullscreen no matter if the browser supports the Fullscreen API.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['disableDefault'][0]     = 'Replace default control';
$GLOBALS['TL_LANG']['tl_leaflet_control']['disableDefault'][1]     = 'If enabled the default control will be disabled.';

$GLOBALS['TL_LANG']['tl_leaflet_control']['bottomleft'][0]  = 'Bottom left';
$GLOBALS['TL_LANG']['tl_leaflet_control']['bottomleft'][1]  = 'Bottom left of the map.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['topleft'][0]     = 'Top left';
$GLOBALS['TL_LANG']['tl_leaflet_control']['topleft'][1]     = 'Top left of the map.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['bottomright'][0] = 'Bottom right';
$GLOBALS['TL_LANG']['tl_leaflet_control']['bottomright'][1] = 'Bottom right of the map.';
$GLOBALS['TL_LANG']['tl_leaflet_control']['topright'][0]    = 'Top right';
$GLOBALS['TL_LANG']['tl_leaflet_control']['topright'][1]    = 'Top right of the map.';

$GLOBALS['TL_LANG']['tl_leaflet_control']['base'][0]    = 'Base layer';
$GLOBALS['TL_LANG']['tl_leaflet_control']['base'][1]    = 'Base layers will be switched with radio buttons. Note that all base layers should be passed in the base layers object, but only one should be added to the map during map instantiation';
$GLOBALS['TL_LANG']['tl_leaflet_control']['overlay'][0] = 'Overlay';
$GLOBALS['TL_LANG']['tl_leaflet_control']['overlay'][1] = 'Overlays will be switched with checkboxes.';
