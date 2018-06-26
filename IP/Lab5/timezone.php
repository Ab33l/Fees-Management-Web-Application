<?php
            date_default_timezone_set('Asia/Tokyo'); // your reference timezone here
            $date = date('Y-m-d H:i:s');

            $usersTimezone = new DateTimeZone('America/Vancouver');
            $l10nDate = new DateTime($date);
            $l10nDate->setTimeZone($usersTimezone);
           
            ?>