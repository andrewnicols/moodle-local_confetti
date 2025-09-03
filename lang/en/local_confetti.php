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
 * English language pack for Confetti
 *
 * @package    local_confetti
 * @category   string
 * @copyright  2025 Odei Alba <odeialba@odeialba.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confettitext'] = 'Text';
$string['confetti_thrown_count_description'] = 'The number of times that Confetti has been thrown in Moodle';
$string['confettitext_desc'] = 'Insert the text to be shown in the confetti particles';
$string['pluginname'] = 'Confetti';
$string['privacy:metadata'] = 'The Confetti plugin doesn\'t store any personal data.';

// Settings page
$string['settingsheader'] = 'Confetti Settings';
$string['settingsdescription'] = 'Configure the behavior of the Confetti plugin.';
$string['enableonfrontpage'] = 'Enable on frontpage';
$string['enableonfrontpage_desc'] = 'When enabled, confetti will be shown on the frontpage.';
$string['enableoncoursecompletion'] = 'Enable on course completion';
$string['enableoncoursecompletion_desc'] = 'When enabled, confetti will be shown when a user completes a course.';
$string['enableonlogin'] = 'Enable on successful login';
$string['enableonlogin_desc'] = 'When enabled, confetti will be shown when a user successfully logs in to Moodle. (Implementation pending)';

$string['displayeverylogin'] = 'Display on every login';
$string['displayeverylogin_desc'] = 'When disabled, confetti will only be shown on the first login.';


// Confetti appearance settings
$string['confettiappearance'] = 'Confetti Appearance';
$string['confettiappearance_desc'] = 'Configure how the confetti effect looks.';
$string['confettipreset'] = 'Confetti preset';
$string['confettipreset_desc'] = 'Choose a preset animation style for the confetti effect.';
$string['confettipresetbasic'] = 'Basic (default)';
$string['confettipresetemoji'] = 'Emoji';
$string['confettipresetrealistic'] = 'Realistic';
$string['confettipresettext'] = 'Text';
$string['confettipresetfireworks'] = 'Fireworks';
$string['confettipresetsnow'] = 'Snow';
$string['confettipresetschool'] = 'School Pride';

// Placeholder settings
$string['placeholdersheader'] = 'Additional options (coming soon)';
$string['placeholdersdescription'] = 'These settings will be implemented in future versions.';
$string['placeholder1'] = 'Preset 1';
$string['placeholder1_desc'] = 'Additional preset functionality (coming soon).';
$string['placeholder2'] = 'Preset 2';
$string['placeholder2_desc'] = 'Additional preset functionality (coming soon).';
$string['placeholder3'] = 'Preset 3';
$string['placeholder3_desc'] = 'Additional preset functionality (coming soon).';

// Preview button
$string['previewconfetti'] = 'Preview Confetti';
$string['previewconfetti_desc'] = 'Click the button to preview the confetti effect with current settings.';
$string['previewbutton'] = 'Show Preview';

// Capabilities
$string['confetti:manage'] = 'Manage Confetti settings';
$string['manageconfettisettings'] = 'Manage Confetti Settings';
