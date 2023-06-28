<?php

namespace App\Model;

/**
 * @property string $ID
 * @property string $DEZ
 * @property string $DTF
 * @property string $TYP
 * @property string $CRT
 * @property string $TRG
 * @property string $DSC
 * @property string $EXC
 * @property string $SRC
 * @property string $DTE
 * @property string $MES
 * @property string $END
 */
class INC
{
    public const COLS = [
        'ID',
        'DEZ',
        'DTF',
        'TYP',
        'CRT',
        'TRG',
        'DSC',
        'EXC',
        'SRC',
        'DTE',
        'MES',
        'END',
    ];

    private array $properties = [];

    public function __construct(array $data)
    {
        foreach (self::COLS as $key) {
            $this->properties[$key] = $data[$key];
        }
    }

    public function __get(string $name): mixed
    {
        return $this->properties[$name];
    }
}