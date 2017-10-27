<?php

namespace AlexanderZabornyi\CompositeTest;

class InputElement implements RenderableInterface
{
    private $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Визуализировать
     *
     * @return string
     */
    public function render(): string
    {
        return "<input type=\"$this->type\" />";
    }
}