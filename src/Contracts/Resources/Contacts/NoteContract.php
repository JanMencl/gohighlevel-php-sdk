<?php

declare(strict_types=1);

namespace MusheAbdulHakim\GoHighLevel\Contracts\Resources\Contacts;

interface NoteContract
{
    /**
     * Get All Notes
     *
     *
     * @return array<mixed>|string
     *
     * @see https://highlevel.stoplight.io/docs/integrations/73decb4b6d0c2-get-all-notes
     */
    public function list(string $contactId);

    /**
     * Create Note
     *
     *
     * @return array<mixed>|string
     *
     * @see https://highlevel.stoplight.io/docs/integrations/5eab1684a9948-create-note
     */
    public function create(string $contactId, string $userId, string $body): array|string;

    /**
     * Get Note
     *
     * @return array<mixed>|string
     *
     * @see https://highlevel.stoplight.io/docs/integrations/24cab1c2b3dfb-get-note
     */
    public function get(string $contactId, string $id): array|string;

    /**
     * Update Note
     *
     *
     * @return array<mixed>|string
     *
     * @see https://highlevel.stoplight.io/docs/integrations/71814e115658f-update-note
     */
    public function update(string $contactId, string $id, string $userId, string $body): array|string;

    /**
     * Delete Note
     *
     *
     * @return array<mixed>|string
     *
     * @see https://highlevel.stoplight.io/docs/integrations/d7e867be69e9f-delete-note
     */
    public function delete(string $contactId, string $id): array|string;
}
