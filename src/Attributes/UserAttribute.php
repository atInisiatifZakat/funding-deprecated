<?php

declare(strict_types=1);

namespace Inisiatif\Funding\Attributes;

final class UserAttribute
{
    public const ID = 'id';

    public const NAME = 'name';

    public const EMAIL = 'email';

    public const PASSWORD = 'password';

    public const EMPLOYEE = 'employee_id';

    public const EMPLOYEE_MODEL = 'employee';

    public const REMEMBER_TOKEN = 'remember_token';

    public const ROLES = 'roles';

    public const PERMISSIONS = 'permissions';

    public const DELETED_AT = 'deleted_at';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const VOLUNTEER = 'volunteer_id';

    public const VOLUNTEER_MODEL = 'volunteer';
}
