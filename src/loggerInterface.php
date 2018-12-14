<?php
namespace NtSchool;


interface loggerInterface
{
    public function warning(string $message);
    public function error(string $message);
}