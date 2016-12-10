<?php

	require_once("configs/config.php");
	$smarty = new smarty;
	$html_output = "";
	$html_output = '<tbody>';
    $html_output .= '<tr>';

    $count = 1;
    $rs = $db ->query( 'SELECT * FROM error_feedback ORDER BY error_code ASC');
    while($row = $rs->fetch() ){
        $html_output .= "<tr><td> $count </td>
        				<td>$row[0]</td>
        				<td>$row[1]</td>
        				<td>$row[2]</td>
        				<td>". nl2br($row[3])." <hr> ". nl2br($row[4])." <hr> ".nl2br($row[5])."</td>
                        <td>". nl2br($row[6])." <hr> ". nl2br($row[7])." <hr> ".nl2br($row[8])."</td>
                        <td>". nl2br($row[9])." <hr> ". nl2br($row[10])." <hr> ".nl2br($row[11])."</td>
                        <td>". nl2br($row[12])." <hr> ". nl2br($row[13])." <hr> ".nl2br($row[14])."</td>
        ";
        $count++;
            
     }
    $html_output .= '</tr>';
    $html_output .= '</tbody>';

    $smarty->assign("html_output", $html_output);
	
	$smarty->display("OV_feedback_showAll.tpl");
?>