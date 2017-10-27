<?php

namespace AlexanderZabornyi\CompositeTest;

use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Name: '));
        $form->addElement(new InputElement('text'));
        $form->addElement(new InputElement('submit'));

        $this->assertEquals(
            '<form>Name: <input type="text" /><input type="submit" /></form>',
            $form->render()
        );
    }
}