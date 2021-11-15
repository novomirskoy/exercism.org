<?php

class Robot
{
    /**
     * @var array
     */
    private static $allNames = [];

    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     *
     * @throws Exception
     */
    public function getName(): string
    {
        if ($this->name !== null) {
            return $this->name;
        }

        do {
            $newName = $this->generateName();
        } while (in_array($newName, static::$allNames, true));

        $this->name = $newName;
        static::$allNames[] = $newName;

        return $this->name;
    }

    /**
     * @return void
     */
    public function reset(): void
    {
        $this->name = null;
    }

    /**
     * @return string
     *
     * @throws Exception
     */
    private function generateName(): string
    {
        $letters = range('A', 'Z');
        shuffle($letters);

        $firstPart = $letters[0] . $letters[1];
        $secondPart = (string)random_int(111, 999);

        return $firstPart . $secondPart;
    }
}