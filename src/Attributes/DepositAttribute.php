<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

final class DepositAttribute
{
    public const ID = 'id';

    public const IDENTIFICATION_NUMBER = 'identification_number';

    public const BRANCH = 'branch_id';

    public const BRANCH_MODEL = 'branch';

    public const PARTNER = 'partner_id';

    public const PARTNER_MODEL = 'partner';

    public const TRANSACTION_TYPE = 'transaction_type';

    public const TRANSACTION_DATE = 'transaction_date';

    public const TRANSACTION_STATUS = 'transaction_status';

    public const AMOUNT = 'amount';

    public const QUANTITY = 'quantity';

    public const BANK_ACCOUNT = 'bank_account_id';

    public const BANK_ACCOUNT_MODEL = 'bankAccount';

    public const COURIER = 'courier_id';

    public const COURIER_MODEL = 'courier';

    public const DEPOSITOR = 'depositor_id';

    public const DEPOSITOR_MODEL = 'depositor';

    public const RECEIVER = 'receiver_id';

    public const RECEIVER_MODEL = 'receiver';

    public const DONATION = 'donation_id';

    public const DONATIONS_MODEL = 'donations';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const SOURCE = 'source';

    public const SOURCE_ID = 'source_id';
}
