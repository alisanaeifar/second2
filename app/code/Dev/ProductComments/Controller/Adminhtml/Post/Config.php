<?php
declare(strict_types=1);
namespace Dev\ProductComments\Controller\Adminhtml\Post;
use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Config extends Action
{
    /**
     * @return ResponseInterface|ResultInterface|void
     */
    public function execute()
    {
        echo $result = "
        </br>
        Do You Wanna Enable The Form?
        </br>
        <form action=\"#\" method=\"post\">
        <select name=\"formConfiguration\">         
          <option value=\"0\">Disable</option>
          <option value=\"1\">Enable</option>
        </select>
        </br>
        <input type=\"submit\" value=\"Send Config informations\">
        </form>
        </p>
        ";
    }

}
