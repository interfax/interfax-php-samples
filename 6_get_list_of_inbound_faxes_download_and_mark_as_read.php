// get all unread faxes
$faxes = $interfax->inbound->incoming([
  'unreadOnly' => true
]);

foreach ($faxes as $fax) {
  // save the fax image
  $image = $fax->image();
  $image->save($fax->messageId.'.pdf');
  // mark as read
  $fax->markRead();
}
