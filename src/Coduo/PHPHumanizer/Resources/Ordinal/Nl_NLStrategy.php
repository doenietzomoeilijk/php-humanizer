<?php

namespace Coduo\PHPHumanizer\Resources\Ordinal;

use Coduo\PHPHumanizer\Number\Ordinal\StrategyInterface;

class Nl_NLStrategy implements StrategyInterface
{
    /** @inheritdoc */
    public function ordinalSuffix($number)
    {
        $absNumber = (string) abs((int) $number);

        // For numbers > 100, we look at the last two digits.
        if ($absNumber > 100) {
            $absNumber = substr($absNumber, -2);
        }

        if ($absNumber < 20) {
            switch ($absNumber) {
            case "01":
            case "08":
                return "ste";
                break;
            default:
                return "de";
            }
        } else {
            return "ste";
        }
    }
}
