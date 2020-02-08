<?php


namespace App\Enums;


class CarDriveTrainTypesEnum
{
    const DRIVE_TRAIN_TYPE_2x4 = '2x4';
    const DRIVE_TRAIN_TYPE_4x4 = '4x4';

    const DRIVE_TRAIN_TYPES = [
        self::DRIVE_TRAIN_TYPE_2x4 => self::DRIVE_TRAIN_TYPE_2x4,
        self::DRIVE_TRAIN_TYPE_4x4 => self::DRIVE_TRAIN_TYPE_4x4,
    ];
}
