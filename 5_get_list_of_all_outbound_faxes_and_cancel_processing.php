// get all recent faxes
$faxes = $interfax->outbound->recent();

// cancel all processing faxes
foreach ($faxes as $fax) {
  if ($fax->status < 0) {
    $fax->cancel();
  }
}
