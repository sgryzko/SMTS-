require_once ( 'vendor/autoload.php' );

use com\realexpayments\hpp\sdk\domain\HppResponse;
use com\realexpayments\hpp\sdk\RealexHpp;

$realexHpp = new RealexHpp( "mySecret" );
$hppResponse = $realexHpp->responseFromJson( responseJson );

