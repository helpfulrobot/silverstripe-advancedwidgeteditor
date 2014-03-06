<?php
class AdvancedWidgetFormShiv {
    /**
     * @var AdvancedWidgetAreaEditor
     */
    private $_widgetEditor;
    
    /**
     * @var Widget
     */
    private $_widget;
    
    public $Validator=false;
    
    /**
     * Constructor
     * @param {AdvancedWidgetAreaEditor} $widgetEditor Widget editor to be bound to
     * @param {Widget} $widget Source widget
     */
    public function __construct(AdvancedWidgetAreaEditor $widgetEditor, Widget $widget) {
        $this->_widgetEditor=$widgetEditor;
        $this->_widget=$widget;
    }
    
    /**
     * Wrapper for getting the form name
     * @return {string} Name of the form or boolean false
     */
    public function FormName() {
        return ($this->_widgetEditor->getForm() ? $this->_widgetEditor->getForm()->FormName():false);
    }
    
    /**
     * Gets the current record
     * @return {Widget} Current widget
     */
    public function getRecord() {
        return $this->_widget;
    }
    
    /**
     * Wrapper for getting the form's controller
     * @return {Controller} Form's controller or boolean false
     */
    public function Controller() {
        return ($this->_widgetEditor->getForm() ? $this->_widgetEditor->getForm()->Controller():false);
    }
    
    /**
     * Gets the link to the widget editor plus the widgets class name
     * @return {string} Link to the widget editor plus the widgets class name
     */
    public function FormAction() {
        return Controller::join_links($this->_widgetEditor->Link('field'), $this->_widget->ClassName, '');
    }
    
    /**
     * Wrapper for getting the form's security token
     * @return {SecurityToken} Form's security token or null
     */
    public function getSecurityToken() {
        return ($this->_widgetEditor->getForm() ? $this->_widgetEditor->getForm()->getSecurityToken():null);
    }
}
?>