<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_media
 *
 * @copyright   (C) 2017 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

$translationStrings = [
    'COM_MEDIA_ACTIONS_TOOLBAR_LABEL',
    'COM_MEDIA_ACTION_DELETE',
    'COM_MEDIA_ACTION_DOWNLOAD',
    'COM_MEDIA_ACTION_EDIT',
    'COM_MEDIA_ACTION_PREVIEW',
    'COM_MEDIA_ACTION_RENAME',
    'COM_MEDIA_ACTION_SHARE',
    'COM_MEDIA_BREADCRUMB_LABEL',
    'COM_MEDIA_BROWSER_TABLE_CAPTION',
    'COM_MEDIA_CHANGE_ORDERING',
    'COM_MEDIA_CONFIRM_DELETE_MODAL',
    'COM_MEDIA_CONFIRM_DELETE_MODAL_HEADING',
    'COM_MEDIA_CREATE_NEW_FOLDER',
    'COM_MEDIA_CREATE_NEW_FOLDER_ERROR',
    'COM_MEDIA_CREATE_NEW_FOLDER_SUCCESS',
    'COM_MEDIA_DECREASE_GRID',
    'COM_MEDIA_DELETE_ERROR',
    'COM_MEDIA_DELETE_SUCCESS',
    'COM_MEDIA_DROP_FILE',
    'COM_MEDIA_ERROR',
    'COM_MEDIA_ERROR_NOT_AUTHENTICATED',
    'COM_MEDIA_ERROR_NOT_AUTHORIZED',
    'COM_MEDIA_ERROR_NOT_FOUND',
    'COM_MEDIA_ERROR_WARNFILETOOLARGE',
    'COM_MEDIA_FILE',
    'COM_MEDIA_FILE_EXISTS_AND_OVERRIDE',
    'COM_MEDIA_FOLDER',
    'COM_MEDIA_FOLDER_NAME',
    'COM_MEDIA_INCREASE_GRID',
    'COM_MEDIA_MANAGE_ITEM',
    'COM_MEDIA_MEDIA_DATE_CREATED',
    'COM_MEDIA_MEDIA_DATE_MODIFIED',
    'COM_MEDIA_MEDIA_DIMENSION',
    'COM_MEDIA_MEDIA_EXTENSION',
    'COM_MEDIA_MEDIA_MIME_TYPE',
    'COM_MEDIA_MEDIA_NAME',
    'COM_MEDIA_MEDIA_SIZE',
    'COM_MEDIA_MEDIA_TYPE',
    'COM_MEDIA_NAME',
    'COM_MEDIA_OPEN_ITEM_ACTIONS',
    'COM_MEDIA_ORDER_ASC',
    'COM_MEDIA_ORDER_BY',
    'COM_MEDIA_ORDER_DESC',
    'COM_MEDIA_ORDER_DIRECTION',
    'COM_MEDIA_PLEASE_SELECT_ITEM',
    'COM_MEDIA_RENAME',
    'COM_MEDIA_RENAME_ERROR',
    'COM_MEDIA_RENAME_SUCCESS',
    'COM_MEDIA_SEARCH',
    'COM_MEDIA_SELECT_ALL',
    'COM_MEDIA_SERVER_ERROR',
    'COM_MEDIA_SHARE',
    'COM_MEDIA_SHARE_COPY',
    'COM_MEDIA_SHARE_COPY_FAILED_ERROR',
    'COM_MEDIA_SHARE_DESC',
    'COM_MEDIA_TOGGLE_INFO',
    'COM_MEDIA_TOGGLE_LIST_VIEW',
    'COM_MEDIA_TOGGLE_SELECT_ITEM',
    'COM_MEDIA_TOOLBAR_LABEL',
    'COM_MEDIA_UPLOAD_SUCCESS',
    'ERROR',
    'JACTION_CREATE',
    'JAPPLY',
    'JCANCEL',
    'JGLOBAL_CONFIRM_DELETE',
    'JLIB_FORM_FIELD_REQUIRED_VALUE',
    'MESSAGE',
];

foreach ($translationStrings as $string) {
    Text::script($string);
}
