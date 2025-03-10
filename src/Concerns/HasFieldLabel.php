<?php

namespace Konnco\FilamentImport\Concerns;

use Illuminate\Support\Str;

trait HasFieldLabel
{
    /**
     * @var string
     */
    protected ?string $label = null;

    /**
     * @return $this
     */
    public function label(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label ?? Str::of($this->name)->title();
    }
}
