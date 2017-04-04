$fax = $interfax->deliver([
  'faxNumber' => '+11111111112',
  'file' => 'path/to/fax.pdf'
]);

// wait for the fax to send
// successfully
while(true) {
  // reload the fax data
  $fax = $fax->refresh();
  // sleep if pending
  if ($fax->status < 0) {
    sleep(10);
  } else {
    if ($fax->status == 0) {
      print "Sent!";
    } else {
      print "Error: ".$fax->status;
    }
    break;
  }
}
