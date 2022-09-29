<?php 

namespace ChaitralyBiz4\tp236_demo_pkg;
final class classWelcome {

    private $city;
    public function __construct(string $city)
    {
        echo "inside welcome constructor";
        $this->city = $city;

    }

    public function getCity(): string {
        return $this->city;
    }

}
?>