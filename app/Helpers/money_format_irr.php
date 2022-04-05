<?php

if (!function_exists('money_format_irr')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function money_format_irr($money)
    {
        $nf = new \NumberFormatter('en_US', \NumberFormatter::CURRENCY);
        return ($money<0?"-":"").mb_substr(str_replace('IRR','',$nf->formatCurrency( $money,'IRR')),1);
    }
}
