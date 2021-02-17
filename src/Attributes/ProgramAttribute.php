<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

final class ProgramAttribute
{
    public const ID = 'id';

    public const NAME = 'name';

    public const PARTNER = 'partner_id';

    public const PARTNER_MODEL = 'partner';

    public const PROGRAM_CATEGORY = 'program_category_id';

    public const PROGRAM_CATEGORY_MODEL = 'programCategory';

    public const FUNDING_TYPE = 'funding_type_id';

    public const FUNDING_TYPE_MODEL = 'fundingType';

    public const EDONATION_ID = 'edonation_id';

    public const DELETED_AT = 'deleted_at';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const END_DATE = 'end_date';

    public const TARGET = 'target';

    public const BRANCH = 'branch_id';

    public const BRANCH_MODEL = 'branch';

    public const SOURCE = 'source';

    public const SOURCE_ID = 'source_id';
}
