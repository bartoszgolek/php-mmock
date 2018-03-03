<?php

namespace PhpMmock;

use ProcessManager\Process;
use ProcessManager\ProcessManager;

class PhpMmock
{
    const MMOCK = "mmock";

    /** @var \ProcessManager\ProcessExecutor */
    private $executor;

    /** @var PhpMmockConfig */
    private $config;

    /** @var Process */
    private $process;

    /**
     * @param PhpMmockConfig $config
     * @throws \ProcessManager\ProcessExecutionException
     */
    public function __construct(PhpMmockConfig $config)
    {
        $this->config = $config;
        $this->executor = ProcessManager::executor($this->getMmockExecutable());

        $this->addParameterIfNotEmpty(
            $this->config->getConfigPath(),
            "-config-path"
        );

        $this->addParameterIfNotEmpty(
            $this->config->getConsole(),
            "-console"
        );

        $this->addParameterIfNotEmpty(
            $this->config->getConsoleIp(),
            "-console-ip"
        );

        $this->addParameterIfNotEmpty(
            $this->config->getConsolePort(),
            "-console-port"
        );

        $this->addParameterIfNotEmpty(
            $this->config->getServerIp(),
            "-server-ip"
        );

        $this->addParameterIfNotEmpty(
            $this->config->getServerPort(),
            "-server-port"
        );

        $this->addParameterIfNotEmpty(
            $this->config->getServerStatistics(),
            "-server-statistics"
        );

        $this->addParameterIfNotEmpty(
            $this->config->getServerTlsPort(),
            "-server-tls-port"
        );

        $this->addParameterIfNotEmpty(
            $this->config->getTlsPath(),
            "-tls-path"
        );

        $this->process = $this->executor->execute();
    }

    public function __destruct()
    {
        $this->process->close();
    }

    /**
     * @return string
     */
    private function getMmockExecutable()
    {
        $mmockPath = $this->config->getMmockPath();
        if (empty($mmockPath)) {
            return self::MMOCK;
        }

        return rtrim($mmockPath, DIRECTORY_SEPARATOR). DIRECTORY_SEPARATOR. self::MMOCK;
    }

    /**
     * @param string $parameterName
     * @param string $parameter
     */
    private function addParameterIfNotEmpty($parameterName, $parameter)
    {
        if (!empty($parameter)) {
            $this->executor
                ->withParameter($parameterName)
                ->withParameter($parameter);
        }
    }
}