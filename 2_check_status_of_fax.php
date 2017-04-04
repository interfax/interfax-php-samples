// given an InterFAX fax ID
$fax_id = '12345';
// retrieve the fax
$fax = $interfax->outbound->find($fax_id);
// check the status
$fax->status;
