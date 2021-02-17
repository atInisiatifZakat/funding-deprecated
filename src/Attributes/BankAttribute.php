<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

final class BankAttribute
{
    public const ID = 'id';

    public const NAME = 'name';

    public const DELETED_AT = 'deleted_at';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const SETTING_BEGIN_LINE = 'begin_line';

    public const SETTING_DATE_COLUMN = 'date_column';

    public const SETTING_AMOUNT_COLUMN = 'amount_column';

    public const SETTING_DESCRIPTION_COLUMN = 'description_column';

    public const SETTING_DATE_FORMAT = 'date_formats';
}
