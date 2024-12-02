<?php

declare(strict_types=1);

namespace MusheAbdulHakim\GoHighLevel\Exceptions;

use Exception;

final class ErrorException extends Exception
{
    /**
     * Creates a new Exception instance.
     *
     * @param  array<string,number,null,bool>  $contents
     */
    public function __construct(private readonly array $contents)
    {
        $message = ($contents['message'] ?: (string) $this->contents['code']) ?: 'Unknown error';

        if (is_array($message)) {
            $message = implode(PHP_EOL, $message);
        }

        parent::__construct($message);
    }

    /**
     * Returns the error message.
     */
    public function getErrorMessage(): string
    {
        return $this->getMessage();
    }

    /**
     * Returns the error type.
     */
    public function getErrorType(): string|int|null|boolean
    {
        return $this->contents['type'];
    }

    /**
     * Returns the error code.
     */
    public function getErrorCode(): string|int|null|bool
    {
        return $this->contents['code'];
    }
}
