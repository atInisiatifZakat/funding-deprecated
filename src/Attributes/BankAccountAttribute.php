<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

final class BankAccountAttribute
{
    public const ID = 'id';

    public const ACCOUNT_NAME = 'account_name';

    public const ACCOUNT_NUMBER = 'account_number';

    public const ACCOUNT_BRANCH = 'account_branch';

    public const IS_PUBLISH = 'is_publish';

    public const IS_ACTIVE = 'is_active';

    public const FUNDING_CATEGORY = 'funding_category_id';

    public const FUNDING_CATEGORY_MODEL = 'fundingCategory';

    public const FUNDING = 'funding_type_id';

    public const FUNDING_MODEL = 'funding';

    public const BANK = 'bank_id';

    public const BANK_MODEL = 'bank';

    public const PARTNER = 'partner_id';

    public const PARTNER_MODEL = 'partner';

    public const EDONATION_ID = 'edonation_id';

    public const DEPOSIT_BANK = 'deposit_bank';

    public const BRANCH = 'branch_id';

    public const BRANCH_MODEL = 'branch';

    public const PARENT = 'parent_id';

    public const PARENT_MODEL = 'parent';

    public const DELETED_AT = 'deleted_at';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const SOURCE = 'source';

    public const SOURCE_ID = 'source_id';
}
