<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

final class DonationDetailAttribute
{
    public const ID = 'id';

    public const DONATION = 'donation_id';

    public const DONATION_MODEL = 'donation';

    public const FUNDING = 'funding_type_id';

    public const FUNDING_MODEL = 'funding';

    public const PROGRAM = 'program_id';

    public const PROGRAM_MODEL = 'program';

    public const AMOUNT = 'amount';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const DELETED_AT = 'deleted_at';

    public const QURBAN_NAMES = 'qurban_names';
}
