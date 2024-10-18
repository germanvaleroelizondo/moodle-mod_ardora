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
 * Activity base class.
 * created from the "Resource module" version created by 2017 onwards Ankit Agarwal <ankit.agrr@gmail.com>
 * @package   mod_ardora
 * @copyright 2023 José Manuel Bouzán Matanza
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_ardora\analytics\indicator;

/**
 * Base class for activities in the Community of Inquiry model.
 *
 * This abstract class extends the core analytics community of inquiry activity class.
 * It provides common functionality and structure for specific activity types in the
 * Community of Inquiry framework.
 *
 * @package    local_ardora
 * @category   analytics
 */
abstract class activity_base extends \core_analytics\local\indicator\community_of_inquiry_activity {

    /**
     * No need to fetch grades for ardoras.
     *
     * @param \core_analytics\course $course
     * @return void
     */
    public function fetch_student_grades(\core_analytics\course $course) {
    }
}
