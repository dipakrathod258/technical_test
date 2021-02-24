<?php

$data = [
    ['is_in_app' => 1, 'monday' => 1, 'tuesday' => 0, 'wednesday' => 1, 'thursday' => 1, 'friday' => 0, 'saturday' => 1, 'sunday' => 0, 'is_track_goal' => 1],
    ['is_in_app' => 0, 'monday' => 1, 'tuesday' => 0, 'wednesday' => 1, 'thursday' => 1, 'friday' => 0, 'saturday' => 0, 'sunday' => 1, 'is_track_goal' => 1],
    ['is_in_app' => 0, 'monday' => 1, 'tuesday' => 1, 'wednesday' => 0, 'thursday' => 1, 'friday' => 0, 'saturday' => 0, 'sunday' => 0, 'is_track_goal' => 1],
    ['is_in_app' => 1, 'monday' => 1, 'tuesday' => 1, 'wednesday' => 0, 'thursday' => 0, 'friday' => 0, 'saturday' => 0, 'sunday' => 0, 'is_track_goal' => 1],
    ['is_in_app' => 0, 'monday' => 1, 'tuesday' => 1, 'wednesday' => 0, 'thursday' => 1, 'friday' => 0, 'saturday' => 0, 'sunday' => 0, 'is_track_goal' => 1],
    ['is_in_app' => 1, 'monday' => 1, 'tuesday' => 1, 'wednesday' => 1, 'thursday' => 0, 'friday' => 0, 'saturday' => 0, 'sunday' => 0, 'is_track_goal' => 1],
    ['is_in_app' => 1, 'monday' => 0, 'tuesday' => 1, 'wednesday' => 0, 'thursday' => 1, 'friday' => 0, 'saturday' => 0, 'sunday' => 1, 'is_track_goal' => 1],
];

function futureGoalStaticResult1($userGoalData)
{
    $staticResultArray = [];
    foreach ($userGoalData as $key => $value) {
        $monday = 2;
        $tuesday = 2;
        $wednesday = 2;
        $thursday = 2;
        $friday = 2;
        $saturday = 2;
        $sunday = 2;
        if ($value['is_in_app'] == 0) {
            $monday = 3;
            $tuesday = 3;
            $wednesday = 3;
            $thursday = 3;
            $friday = 3;
            $saturday = 3;
            $sunday = 3;
        } else {
            if ($value['monday'] == 0) {
                $monday = 3;
            }
            if ($value['tuesday'] == 0) {
                $tuesday = 3;
            }
            if ($value['wednesday'] == 0) {
                $wednesday = 3;
            }
            if ($value['thursday'] == 0) {
                $thursday = 3;
            }
            if ($value['friday'] == 0) {
                $friday = 3;
            }
            if ($value['saturday'] == 0) {
                $saturday = 3;
            }
            if ($value['sunday'] == 0) {
                $sunday = 3;
            }
        }
        $staticResultArray[$key]['is_track_goal'] = $value['is_track_goal'];
        $staticResultArray[$key]['week']['monday'] = $monday;
        $staticResultArray[$key]['week']['tuesday'] = $tuesday;
        $staticResultArray[$key]['week']['wednesday'] = $wednesday;
        $staticResultArray[$key]['week']['thursday'] = $thursday;
        $staticResultArray[$key]['week']['friday'] = $friday;
        $staticResultArray[$key]['week']['saturday'] = $saturday;
        $staticResultArray[$key]['week']['sunday'] = $sunday;
    }

    return $staticResultArray;
}

function futureGoalStaticResult2($userGoalData)
{
    // TO DO
}

$result1 = futureGoalStaticResult1($data);

$result2 = futureGoalStaticResult2($data);

if ($result1 == $result2) {
    echo 'Matched!';
} else {
    echo 'Not Matched!';
}
