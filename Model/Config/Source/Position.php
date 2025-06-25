<?php
namespace Zefbrito\Whatsapp\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Position implements OptionSourceInterface
{
    const POSITION_TOP_LEFT = 'top-left';
    const POSITION_TOP_RIGHT = 'top-right';
    const POSITION_BOTTOM_LEFT = 'bottom-left';
    const POSITION_BOTTOM_RIGHT = 'bottom-right';


    /**
     * extend toOptionArray()
     *
     * @return void
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::POSITION_TOP_LEFT, 'label' => __('Top Left')],
            ['value' => self::POSITION_TOP_RIGHT, 'label' => __('Top Right')],
            ['value' => self::POSITION_BOTTOM_LEFT, 'label' => __('Bottom Left')],
            ['value' => self::POSITION_BOTTOM_RIGHT, 'label' => __('Bottom Right')]
        ];
    }
}