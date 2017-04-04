$fax_id = '12345';
// retrieve the fax
$fax = $interfax->inbound->find($fax_id);
// check the status
$fax->imageStatus;
// check the number of pages
$fax->pages;
