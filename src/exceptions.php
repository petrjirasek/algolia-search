<?php

namespace petrjirasek\AlgoliaSearch;

/**
 * @author Petr Jirásek
 */
interface Exception
{
}

/**
 * @author Petr Jirásek
 */
class InvalidStateException extends \RuntimeException
{
}

/**
 * @author Petr Jirásek
 */
class InvalidArgumentException extends \InvalidArgumentException
{
}

/**
 * @author Petr Jirásek
 */
class EmailAlreadyRegistered extends InvalidArgumentException
{
}

/**
 * @author Petr Jirásek
 */
class UserAlreadyEnrolled extends InvalidArgumentException
{
}

/**
 * @author Petr Jirásek
 */
class UserNotFound extends InvalidArgumentException
{
}
