<?php
/**
* Content YouTube plugin
*
* @copyright (C) 2007-2009, Content Development Team
* @link http://code.zikula.org/content
* @version $Id$
* @license See license.txt
*/


class content_contenttypesapi_VimeoPlugin extends contentTypeBase
{
    var $url;
    var $text;
    var $clipId;
    var $displayMode;

    function getModule() { return 'content'; }
    function getName() { return 'vimeo'; }
    function getTitle()
    {
        $dom = ZLanguage::getModuleDomain('content');
        return __('Vimeo video clip', $dom);
    }
    function getDescription()
    {
        $dom = ZLanguage::getModuleDomain('content');
        return __('Display Vimeo video clip.', $dom);
    }    
    function isTranslatable() { return true; }


    function loadData($data)
    {
        $this->url = $data['url'];
        $this->text = $data['text'];
        $this->clipId = $data['clipId'];
        $this->displayMode = isset($data['displayMode']) ? $data['displayMode'] : 'inline';
    }


    function display()
    {
        $render = pnRender::getInstance('content', false);
        $render->assign('url', $this->url);
        $render->assign('text', $this->text);
        $render->assign('clipId', $this->clipId);
        $render->assign('displayMode', $this->displayMode);

        return $render->fetch('contenttype/vimeo_view.html');
    }


    function displayEditing()
    {
        $output = '<div style="background-color:grey; height:225px; width:400px; margin:0 auto; padding:10px;">ClipId : ' . $this->clipId . '</div>';
        $output .= '<p style="width:400px; margin:0 auto;">' . DataUtil::formatForDisplay($this->text) . '</p>';
        return $output;
    }


    function getDefaultData()
    {
        return array('url' => '',
        'text' => '',
        'clipId' => '',
        'displayMode' => 'inline');
    }


    function isValid(&$data, &$message)
    {
        $dom = ZLanguage::getModuleDomain('content');
        $r = '/vimeo.com\/([-a-zA-Z0-9_]+)/';
        if (preg_match($r, $data['url'], $matches))
        {
            $this->clipId = $data['clipId'] = $matches[1];
            return true;
        }
       
        $message = __('Error! Unrecognized Vimeo URL', $dom);
        return false;
    }
}


function content_contenttypesapi_Vimeo($args)
{
    return new content_contenttypesapi_VimeoPlugin($args['data']);
}
