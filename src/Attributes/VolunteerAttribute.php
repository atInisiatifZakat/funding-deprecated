<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

/**
 * @author Nuradiyana <me@nooradiana.com>
 */
final class VolunteerAttribute
{
    public const ID = 'id';

    public const NAME = 'name';

    public const PHONE = 'phone';

    public const ADDRESS = 'address';

    public const POSTAL_CODE = 'postal_code';

    public const REGENCY = 'regency_id';

    public const REGENCY_MODEL = 'regency';

    public const CITY = 'city_id';

    public const CITY_MODEL = 'city';

    public const PROVINCE = 'province_id';

    public const PROVINCE_MODEL = 'province';

    public const TARGET = 'target';

    public const BRANCH = 'branch_id';

    public const BRANCH_MODEL = 'branch';

    public const ACTIVE_UNTIL = 'active_until';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const EMAIL = 'email';

    public const OUTLETS_MODEL = 'outlets';
}
