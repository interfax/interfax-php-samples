require __DIR__ . '/vendor/autoload.php';
use Interfax\Client;

$interfax = new Client([
  'username' => 'username',
  'password' => 'password'
]);
