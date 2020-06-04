<?php
namespace RedChamps\SnowDogMenuLumaSupport\Plugin;

class Menu
{
    /**
     * Return customized phtml file
     * @param \Snowdog\Menu\Block\Menu $subject
     */
    public function beforeToHtml(\Snowdog\Menu\Block\Menu $subject)
    {
        if ($subject->getTemplate() == 'Snowdog_Menu::menu.phtml') {
            $subject->setTemplate("RedChamps_SnowDogMenuLumaSupport::menu.phtml");
        }
    }

    /**
     * Append "submenu" class to the navigation child menu
     * @param \Snowdog\Menu\Block\Menu $subject
     * @param array $array
     * @return array[]
     */
    public function beforeBuildAttrFromArray(\Snowdog\Menu\Block\Menu $subject, array $array)
    {
        if (isset($array['data-menu'])) {
            $array['class'][0].=" submenu";
        }
        return [$array];
    }

    /**
     * By default "View All" link is visible with every dropdown menu and it is not manageable from admin.
     * Setting it's default value false
     * @param \Snowdog\Menu\Block\Menu $subject
     * @param $result
     * @return bool
     */
    public function afterIsViewAllLinkAllowed(\Snowdog\Menu\Block\Menu $subject, $result)
    {
        return false;
    }
}
