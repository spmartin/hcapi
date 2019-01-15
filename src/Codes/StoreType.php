<?php

namespace Hcapi\Codes;

/**
 * @author Oldřich Taufer <oldrich.taufer@heureka.cz>
 */
class StoreType extends AbstractCodes
{

    const STORE_TYPE_INTERNAL = 1;

    /**
     * Gets constants as array
     *
     * @return array
     */
    function getConstants()
    {
        return [
            self::STORE_TYPE_INTERNAL,
        ];
    }

}
