<?php
namespace RedChamps\SnowDogMenuLumaSupport\Plugin;

class CustomUrl
{
    /**
     * Appendig the "level-top" class to the menu links.
     * @param \Snowdog\Menu\Block\NodeType\CustomUrl $subject
     * @param $result
     * @param $method
     * @return string
     */
    public function after__call (\Snowdog\Menu\Block\NodeType\CustomUrl $subject, $result, $method) {
        if ($method == 'getMenuClass') {
            $result .= ' level-top ';
        }
        return $result;
    }
}
