<?php
/**
 * Actions
 *
 * PHP version 7.1
 *
 * @category PHP
 * @package  ActionsPHP
 * @author   Matt Barber <mfmbarber@gmail.com>
 * @license  BSD Licence
 * @link     https://github.com/mattamorphic
 */
declare(strict_types=1);
namespace Mattamorphic\ActionsPHP;

/**
 * Actions Callable Class
 *
 * @category PHP
 * @package  ActionsPHP
 * @author   Matt Barber <mfmbarber@gmail.com>
 * @license  BSD Licence
 * @link     https://github.com/mattamorphic
 */
class Actions
{
    const SEPARATOR = "\r\n";
    /**
     * Convert a CSV string to a JSON string
     *
     * @param string $csv The CSV string to convert
     *
     * @return string
     */
    public static function convertCSVToJson(string $csv): string
    {
        $data = [];
        $header_line = strtok($csv, self::SEPARATOR);
        if (!$header_line) {
            throw new \Exception('No valid data');
        }
        $headers = str_getcsv($header_line);
        $line = strtok(self::SEPARATOR);
        if (!$line) {
            throw new \Exception('No valid data');
        }
        while ($line !== false) {
            $data[] = array_combine($headers, str_getcsv($line));
            $line = strtok(self::SEPARATOR);
        }
        $json = json_encode($data);
        return $json ? $json : '';
    }
}
