<?
$mybday = new DateTime(filter_input(INPUT_POST, 'bday'));
$today = new DateTime();
$diff = $today->diff($mybday);
echo $diff->format("%a days");
?>
