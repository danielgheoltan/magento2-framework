<?php
namespace DG\Framework\Plugin\View\Element\Html\Link;

class CurrentPlugin
{
    /**
     * afterIsCurrent
     *
     * @param \Magento\Framework\View\Element\Html\Link\Current $subject
     * @param $result
     * @return bool
     */
    public function afterIsCurrent(\Magento\Framework\View\Element\Html\Link\Current $subject, $result)
    {
        $currentPageUrl = $subject->getUrl('*/*/*', ['_current' => true, '_use_rewrite' => true, '_query' => '']);
        $href = rtrim($subject->getHref(), '/');

        return ($currentPageUrl == $href) || $result;
    }
}

