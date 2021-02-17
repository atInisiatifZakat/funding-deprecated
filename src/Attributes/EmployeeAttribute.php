<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

final class EmployeeAttribute
{
    public const ID = 'id';

    public const NAME = 'name';

    public const EMAIL = 'email';

    public const ADDRESS = 'address';

    public const POSTAL_CODE = 'postal_code';

    public const BRANCH = 'branch_id';

    public const BRANCH_MODEL = 'branch';

    public const PARTNER = 'partner_id';

    public const PARTNER_MODEL = 'partner';

    public const REGENCY = 'regency_id';

    public const REGENCY_MODEL = 'regency';

    public const CITY = 'city_id';

    public const CITY_MODEL = 'city';

    public const PROVINCE = 'province_id';

    public const PROVINCE_MODEL = 'province';

    public const PHONE = 'employee_phone_id';

    public const PHONE_MODEL = 'phone';

    public const DELETED_AT = 'deleted_at';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const IS_MARKETER = 'is_marketer';

    public const INTRANET_ID = 'intranet_id';
}
