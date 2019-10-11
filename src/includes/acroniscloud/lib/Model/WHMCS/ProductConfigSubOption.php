<?php
/**
 * @Copyright © 2002-2019 Acronis International GmbH. All rights reserved
 */

namespace AcronisCloud\Model\WHMCS;

use AcronisCloud\Model\AbstractModel;

class ProductConfigSubOption extends AbstractModel
{
    const TABLE = 'tblproductconfigoptionssub';

    const COLUMN_CONFIG_ID = 'configid';
    const COLUMN_OPTION_NAME = 'optionname';
    const COLUMN_SORT_ORDER = 'sortorder';
    const COLUMN_HIDDEN = 'hidden';

    public $timestamps = false;

    protected $fillable = [
        self::COLUMN_CONFIG_ID,
        self::COLUMN_OPTION_NAME,
        self::COLUMN_SORT_ORDER,
        self::COLUMN_HIDDEN,
    ];
}