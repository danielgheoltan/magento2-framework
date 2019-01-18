<?php
namespace DG\Framework\Plugin\Element\Html\Link;

class Current
{
    /**
     * @param \Magento\Framework\View\Element\Html\Link\Current $subject
     * @return \Magento\Framework\View\Element\Html\Link\Current
     */
    public function aroundIsCurrent(\Magento\Framework\View\Element\Html\Link\Current $subject)
    {
        return $subject;
    }
}