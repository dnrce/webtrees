<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIo;

/**
 * Class LocaleEnIo
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnIo extends LocaleEn
{
    public function territory()
    {
        return new TerritoryIo();
    }
}
