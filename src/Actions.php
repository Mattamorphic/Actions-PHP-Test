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
        $headers = null;
        $data = [];
        foreach (self::_genCSVLine($csv) as $csv_arr) {
            if ($headers === null) {
                $headers = $csv_arr;
                continue;
            }
            $data[] = array_combine($headers, $csv_arr);
        }
        $json = json_encode($data);
        return $json ? $json : '';
    }

    /**
     * Generator to iterate over CSV string
     *
     * @param string $csv The CSV string to convert
     *
     * @return \Generator
     */
    private static function _genCSVLine(string $csv): \Generator
    {
        $header_line = strtok($csv, self::SEPARATOR);
        if (!$header_line) {
            throw new \Exception('No valid data');
        }
        yield str_getcsv($header_line);
        $line = strtok(self::SEPARATOR);
        if (!$line) {
            throw new \Exception('No valid data');
        }
        while ($line !== false) {
            yield str_getcsv($line);
            $line = strtok(self::SEPARATOR);
        }
    }
}
