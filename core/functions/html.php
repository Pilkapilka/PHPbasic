<?php

/**
 *funkcija generuojanti formos atributus
 * @param array $attr
 * @return string
 */
function html_attr(array $attr): string
{
    $attributes = '';

    foreach ($attr as $index => $value) {
        $attributes .= "$index=\"$value\" ";
    }

    return $attributes;
}
