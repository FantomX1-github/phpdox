<?php declare(strict_types = 1);
namespace TheSeer\phpDox\Generator;

class ClassEntry extends AbstractEntry {
    public function getName() {
        return $this->getNode()->getAttribute('name');
    }

    public function asDom() {
        return $this->getNode();
    }

    public function getClassObject($dir) {
        return new ClassObject($this->loadDocument($dir));
    }
}
