<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

final class DonationAttribute
{
    public const ID = 'id';

    public const EMPLOYEE = 'employee_id';

    public const EMPLOYEE_MODEL = 'employee';

    public const IDENTIFICATION_NUMBER = 'identification_number';

    public const DATE = 'date';

    public const TRANSACTION_TYPE = 'transaction_type';

    public const TRANSACTION_DATE = 'transaction_date';

    public const TRANSACTION_STATUS = 'transaction_status';

    public const QUANTITY = 'quantity';

    public const AMOUNT = 'amount';

    public const CURRENCY = 'currency';

    public const DONOR = 'donor_id';

    public const DONOR_MODEL = 'donor';

    public const BRANCH = 'branch_id';

    public const BRANCH_MODEL = 'branch';

    public const PARTNER = 'partner_id';

    public const PARTNER_MODEL = 'partner';

    public const CURRENCY_RATE = 'currency_rate';

    public const SERVICE_FEE = 'service_fee';

    public const TOTAL_AMOUNT = 'total_amount';

    public const EDONATION_ID = 'edonation_id';

    public const BANK_ACCOUNT = 'bank_account_id';

    public const BANK_ACCOUNT_MODEL = 'bankAccount';

    public const BANK_TRANSACTION = 'bankTransaction';

    public const DEPOSITS = 'deposit_id';

    public const DEPOSITS_MODEL = 'deposits';

    public const DETAILS_MODEL = 'details';

    public const DELETED_AT = 'deleted_at';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const MEDIA_MODEL = 'media';

    public const CORRECTION_ID = 'correction_id';

    public const CORRECTION_MODEL = 'correction';

    public const CORRECTION_NOTES = 'correction_notes';

    public const SOURCE = 'source';

    public const SOURCE_ID = 'source_id';

    public const VOLUNTEER = 'volunteer_id';

    public const VOLUNTEER_MODEL = 'volunteer';

    public const OUTLET = 'outlet_id';

    public const OUTLET_MODEL = 'outlet';

    public const BSZ_CREATED_AT = 'bsz_created_at';

    public const BSZ_PRINT_AT = 'bsz_print_at';

    public const BSZ_SENDING_AT = 'bsz_sending_at';

    public const BSZ_PATH = 'bsz_path';

    public const BSZ_STORAGE = 'bsz_storage';
}
