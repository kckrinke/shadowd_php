<?php

/**
 * Shadow Daemon -- Web Application Firewall
 *
 *   Copyright (C) 2014-2018 Hendrik Buchwald <hb@zecure.org>
 *
 * This file is part of Shadow Daemon. Shadow Daemon is free software: you can
 * redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation, version 2.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace shadowd;

class Output
{
    /** @var array $options */
    private $options;

    /**
     * Initialize options.
     *
     * @param array $options
     */
    public function __construct($options = array())
    {
        if (!isset($options['detailedError']) || is_null($options['detailedError'])) {
            $options['detailedError'] = true;
        }

        $this->options = $options;
    }

    /**
     * Show a fatal error and stop.
     *
     * @param int|null $type
     * @return void
     */
    public function showErrorAndExit($type = null)
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);

        if (!$this->options['detailedError']) {
            // Show a generic error message.
            echo '<h1>500 Internal Server Error</h1>';
        } else {
            // Show the fancy error template.
            require(realpath(dirname(__FILE__)) . '/../templates/error.html.php');
        }

        exit(1);
    }

    /**
     * Write message to error log.
     *
     * @param string $message
     * @return void
     */
    public function writeLog($message)
    {
        error_log($message);
    }
}
