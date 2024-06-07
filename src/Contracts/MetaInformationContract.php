<?php

declare(strict_types=1);

namespace MusheAbdulHakim\GoHighLevel\Contracts;

use ArrayAccess;

interface MetaInformationContract extends ArrayAccess
{
    /**
     * Returns the array representation of the meta information.
     *
     * @return TArray
     */
    public function toArray(): array;

    /**
     * @param  key-of<TArray>  $offset
     */
    public function offsetExists(mixed $offset): bool;

    /**
     * @template TOffsetKey of key-of<TArray>
     *
     * @param  TOffsetKey  $offset
     * @return TArray[TOffsetKey]
     */
    public function offsetGet(mixed $offset): mixed;

    /**
     * @template TOffsetKey of key-of<TArray>
     *
     * @param  TOffsetKey  $offset
     * @param  TArray[TOffsetKey] $value
     */
    public function offsetSet(mixed $offset, mixed $value): never;

    /**
     * @template TOffsetKey of key-of<TArray>
     *
     * @param  TOffsetKey  $offset
     */
    public function offsetUnset(mixed $offset): never;
}
