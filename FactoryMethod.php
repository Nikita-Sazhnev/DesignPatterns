<?
namespace creational;

abstract class DiscFactory {

    abstract public function factoryMethod(): DiscInterface;

    public function someLogic($data) {
        $product = $this->factoryMethod();

        $fullDisc = $product->writeMemory($data);

        return $fullDisc;
    }
}

class HDDFactory extends DiscFactory {

    public function factoryMethod(): DiscInterface {
        return new HDD;
    }
}

class SSDFactory extends DiscFactory {

    public function factoryMethod(): DiscInterface {
        return new SSD;
    }
}
interface DiscInterface {

    public function readMemory();
    public function writeMemory($data);
}


class HDD implements DiscInterface {

    public function readMemory() {
        echo "Read data from magnet discs";
    }
    public function writeMemory($data) {
        echo "Write data to memory discs";
    }
}

class SSD implements DiscInterface {

    public function readMemory() {
        echo "Read data from magnet cells";
    }
    public function writeMemory($data) {
        echo "Write data to memory cells";
    }
}

$creators = [new HDDFactory, new SSDFactory];

foreach ($creators as $creator) {
    $creator->factoryMethod()->readMemory();
    echo  "<br />";
}