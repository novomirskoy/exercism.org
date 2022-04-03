<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */

declare(strict_types=1);

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
