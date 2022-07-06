<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'estados';
    protected $filable = ['id_asenta_cpcons', 'c_estado', 'c_mnpio', 'd_codigo', 'd_asenta', 'd_tipo_asenta', 'D_mnpio', 'd_estado', 'd_zona'];

    protected function deleteTild($text)
    {
        $text = htmlentities($text, ENT_QUOTES, 'UTF-8');
        $text = strtolower($text);
        $patron = array(
            '/\+/' => '',
            '/&agrave;/' => 'a',
            '/&egrave;/' => 'e',
            '/&igrave;/' => 'i',
            '/&ograve;/' => 'o',
            '/&ugrave;/' => 'u',

            '/&aacute;/' => 'a',
            '/&eacute;/' => 'e',
            '/&iacute;/' => 'i',
            '/&oacute;/' => 'o',
            '/&uacute;/' => 'u',

            '/&acirc;/' => 'a',
            '/&ecirc;/' => 'e',
            '/&icirc;/' => 'i',
            '/&ocirc;/' => 'o',
            '/&ucirc;/' => 'u',

            '/&atilde;/' => 'a',
            '/&etilde;/' => 'e',
            '/&itilde;/' => 'i',
            '/&otilde;/' => 'o',
            '/&utilde;/' => 'u',

            '/&auml;/' => 'a',
            '/&euml;/' => 'e',
            '/&iuml;/' => 'i',
            '/&ouml;/' => 'o',
            '/&uuml;/' => 'u',

            '/&auml;/' => 'a',
            '/&euml;/' => 'e',
            '/&iuml;/' => 'i',
            '/&ouml;/' => 'o',
            '/&uuml;/' => 'u',
            '/&aring;/' => 'a',
            '/&ntilde;/' => 'n',

        );

        $text = preg_replace(array_keys($patron), array_values($patron), $text);
        return $text;
    }
    protected function dAsenta(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtoupper($this->deleteTild($value)),
        );
    }
    protected function dZona(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtoupper($this->deleteTild($value)),
        );
    }
    protected function dEstado(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtoupper($this->deleteTild($value)),
        );
    }
    protected function DMnpio(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtoupper($this->deleteTild($value)),
        );
    }
    protected function dCiudad(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtoupper($this->deleteTild($value)),
        );
    }
    protected function dTipoAsenta(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($this->deleteTild($value)),
        );
    }
}
