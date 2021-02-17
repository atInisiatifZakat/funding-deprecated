<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

final class DonorPhoneAttribute
{
    public const ID = 'id';

    public const DONOR = 'donor_id';

    public const DONOR_MODEL = 'donor';

    public const NUMBER = 'number';

    public const TYPE = 'type';

    public const DELETED_AT = 'deleted_at';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const PRIMARY = 'is_primary';

    public const WHATSAPP = 'is_support_whatsapp';
}
