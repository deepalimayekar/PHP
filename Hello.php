namespace Drupal\hello\Controller
use Drupal\Core\Controller\ControllerBase


class HelloController extends ControllerBase
{

public function content(){
return array ( 
'#type' => 'markup',
'#markup' => t('HelloWorld'),
);
}

}