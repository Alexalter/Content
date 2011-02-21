<?php
/**
 * Content prev- & next-page plugin
 *
 * @copyright (C) 2010 Sven Strickroth
 * @link http://code.zikula.org/content
 * @version $Id$
 * @license See license.txt
 */

class Content_ContentType_PageNavigation extends Content_ContentType_Base
{
    function getModule()
    {
        return 'Content';
    }
    function getName()
    {
        return 'PageNavigation';
    }
    function getTitle()
    {
        return $this->__('Page navigation');
    }
    function getDescription()
    {
        return $this->__("Allows to navigate within pages on the same level.");
    }
    function isTranslatable()
    {
        return false;
    }
    function display()
    {
        $prevpage = null;
        $nextpage = null;

        $page = ModUtil::apiFunc('Content', 'Page', 'getPage', array('id' => $this->pageId));

        $tables = DBUtil::getTables();
        $pageTable = $tables['content_page'];
        $pageColumn = $tables['content_page_column'];

        $options = array('makeTree' => true);
        $options['orderBy'] = 'position';
        $options['orderDir'] = 'desc';
        $options['pageSize'] = 1;
        $options['filter']['superParentId'] = $page['parentPageId'];

        if ($page[position] > 0) {
            $options['filter']['where'] = "$pageColumn[level] = $page[level] and $pageColumn[position] < $page[position]";
    
            $pages = ModUtil::apiFunc('Content', 'Page', 'getPages', $options);
            if (count($pages) > 0) {
                $prevpage = $pages[0];
            }
        }

        $options['orderDir'] = 'asc';
        $options['filter']['where'] = "$pageColumn[level] = $page[level] and $pageColumn[position] > $page[position]";
        $pages = ModUtil::apiFunc('Content', 'Page', 'getPages', $options);
        if (count($pages) > 0) {
            $nextpage = $pages[0];
        }

        $view = Zikula_View::getInstance('Content', false);
        $view->assign('loggedin', UserUtil::isLoggedIn());
        $view->assign('prevpage', $prevpage);
        $view->assign('nextpage', $nextpage);
        return $view->fetch('contenttype/pagenavigation_view.html');
    }
    function displayEditing()
    {
        return "<h3>" . $this->__('Page navigation')."</h3>";
    }
    function getSearchableText()
    {
        return;
    }
}