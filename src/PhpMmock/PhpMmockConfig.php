<?php

namespace PhpMmock;

class PhpMmockConfig
{
    /** @var string Mmock executable path (default require mmock in $PATH) */
    private $mmockPath = null;

    /** @var string|null Mocks definition folder (default "$HOME/config") */
    private $configPath = null;

    /** @var bool|null Console enabled  (true/false) (default true) */
    private $console = null;

    /** @var string|null Console server IP (default set to public IP) */
    private $consoleIp = null;

    /** @var int|null Console server Port (default 8082) */
    private $consolePort = null;

    /** @var string|null Mock server IP (default set to public IP) */
    private $serverIp = null;

    /** @var int|null Mock server Port (default 8082) */
    private $serverPort = null;

    /** @var bool|null Mock server sends anonymous statistics (default true) */
    private $serverStatistics = null;

    /** @var int|null Mock server TLS Port (default 8084) */
    private $serverTlsPort = null;

    /** @var string|null Mock server TLS Port TLS config folder (server.crt and server.key should be inside) (default "{WorkingDir}/tls") */
    private $tlsPath = null;

    /** @return null|string */
    public function getConfigPath()
    {
        return $this->configPath;
    }

    /**
     * @param null|string $configPath
     * @return PhpMmockConfig
     */
    public function setConfigPath($configPath)
    {
        $this->configPath = $configPath;
        return $this;
    }

    /** @return bool|null */
    public function getConsole()
    {
        return $this->console;
    }

    /**
     * @param bool|null $console
     * @return PhpMmockConfig
     */
    public function setConsole($console)
    {
        $this->console = $console;
        return $this;
    }

    /** @return null|string */
    public function getConsoleIp()
    {
        return $this->consoleIp;
    }

    /**
     * @param null|string $consoleIp
     * @return PhpMmockConfig
     */
    public function setConsoleIp($consoleIp)
    {
        $this->consoleIp = $consoleIp;
        return $this;
    }

    /** @return int|null */
    public function getConsolePort()
    {
        return $this->consolePort;
    }

    /**
     * @param int|null $consolePort
     * @return PhpMmockConfig
     */
    public function setConsolePort($consolePort)
    {
        $this->consolePort = $consolePort;
        return $this;
    }

    /** @return null|string */
    public function getServerIp()
    {
        return $this->serverIp;
    }

    /**
     * @param null|string $serverIp
     * @return PhpMmockConfig
     */
    public function setServerIp($serverIp)
    {
        $this->serverIp = $serverIp;
        return $this;
    }

    /** @return int|null */
    public function getServerPort()
    {
        return $this->serverPort;
    }

    /**
     * @param int|null $serverPort
     * @return PhpMmockConfig
     */
    public function setServerPort($serverPort)
    {
        $this->serverPort = $serverPort;
        return $this;
    }

    /** @return bool|null */
    public function getServerStatistics()
    {
        return $this->serverStatistics;
    }

    /**
     * @param bool|null $serverStatistics
     * @return PhpMmockConfig
     */
    public function setServerStatistics($serverStatistics)
    {
        $this->serverStatistics = $serverStatistics;
        return $this;
    }

    /** @return int|null */
    public function getServerTlsPort()
    {
        return $this->serverTlsPort;
    }

    /**
     * @param int|null $serverTlsPort
     * @return PhpMmockConfig
     */
    public function setServerTlsPort($serverTlsPort)
    {
        $this->serverTlsPort = $serverTlsPort;
        return $this;
    }

    /** @return null|string */
    public function getTlsPath()
    {
        return $this->tlsPath;
    }

    /**
     * @param null|string $tlsPath
     * @return PhpMmockConfig
     */
    public function setTlsPath($tlsPath)
    {
        $this->tlsPath = $tlsPath;
        return $this;
    }

    /** @return string */
    public function getMmockPath()
    {
        return $this->mmockPath;
    }

    /**
     * @param string $mmockPath
     * @return PhpMmockConfig
     */
    public function setMmockPath($mmockPath)
    {
        $this->mmockPath = $mmockPath;
        return $this;
    }
}