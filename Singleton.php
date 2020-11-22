<?

class Singletone {
    private static $instance;

    private function __construct() {

    }

    public function __clone() { }

    public function __wakeup() {
        throw new Exception("No");
    }

    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$a = Singletone::getInstance();
$b = Singletone::getInstance();

echo $a === $b ? "Yes" : "No";