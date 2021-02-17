<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

final class PartnerAttribute
{
    public const ID = 'id';

    public const NAME = 'name';

    public const ADDRESS = 'address';

    public const PHONE_NUMBER = 'phone_number';

    public const POSTAL_CODE = 'postal_code';

    public const AGREEMENT_NUMBER = 'agreement_number';

    public const AGREEMENT_DATE = 'agreement_date';

    public const AGREEMENT_EXPIRED_DATE = 'agreement_expiry_date';

    public const BRANCH = 'branch_id';

    public const BRANCH_MODEL = 'branch';

    public const EMPLOYEE = 'employee_id';

    public const EMPLOYEE_MODEL = 'employee';

    public const REGENCY = 'regency_id';

    public const REGENCY_MODEL = 'regency';

    public const CITY = 'city_id';

    public const CITY_MODEL = 'city';

    public const PROVINCE = 'province_id';

    public const PROVINCE_MODEL = 'province';

    public const STATUS = 'status';

    public const DELETED_AT = 'deleted_at';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const SOURCE = 'source';

    public const SOURCE_ID = 'source_id';
}
