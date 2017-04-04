// read the file to send
$stream = fopen('test.pdf', 'rb');

// create a new InterFAX Document
$document = $interfax->documents->create(
  'test.pdf',
  filesize('test.pdf')
);

// upload each chunk
$current = 0;
while (!feof($stream)) {
    $chunk = fread($stream, 500);
    $end = $current + strlen($chunk);
    // upload a specific chunk
    echo ".";
    $document->upload($current, $end-1, $chunk);
    $current = $end;
}
fclose($stream);

// send the fax
$interfax->deliver([
  // a valid fax number
  'faxNumber' => '+11111111112',
  // the document URI
  'file' => $document->getHeaderLocation()
]);
