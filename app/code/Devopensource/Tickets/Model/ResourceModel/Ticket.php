<?php
/**
 * @category Devopensource
 * @package Devopensource_Tickets
 * @author Jose Ruzafa <jose.ruzafa@devopensource.com>
 * @version 1.0.0
 * @copyright Copyright (c) 2016 Devopensource
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
namespace Devopensource\Tickets\Model\ResourceModel;

class Ticket extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Initialize resource model
     * Get table name from config
     *
     * @return void
     */

    protected function _construct()
    {

        $this->_init('devopensource_tickets_ticket', 'ticket_id');

    }

}