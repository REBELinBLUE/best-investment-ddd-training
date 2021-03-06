<?php

namespace BestInvestments\Research\Domain\ValueObjects;

class ConsultationIdentifier
{
    /** @var string */
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    /** @SuppressWarnings(PHPMD.ShortMethodName) */
    public function is(ConsultationIdentifier $consultationId)
    {
        return $this->value === (string) $consultationId;
    }
}
