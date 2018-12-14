<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.12.2018
 * Time: 11:42
 */

namespace NtSchool;


use Monolog\Logger;

class MonologLogger implements LoggerInterface
{
    protected $logger;
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function warning(string $message)
    {
        $this->logger->warning($message);
    }
    public function error(string $message)
    {
        $this->logger->error($message);
    }

}