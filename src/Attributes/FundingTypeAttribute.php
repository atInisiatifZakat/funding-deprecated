<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

final class FundingTypeAttribute
{
    public const ID = 'id';

    public const NAME = 'name';

    public const FUNDING_CATEGORY = 'funding_category_id';

    public const FUNDING_CATEGORY_MODEL = 'fundingCategory';

    public const EDONATION_ID = 'edonation_id';

    public const DELETED_AT = 'deleted_at';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const PRINT_BSZ = 'print_bsz';
}
