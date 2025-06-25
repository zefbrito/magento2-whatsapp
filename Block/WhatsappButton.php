<?php
namespace Zefbrito\Whatsapp\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\ScopeInterface;

class WhatsappButton extends Template
{
    
    /**
     * Constructor
     *
     * @param Context $context
     * @param array $data
     */
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    /**
     * Check if WhatsApp module is enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->_scopeConfig->isSetFlag(
            'whatsapp/general/enabled',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get WhatsApp phone number configuration
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->_scopeConfig->getValue(
            'whatsapp/general/phone_number',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get WhatsApp default message configuration
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->_scopeConfig->getValue(
            'whatsapp/general/message',
            ScopeInterface::SCOPE_STORE
        );
    }
    
    /**
     * Get WhatsApp button position configuration
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->_scopeConfig->getValue(
            'whatsapp/general/position',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get WhatsApp button text configuration
     *
     * @return string
     */
    public function getButtonText()
    {
        return $this->_scopeConfig->getValue(
            'whatsapp/appearance/button_text',
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get WhatsApp button color configuration
     *
     * @return string
     */
    public function getButtonColor()
    {
        return $this->_scopeConfig->getValue(
            'whatsapp/appearance/button_color',
            ScopeInterface::SCOPE_STORE
        );
    }
    
    /**
     * Generate WhatsApp Web URL with phone number and message
     *
     * @return string
     */
    public function getWhatsappUrl()
    {
        $phone = $this->getPhoneNumber();
        $message = $this->getMessage();
        
        $cleanPhone = trim($phone);
        if (!str_starts_with($cleanPhone, '+')) {
            $cleanPhone = '+' . $cleanPhone;
        }
        
        $encodedMessage = urlencode($message);
        
        return "https://web.whatsapp.com/send?phone={$cleanPhone}&text={$encodedMessage}";
    }
}