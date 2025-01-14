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
 * Defines the restore task for the Ardora activity module.
 *
 * @package   mod_ardora
 * @copyright 2024 Your Name <your@email.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/mod/ardora/backup/moodle2/restore_ardora_stepslib.php');

/**
 * Restore task for the Ardora activity module.
 *
 * @package   mod_ardora
 */
class restore_ardora_activity_task extends restore_activity_task {

    /**
     * Define (add) particular settings this activity can have
     */
    protected function define_my_settings() {
        // No particular settings for this activity.
    }

    /**
     * Define (add) particular steps this activity can have
     */
    protected function define_my_steps() {
        // Ardora only has one structure step.
        $this->add_step(new restore_ardora_activity_structure_step('ardora_structure', 'ardora.xml'));
    }

    /**
     * Define the contents in the activity that must be processed by the link decoder
     */
    public static function define_decode_contents() {
        $contents = [];
        $contents[] = new restore_decode_content('ardora', ['intro'], 'ardora');
        return $contents;
    }
    /**
     * Define the decoding rules for links belonging
     * to the activity to be executed by the link decoder
     *
     * @return restore_decode_rule[]
     */
    public static function define_decode_rules() {
        return [];
    }
}