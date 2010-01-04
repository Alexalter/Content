<?php
/**
 * Content 2 column layout plugin
 *
 * @copyright (C) 2007-2010, Content Development Team
 * @link http://code.zikula.org/content
 * @version $Id$
 * @license See license.txt
 */

class content_layouttypesapi_column2headerPlugin extends contentLayoutBase
{
    var $contentAreaTitles = array();

    function __construct()
    {
        $dom = ZLanguage::getModuleDomain('content');
        $contentAreaTitles = array(__('Header', $dom), __('Left column', $dom), __('Right column', $dom), __('Footer', $dom));
    }

    function content_layouttypesapi_column2headerPlugin()
    {
        $this->__construct();
    }
    function getName()
    {
        return 'column2header';
    }
    function getTitle()
    {
        return __('2 columns', $dom);
    }
    function getDescription()
    {
        return __('Two columns + header + footer', $dom);
    }
    function getNumberOfContentAreas()
    {
        return 4;
    }
    function getContentAreaTitle($areaIndex)
    {
        return $this->contentAreaTitles[$areaIndex];
    }
}

function content_layouttypesapi_column2header($args)
{
    return new content_layouttypesapi_column2headerPlugin();
}
