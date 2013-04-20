<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Script
 *
 * Generates a script inclusion of a JavaScript file
 * Based on the CodeIgniters original Link Tag.
 *
 * Author(s): Isern Palaus <ipalaus@ipalaus.es>, Viktor Rutberg <wishie@gmail.com>
 *
 * @access    public
 * @param    mixed    javascript sources or an array
 * @param    string    language
 * @param    string    type
 * @param    boolean    should index_page be added to the javascript path
 * @return    string
 */
if (!function_exists('script_tag')) {

    function script_tag($src = '', $language = 'javascript', $type = 'text/javascript', $index_page = FALSE) {
        $CI = & get_instance();

        $script = '<script ';

        if (is_array($src)) {
            foreach ($src as $k => $v) {
                if ($k == 'src' AND strpos($v, '://') === FALSE) {
                    if ($index_page === TRUE) {
                        $script .= ' src="' . $CI->config->site_url($v) . '"';
                    } else {
                        $script .= ' src="' . $CI->config->slash_item('base_url') . $v . '"';
                    }
                } else {
                    $script .= " $k=\"$v\"";
                }
            }

            $script .= ">\n";
        } else {
            if (strpos($src, '://') !== FALSE) {
                $script .= ' src="' . $src . '" ';
            } elseif ($index_page === TRUE) {
                $script .= ' src="' . $CI->config->site_url($src) . '" ';
            } else {
                $script .= ' src="' . $CI->config->slash_item('base_url') . $src . '" ';
            }

            $script .= 'language="' . $language . '" type="' . $type . '"';

            $script .= '>' . "\n";
        }


        $script .= '</script>';

        return $script;
    }

}

if (!function_exists('error_msj')) {

    function error_msj($msj) {
        $r = '<div class = "ui-widget ui-messaje">';
        $r.= '<div class = "ui-state-error ui-corner-all">';
        $r.= '<span class = "ui-icon ui-icon-alert"></span>';
        $r.= '<span>' . $msj . '</span>';
        $r.= '</div>';
        $r.= '</div>';
        return $r;
    }

}

if (!function_exists('info_msj')) {

    function info_msj($msj) {
        $r = '<div class = "ui-widget ui-messaje">';
        $r.= '<div class = "ui-state-highlight ui-corner-all">';
        $r.= '<span class = "ui-icon ui-icon-check"></span>';
        $r.= '<span>' . $msj . '</span>';
        $r.= '</div>';
        $r.= '</div>';
        return $r;
    }

}

/* End of file MY_html_helper.php */
/* Location: ./aplicarion/helpers/MY_html_helper.php */