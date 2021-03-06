<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Group self selection module admin settings and defaults
 *
 * @package    mod
 * @subpackage groupselect
 * @copyright  2008-2011 Petr Skoda (http://skodak.org)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    //--- modedit defaults -----------------------------------------------------------------------------------
    $settings->add(new admin_setting_heading('groupselectmodeditdefaults', get_string('modeditdefaults', 'admin'), get_string('condifmodeditdefaults', 'admin')));

    $settings->add(new admin_setting_configtext('groupselect/minmembers',
        get_string('minmembers', 'mod_groupselect'), 
        get_string('minmembers_help', 'mod_groupselect'), 0, PARAM_INT));

    $settings->add(new admin_setting_configtext('groupselect/maxmembers',
        get_string('maxmembers', 'mod_groupselect'), 
        get_string('maxmembers_help', 'mod_groupselect'), 0, PARAM_INT));

    $settings->add(new admin_setting_configcheckbox('groupselect/studentcancreate',
        get_string('studentcancreate', 'mod_groupselect'),
        get_string('studentcancreate_help', 'mod_groupselect'), 1));

    $settings->add(new admin_setting_configcheckbox('groupselect/studentcansetgroupname',
        get_string('studentcansetgroupname', 'mod_groupselect'),
        get_string('studentcansetgroupname_help', 'mod_groupselect'), 1));

    $settings->add(new admin_setting_configcheckbox('groupselect/studentcansetdesc',
        get_string('studentcansetdesc', 'mod_groupselect'),
        get_string('studentcansetdesc_help', 'mod_groupselect'), 1));

    $settings->add(new admin_setting_configcheckbox('groupselect/studentcansetenrolmentkey',
        get_string('studentcansetenrolmentkey', 'mod_groupselect'),
        get_string('studentcansetenrolmentkey_help', 'mod_groupselect'), 0));

    $settings->add(new admin_setting_configcheckbox('groupselect/assignteachers',
        get_string('assigngroup', 'mod_groupselect'),
        get_string('assigngroup_help', 'mod_groupselect'), 0));

    $settings->add(new admin_setting_configcheckbox('groupselect/showassignedteacher',
        get_string('showassignedteacher', 'mod_groupselect'),
        get_string('showassignedteacher_help', 'mod_groupselect'), 0));

    $settings->add(new admin_setting_configcheckbox('groupselect/hidefullgroups',
        get_string('hidefullgroups', 'mod_groupselect'),
        get_string('hidefullgroups_help', 'mod_groupselect'), 0));

    $settings->add(new admin_setting_configcheckbox('groupselect/deleteemptygroups',
        get_string('deleteemptygroups', 'mod_groupselect'),
        get_string('deleteemptygroups_help', 'mod_groupselect'), 1));

    $settings->add(new admin_setting_configcheckbox('groupselect/notifyexpiredselection',
        get_string('notifyexpiredselection', 'mod_groupselect'),
        get_string('notifyexpiredselection_help', 'mod_groupselect'), 1));
}
