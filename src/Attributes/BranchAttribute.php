<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

final class BranchAttribute
{
    public const ID = 'id';

    public const NAME = 'name';

    public const ADDRESS = 'address';

    public const POSTAL_CODE = 'postal_code';

    public const PHONE = 'phone_number';

    public const REGENCY = 'regency_id';

    public const REGENCY_MODEL = 'regency';

    public const CITY = 'city_id';

    public const CITY_MODEL = 'city';

    public const PROVINCE = 'province_id';

    public const PROVINCE_MODEL = 'province';

    public const HEAD_OFFICE = 'is_head_office';

    public const DELETED_AT = 'deleted_at';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const INTRANET_ID = 'intranet_id';
}
