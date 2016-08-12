<?php

/* * **********************************
 * Purpose : Date formate and some other functions
 * Author : Suresh
 * Company : Logistiks
 * Description : In the helper we are implementing date formate and ..
 * Created At : 10th Aug 2016
 * 
 *
 */

function dateFormateToDMY($originalDate) {
    return date("d/m/Y", strtotime($originalDate));
}

