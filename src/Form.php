<?php

namespace AlexanderZabornyi\CompositeTest;

class Form implements RenderableInterface
{
    private $elements;

    /**
     * Визуализировать
     *
     * @return string
     */
    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    /**
     * Добавить элемент в форму
     *
     * @param RenderableInterface $element
     */
    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
}