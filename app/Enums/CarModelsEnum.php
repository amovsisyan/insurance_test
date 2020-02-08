<?php


namespace App\Enums;


class CarModelsEnum
{
    const CAR_MODEL_BMW_2_SERIES = '2 series';
    const CAR_MODEL_BMW_3_SERIES = '3 series';
    const CAR_MODEL_BMW_4_SERIES = '4 series';
    const CAR_MODEL_BMW_5_SERIES = '5 series';

    const CAR_MODEL_JEEP_GRAND_CHEROKEE = 'grand cherokee';
    const CAR_MODEL_JEEP_WRANGLER = 'wrangler';

    const CAR_MODEL_PORSCHE_718 = '718';
    const CAR_MODEL_PORSCHE_911 = '911';
    const CAR_MODEL_PORSCHE_PANAMERA = 'panamera';

    const CAR_MODELS = [
        CarCompaniesEnum::COMPANY_BMW => [
            self::CAR_MODEL_BMW_2_SERIES => self::CAR_MODEL_BMW_2_SERIES,
            self::CAR_MODEL_BMW_3_SERIES => self::CAR_MODEL_BMW_3_SERIES,
            self::CAR_MODEL_BMW_4_SERIES => self::CAR_MODEL_BMW_4_SERIES,
            self::CAR_MODEL_BMW_5_SERIES => self::CAR_MODEL_BMW_5_SERIES,
        ],
        CarCompaniesEnum::COMPANY_JEEP => [
            self::CAR_MODEL_JEEP_GRAND_CHEROKEE => self::CAR_MODEL_JEEP_GRAND_CHEROKEE,
            self::CAR_MODEL_JEEP_WRANGLER => self::CAR_MODEL_JEEP_WRANGLER,
        ],
        CarCompaniesEnum::COMPANY_PORSCHE => [
            self::CAR_MODEL_PORSCHE_718 => self::CAR_MODEL_PORSCHE_718,
            self::CAR_MODEL_PORSCHE_911 => self::CAR_MODEL_PORSCHE_911,
            self::CAR_MODEL_PORSCHE_PANAMERA => self::CAR_MODEL_PORSCHE_PANAMERA,
        ]
    ];
}
