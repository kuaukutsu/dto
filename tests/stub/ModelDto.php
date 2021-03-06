<?php

declare(strict_types=1);

namespace kuaukutsu\dto\tests\stub;

use kuaukutsu\dto\DtoBase;

/**
 * Class ModelDto
 * @psalm-immutable
 */
final class ModelDto extends DtoBase
{
    protected int $id;

    protected string $name;

    protected ?array $props = [];

    protected ?string $tree = null;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getProps(): array
    {
        return $this->props ?? [];
    }

    /**
     * @return string|null
     */
    public function getTree(): ?string
    {
        return $this->tree;
    }
}
