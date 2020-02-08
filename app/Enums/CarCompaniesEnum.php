<?php


namespace App\Enums;


class CarCompaniesEnum
{
    const COMPANY_BMW = 'bmw';
    const COMPANY_JEEP = 'jeep';
    const COMPANY_PORSCHE = 'porsche';

    const COMPANIES = [
        self::COMPANY_BMW => self::COMPANY_BMW,
        self::COMPANY_JEEP => self::COMPANY_JEEP,
        self::COMPANY_PORSCHE => self::COMPANY_PORSCHE,
    ];
}
