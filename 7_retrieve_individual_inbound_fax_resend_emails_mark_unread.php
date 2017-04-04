// given an InterFAX fax ID
$fax_id = '301854124';
// retrieve the fax
$fax = $interfax->inbound->find($fax_id);
// resend the email
$fax->resend();
// mark as unread
$fax->markUnread();
