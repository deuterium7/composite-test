<?php

namespace AlexanderZabornyi\CompositeTest;

class TextElement implements RenderableInterface
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * Визуализировать
     *
     * @return string
     */
    public function render(): string
    {
        return $this->text;
    }
}