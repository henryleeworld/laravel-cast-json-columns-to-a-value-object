<?php

namespace App\Values;

use JessArcher\CastableDataTransferObject\CastableDataTransferObject;

class Address extends CastableDataTransferObject
{
    public string $road;
    public string $district;
    public string $zip_code;
}
