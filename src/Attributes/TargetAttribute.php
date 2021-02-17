<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

/**
 * @author Nuradiyana <me@nooradiana.com>
 */
final class TargetAttribute
{
    public const ID = 'id';

    public const MODEL_ID = 'targetable_id';

    public const MODEL_TYPE = 'targetable_type';

    public const PERIOD_MONTH = 'period_month';

    public const PERIOD_YEAR = 'period_year';

    public const AMOUNT = 'amount';

    public const DELETED_AT = 'deleted_at';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';
}
