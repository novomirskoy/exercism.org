<?php

function from(\DateTimeImmutable $date)
{
    return $date->modify('+ 1000000000 sec');
}