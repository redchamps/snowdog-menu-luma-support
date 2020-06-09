<?php
namespace RedChamps\SnowDogMenuLumaSupport\Plugin;

class AbstractNode
{
    /**
     * Appending the "level-top" class to the menu links.
     * @param \Snowdog\Menu\Block\NodeType\AbstractNode $subject
     * @param $result
     * @param $method
     * @return string
     */
    public function after__call(\Snowdog\Menu\Block\NodeType\AbstractNode $subject, $result, $method)
    {
        if ($method == 'setMenuClass' && $subject->getData('is_root')) {
            $result->setData(
                "menu_class",
                $result->getData('menu_class') . ' level-top '
            );
        }
        return $result;
    }
}
