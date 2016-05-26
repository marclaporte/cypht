<?php

/**
 * keyboard shortcuts modules
 * @package modules
 * @subpackage keyboard_shortcuts
 */

if (!defined('DEBUG_MODE')) { die(); }

/**
 * @subpackage keyboard_shortcuts/output
 */
class Hm_Output_start_shortcuts_page extends Hm_Output_Module {
    protected function output() {
        return '<div class="shortcut_content"><div class="content_title">'.$this->trans('Shortcuts').'</div>';
    }
}

/**
 * @subpackage keyboard_shortcuts/output
 */
class Hm_Output_shortcuts_content extends Hm_Output_Module {
    protected function output() {
        $res = '<table class="shortcut_table">';
        $res .= '<tr><td colspan="2" class="settings_subtitle">'.$this->trans('General').'</th></tr>';
        $res .= '<tr><th class="keys">Esc</th><th>'.$this->trans('Unfocus all input elements').'</th></tr>';
        $res .= '<tr><th class="keys">Meta + e</th><th>'.$this->trans('Jump to the "Everything" page').'</th></tr>';
        $res .= '<tr><th class="keys">Meta + u</th><th>'.$this->trans('Jump to the "Unread" page').'</th></tr>';
        $res .= '<tr><th class="keys">Meta + f</th><th>'.$this->trans('Jump to the "Flagged" page').'</th></tr>';
        $res .= '<tr><th class="keys">Meta + c</th><th>'.$this->trans('Jump to Contacts').'</th></tr>';
        $res .= '<tr><th class="keys">Meta + h</th><th>'.$this->trans('Jump to History').'</th></tr>';
        $res .= '<tr><th class="keys">Meta + s</th><th>'.$this->trans('Jump to the Compose page').'</th></tr>';
        $res .= '<tr><th class="keys">Meta + t</th><th>'.$this->trans('Toggle the folder list').'</th></tr>';
        $res .= '<tr><td colspan="2" class="settings_subtitle">'.$this->trans('Message List').'</td></tr>';
        $res .= '<tr><th class="keys">n</th><th>'.$this->trans('Select the next message in the list').'</th></tr>';
        $res .= '<tr><th class="keys">p</th><th>'.$this->trans('Select the previous message in the list').'</th></tr>';
        $res .= '<tr><th class="keys">Enter</th><th>'.$this->trans('Open the currently selected message').'</th></tr>';
        $res .= '<tr><td colspan="2" class="settings_subtitle">'.$this->trans('Message View').'</td></tr>';
        $res .= '<tr><th class="keys">n</th><th>'.$this->trans('View the next message in the list').'</th></tr>';
        $res .= '<tr><th class="keys">p</th><th>'.$this->trans('View  the previous message in the list').'</th></tr>';
        $res .= '</table>';
        $res .= '</div>';
        return $res;
    }
}

/**
 * @subpackage keyboard_shortcuts/output
 */
class Hm_Output_shortcuts_page_link extends Hm_Output_Module {
    protected function output() {
        $res = '<li class="menu_shortcuts"><a class="unread_link" href="?page=shortcuts">'.
            '<img class="account_icon" src="'.$this->html_safe(Hm_Image_Sources::$code).
            '" alt="" width="16" height="16" /> '.$this->trans('Shortcuts').'</a></li>';
        if ($this->format == 'HTML5') {
            return $res;
        }
        $this->concat('formatted_folder_list', $res);
    }
}
