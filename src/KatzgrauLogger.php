<?php
namespace NtSchool;

use Katzgrau\KLogger\Logger;

class KatzgrauLogger implements LoggerInterface
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