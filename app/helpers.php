<?php

use Carbon\Carbon;
use App\Models\Balance;

function getPaymentStatusColor($id)
{
    // Define the current month and the previous three months as names
    $months = [
        Carbon::now()->format('F'), // Current month name
        Carbon::now()->subMonth()->format('F'), // Last month name
        Carbon::now()->subMonths(2)->format('F'), // Two months ago name
        Carbon::now()->subMonths(3)->format('F') // Three months ago name
    ];

    // Retrieve records for the last four months including the current month
    $records = Balance::where('employees_id', $id)
        ->whereIn('month', $months)
        ->get()
        ->keyBy('month');

    // Initialize counters for missing records
    $missingMonths = 0;

    // Check each month to see if it's missing
    foreach ($months as $index => $month) {
        if (!isset($records[$month])) {
            $missingMonths++;
        }
    }

    // Determine color based on missing months
    if ($missingMonths >= 3) {
        return 'red'; // Last 3 months are missing
    } elseif ($missingMonths == 2 && !isset($records[$months[0]])) {
        return 'green'; // Last 2 months are missing, but not the current month
    } elseif ($missingMonths == 1 && !isset($records[$months[0]])) {
        return 'yellow'; // Current month is missing
    } else {
        return 'blue'; // Fewer than 3 months are missing
    }
}
