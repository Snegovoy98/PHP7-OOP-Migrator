<?php

namespace Snegovoy\SyntaxMigrator;

/**
 * Interface for PHP file.
 *
 * @author Snegovoy Alex<snegovoy.aleksandr@gmail.com>
 * @since 1.0
 */
interface PhpFileInterface
{
    /**
     * Reads PHP file.
     *
     * @return string Content of PHP file.
     */
    public function read(): string;

    /**
     * Writes content to the PHP file.
     *
     * @param string $content New content for PHP file.
     */
    public function write(string $content): void;
}
