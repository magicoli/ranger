<?php
/**
 * @copyright CONTENT CONTROL GmbH, http://www.contentcontrol-berlin.de
 * @author CONTENT CONTROL GmbH, http://www.contentcontrol-berlin.de
 * @license https://opensource.org/licenses/MIT MIT
 */
namespace OpenPsa\Ranger\Provider;

use OpenPsa\Ranger\Ranger;
use IntlDateFormatter;

class DeProvider implements Provider
{
    public function modifySeparator(IntlDateFormatter $intl, $best_match, $separator)
    {
        if (   $intl->getDateType() == IntlDateFormatter::MEDIUM
            && (   $best_match == Ranger::YEAR
                || $best_match == Ranger::MONTH))
        {
            return '.' . $separator;
        }
        return $separator;
    }
}