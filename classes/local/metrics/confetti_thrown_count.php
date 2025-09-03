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

namespace local_confetti\local\metrics;

/**
 * @package    local_confetti
 * @copyright  Andrew Lyons <andrew@nicols.co.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace local_confetti\local\metrics;

use core\lang_string;
use tool_monitoring\local\metrics\metric_interface;
use tool_monitoring\local\metrics\metric_type;

/**
 * Implements the confetti_thrown_count metric.
 */
class confetti_thrown_count implements metric_interface {
    #[\Override]
    public static function calculate(): float|int {
        global $DB;

        return $DB->count_records('logstore_standard_log', [
            'eventname' => '\\' . \local_confetti\event\confetti_thrown::class,
        ]);
        // TODO Count this.
    }

    #[\Override]
    public static function get_description(): lang_string {
        return new lang_string('confetti_thrown_count_description', 'local_confetti');
    }

    #[\Override]
    public static function get_name(): string {
        return 'local_confetti:confetti_thrown_count';
    }

    #[\Override]
    public static function get_type(): metric_type {
        return metric_type::COUNTER;
    }

}
