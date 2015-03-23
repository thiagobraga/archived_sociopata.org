<?php

/**
 * [monthName description]
 *
 * @return [type] [description]
 */
function monthName($month, $abbr = false)
{
    switch ($month) {
        case  1: $month = 'Janeiro'; break;
        case  2: $month = 'Fevereiro'; break;
        case  3: $month = 'Março'; break;
        case  4: $month = 'Abril'; break;
        case  5: $month = 'Maio'; break;
        case  6: $month = 'Junho'; break;
        case  7: $month = 'Julho'; break;
        case  8: $month = 'Agosto'; break;
        case  9: $month = 'Setembro'; break;
        case 10: $month = 'Outubro'; break;
        case 11: $month = 'Novembro'; break;
        case 12: $month = 'Dezembro'; break;
    }

    if ($abbr) {
        $month = abbrMonthName($month);
    }

    return $month;
}

/**
 * Return the abbreviated name of the month.
 *
 * @param   {String}  $month  The month name.
 * @return  {String}          The month name formatted.
 */
function abbrMonthName($month)
{
    $month = substr($month, 0, 3);
    return $month;
}

/* End of file utility_helper.php */
/* Location: ./app/helpers/utility_helper.php */
