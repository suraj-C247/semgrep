<?php

/*Constants Define Here*/

return [
    // Global Constants
    'pagination' => [
        'per_page' => 10, // Default pagination
    ],

    'job' => [
        'invite_delay' => 5, // Minutes after which the invite job should be dispatched
        'reminder_delay' => 5, // Minutes before the event for the reminder job
    ],

    // Event-related Constants
    'event' => [
        'image_path' => 'public/events/', // Image storage path
        'status' => [                     // Event response status
            'pending' => 'pending',
            'accepted' => 'accepted',
            'rejected' => 'rejected',
        ],
    ],
];