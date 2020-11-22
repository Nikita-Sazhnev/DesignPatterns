<<<<<<< HEAD
<?

abstract class DiscFactory {

    abstract public function createDisc(): DiscInterface;
}

class HDDFactory extends DiscFactory {

    public function createDisc(): DiscInterface {
        return new HDD;
    }
}

class SSDFactory extends DiscFactory {

    public function createDisc(): DiscInterface {
        return new SSD;
    }
}
interface DiscInterface {
    public function readMemory();
    public function writeMemory();
}


class HDD implements DiscInterface {

    public function readMemory() {
        echo "Read data from magnet discs";
    }
    public function writeMemory() {
        echo "Write data to memory discs";
    }
}

class SSD implements DiscInterface {
    public function readMemory() {
        echo "Read data from magnet cells";
    }
    public function writeMemory() {
        echo "Write data to memory cells";
    }
}

$creators = [new HDDFactory, new SSDFactory];

foreach ($creators as $creator) {
    $creator->createDisc()->readMemory();
    echo  "<br />";
}
=======

>>>>>>> 5e835420f8b62eb62be9ebe785ab731cda70a6fd
