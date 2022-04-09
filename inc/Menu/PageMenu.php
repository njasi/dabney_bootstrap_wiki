<?php

namespace dokuwiki\template\bootstrap3_dabney\Menu;

/**
 * Class PageMenu
 *
 * Actions manipulating the current page. Shown as a floating menu in the dokuwiki template
 */
class PageMenu extends \dokuwiki\Menu\AbstractMenu
{
    protected $view = 'page';

    protected $types = array(
        'Edit',
        'Discussion',
        'Revert',
        'Revisions',
        'Backlink',
        'Subscribe',
        'Top',
    );
}
