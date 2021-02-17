<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

final class BankTransactionAttribute
{
    public const ID = 'id';

    public const SIGNATURE = 'signature';

    public const EMPLOYEE = 'employee_id';

    public const EMPLOYEE_MODEL = 'employee';

    public const BANK_ACCOUNT = 'bank_account_id';

    public const BANK_ACCOUNT_MODEL = 'bankAccount';

    public const TRANSACTION_DATE = 'transaction_date';

    public const AMOUNT = 'amount';

    public const DESCRIPTION = 'description';

    public const DONATION = 'donation_id';

    public const DONATION_MODEL = 'donation';

    public const POSITION = 'row_position';

    public const STATUS = 'status';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';
}
