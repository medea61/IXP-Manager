<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PatchPanelPort extends \Entities\PatchPanelPort implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'id', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'description', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'number', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'state', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'colo_circuit_ref', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'ticket_ref', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'notes', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'assigned_at', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'connected_at', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'cease_requested_at', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'ceased_at', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'last_state_change', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'internal_use', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'chargeable', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'switchPort', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'patchPanelPortHistory', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'patchPanel', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'customer', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'duplexSlavePorts', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'duplexMasterPort', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'patchPanelPortFiles', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'private_notes', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'owned_by', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'loa_code'];
        }

        return ['__isInitialized__', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'id', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'description', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'number', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'state', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'colo_circuit_ref', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'ticket_ref', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'notes', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'assigned_at', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'connected_at', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'cease_requested_at', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'ceased_at', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'last_state_change', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'internal_use', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'chargeable', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'switchPort', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'patchPanelPortHistory', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'patchPanel', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'customer', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'duplexSlavePorts', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'duplexMasterPort', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'patchPanelPortFiles', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'private_notes', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'owned_by', '' . "\0" . 'Entities\\PatchPanelPort' . "\0" . 'loa_code'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PatchPanelPort $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \Entities\PatchPanelPort
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumber($number)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumber', [$number]);

        return parent::setNumber($number);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumber', []);

        return parent::getNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrefix', []);

        return parent::getPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', [$state]);

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function getStateCssClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStateCssClass', []);

        return parent::getStateCssClass();
    }

    /**
     * {@inheritDoc}
     */
    public function setColoCircuitRef($colo_circuit_ref): \Entities\PatchPanelPort
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColoCircuitRef', [$colo_circuit_ref]);

        return parent::setColoCircuitRef($colo_circuit_ref);
    }

    /**
     * {@inheritDoc}
     */
    public function getColoCircuitRef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColoCircuitRef', []);

        return parent::getColoCircuitRef();
    }

    /**
     * {@inheritDoc}
     */
    public function setTicketRef($ticket_ref): \Entities\PatchPanelPort
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTicketRef', [$ticket_ref]);

        return parent::setTicketRef($ticket_ref);
    }

    /**
     * {@inheritDoc}
     */
    public function getTicketRef()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTicketRef', []);

        return parent::getTicketRef();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotes($notes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotes', [$notes]);

        return parent::setNotes($notes);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotes', []);

        return parent::getNotes();
    }

    /**
     * {@inheritDoc}
     */
    public function getNotesParseDown()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotesParseDown', []);

        return parent::getNotesParseDown();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssignedAt($assignedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssignedAt', [$assignedAt]);

        return parent::setAssignedAt($assignedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssignedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssignedAt', []);

        return parent::getAssignedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getAssignedAtFormated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssignedAtFormated', []);

        return parent::getAssignedAtFormated();
    }

    /**
     * {@inheritDoc}
     */
    public function setConnectedAt($connectedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConnectedAt', [$connectedAt]);

        return parent::setConnectedAt($connectedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getConnectedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConnectedAt', []);

        return parent::getConnectedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getConnectedAtFormated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConnectedAtFormated', []);

        return parent::getConnectedAtFormated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCeaseRequestedAt($ceaseRequestedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCeaseRequestedAt', [$ceaseRequestedAt]);

        return parent::setCeaseRequestedAt($ceaseRequestedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCeaseRequestedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeaseRequestedAt', []);

        return parent::getCeaseRequestedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getCeaseRequestedAtFormated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeaseRequestedAtFormated', []);

        return parent::getCeaseRequestedAtFormated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCeasedAt($ceasedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCeasedAt', [$ceasedAt]);

        return parent::setCeasedAt($ceasedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCeasedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeasedAt', []);

        return parent::getCeasedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getCeasedAtFormated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeasedAtFormated', []);

        return parent::getCeasedAtFormated();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastStateChange($lastStateChange)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastStateChange', [$lastStateChange]);

        return parent::setLastStateChange($lastStateChange);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastStateChange()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastStateChange', []);

        return parent::getLastStateChange();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastStateChangeFormated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastStateChangeFormated', []);

        return parent::getLastStateChangeFormated();
    }

    /**
     * {@inheritDoc}
     */
    public function setInternalUse($internalUse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInternalUse', [$internalUse]);

        return parent::setInternalUse($internalUse);
    }

    /**
     * {@inheritDoc}
     */
    public function getInternalUse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInternalUse', []);

        return parent::getInternalUse();
    }

    /**
     * {@inheritDoc}
     */
    public function setChargeable($chargeable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChargeable', [$chargeable]);

        return parent::setChargeable($chargeable);
    }

    /**
     * {@inheritDoc}
     */
    public function getChargeable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChargeable', []);

        return parent::getChargeable();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrivateNotes($privateNotes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrivateNotes', [$privateNotes]);

        return parent::setPrivateNotes($privateNotes);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrivateNotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrivateNotes', []);

        return parent::getPrivateNotes();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrivateNotesParseDown()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrivateNotesParseDown', []);

        return parent::getPrivateNotesParseDown();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwnedBy($ownedBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwnedBy', [$ownedBy]);

        return parent::setOwnedBy($ownedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwnedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnedBy', []);

        return parent::getOwnedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function getLoaCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoaCode', []);

        return parent::getLoaCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoaCode(string $loa_code): \Entities\PatchPanelPort
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoaCode', [$loa_code]);

        return parent::setLoaCode($loa_code);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSwitchPort(\Entities\SwitchPort $switchPort = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSwitchPort', [$switchPort]);

        return parent::setSwitchPort($switchPort);
    }

    /**
     * {@inheritDoc}
     */
    public function getSwitchPort()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSwitchPort', []);

        return parent::getSwitchPort();
    }

    /**
     * {@inheritDoc}
     */
    public function getSwitchPortId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSwitchPortId', []);

        return parent::getSwitchPortId();
    }

    /**
     * {@inheritDoc}
     */
    public function getSwitchPortName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSwitchPortName', []);

        return parent::getSwitchPortName();
    }

    /**
     * {@inheritDoc}
     */
    public function getHasSwitchPort(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHasSwitchPort', []);

        return parent::getHasSwitchPort();
    }

    /**
     * {@inheritDoc}
     */
    public function getPhysicalInterfaceState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhysicalInterfaceState', []);

        return parent::getPhysicalInterfaceState();
    }

    /**
     * {@inheritDoc}
     */
    public function getPhysicalInterfaceStateLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhysicalInterfaceStateLabel', []);

        return parent::getPhysicalInterfaceStateLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function addPatchPanelPortHistory(\Entities\PatchPanelPortHistory $patchPanelPortHistory)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPatchPanelPortHistory', [$patchPanelPortHistory]);

        return parent::addPatchPanelPortHistory($patchPanelPortHistory);
    }

    /**
     * {@inheritDoc}
     */
    public function removePatchPanelPortHistory(\Entities\PatchPanelPortHistory $patchPanelPortHistory)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePatchPanelPortHistory', [$patchPanelPortHistory]);

        return parent::removePatchPanelPortHistory($patchPanelPortHistory);
    }

    /**
     * {@inheritDoc}
     */
    public function getPatchPanelPortHistory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPatchPanelPortHistory', []);

        return parent::getPatchPanelPortHistory();
    }

    /**
     * {@inheritDoc}
     */
    public function getPatchPanelPortHistoryMaster()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPatchPanelPortHistoryMaster', []);

        return parent::getPatchPanelPortHistoryMaster();
    }

    /**
     * {@inheritDoc}
     */
    public function getMasterHistoryCount(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMasterHistoryCount', []);

        return parent::getMasterHistoryCount();
    }

    /**
     * {@inheritDoc}
     */
    public function addDuplexSlavePort(\Entities\PatchPanelPort $duplexSlavePort)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDuplexSlavePort', [$duplexSlavePort]);

        return parent::addDuplexSlavePort($duplexSlavePort);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDuplexSlavePort(\Entities\PatchPanelPort $duplexSlavePort)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDuplexSlavePort', [$duplexSlavePort]);

        return parent::removeDuplexSlavePort($duplexSlavePort);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuplexSlavePorts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuplexSlavePorts', []);

        return parent::getDuplexSlavePorts();
    }

    /**
     * {@inheritDoc}
     */
    public function hasSlavePort(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasSlavePort', []);

        return parent::hasSlavePort();
    }

    /**
     * {@inheritDoc}
     */
    public function getDuplexSlavePort()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuplexSlavePort', []);

        return parent::getDuplexSlavePort();
    }

    /**
     * {@inheritDoc}
     */
    public function getDuplexSlavePortName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuplexSlavePortName', []);

        return parent::getDuplexSlavePortName();
    }

    /**
     * {@inheritDoc}
     */
    public function getDuplexSlavePortId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuplexSlavePortId', []);

        return parent::getDuplexSlavePortId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuplexMasterPort(\Entities\PatchPanelPort $duplexMasterPort = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuplexMasterPort', [$duplexMasterPort]);

        return parent::setDuplexMasterPort($duplexMasterPort);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuplexMasterPort()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuplexMasterPort', []);

        return parent::getDuplexMasterPort();
    }

    /**
     * {@inheritDoc}
     */
    public function setPatchPanel(\Entities\PatchPanel $patchPanel = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPatchPanel', [$patchPanel]);

        return parent::setPatchPanel($patchPanel);
    }

    /**
     * {@inheritDoc}
     */
    public function getPatchPanel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPatchPanel', []);

        return parent::getPatchPanel();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomer(\Entities\Customer $customer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomer', [$customer]);

        return parent::setCustomer($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', []);

        return parent::getCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerId', []);

        return parent::getCustomerId();
    }

    /**
     * {@inheritDoc}
     */
    public function getSwitchId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSwitchId', []);

        return parent::getSwitchId();
    }

    /**
     * {@inheritDoc}
     */
    public function getSwitchName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSwitchName', []);

        return parent::getSwitchName();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerName', []);

        return parent::getCustomerName();
    }

    /**
     * {@inheritDoc}
     */
    public function isAvailableForUse(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAvailableForUse', []);

        return parent::isAvailableForUse();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuplexPort(\Entities\PatchPanelPort $duplexPort, $newSlavePort)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuplexPort', [$duplexPort, $newSlavePort]);

        return parent::setDuplexPort($duplexPort, $newSlavePort);
    }

    /**
     * {@inheritDoc}
     */
    public function resolveStates(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resolveStates', []);

        return parent::resolveStates();
    }

    /**
     * {@inheritDoc}
     */
    public function resolveChargeable(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resolveChargeable', []);

        return parent::resolveChargeable();
    }

    /**
     * {@inheritDoc}
     */
    public function resolveOwnedBy(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resolveOwnedBy', []);

        return parent::resolveOwnedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerForASwitchPort(): \Entities\Customer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerForASwitchPort', []);

        return parent::getCustomerForASwitchPort();
    }

    /**
     * {@inheritDoc}
     */
    public function isDuplexPort(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDuplexPort', []);

        return parent::isDuplexPort();
    }

    /**
     * {@inheritDoc}
     */
    public function hasFiles(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasFiles', []);

        return parent::hasFiles();
    }

    /**
     * {@inheritDoc}
     */
    public function hasPublicFiles(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPublicFiles', []);

        return parent::hasPublicFiles();
    }

    /**
     * {@inheritDoc}
     */
    public function resetPatchPanelPort(): \Entities\PatchPanelPort
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetPatchPanelPort', []);

        return parent::resetPatchPanelPort();
    }

    /**
     * {@inheritDoc}
     */
    public function addPatchPanelPortFile(\Entities\PatchPanelPortFile $patchPanelPortFile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPatchPanelPortFile', [$patchPanelPortFile]);

        return parent::addPatchPanelPortFile($patchPanelPortFile);
    }

    /**
     * {@inheritDoc}
     */
    public function removePatchPanelPortFile(\Entities\PatchPanelPortFile $patchPanelPortFile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePatchPanelPortFile', [$patchPanelPortFile]);

        return parent::removePatchPanelPortFile($patchPanelPortFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getPatchPanelPortFiles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPatchPanelPortFiles', []);

        return parent::getPatchPanelPortFiles();
    }

    /**
     * {@inheritDoc}
     */
    public function getPatchPanelPortPublicFiles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPatchPanelPortPublicFiles', []);

        return parent::getPatchPanelPortPublicFiles();
    }

    /**
     * {@inheritDoc}
     */
    public function isStateAvailable(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStateAvailable', []);

        return parent::isStateAvailable();
    }

    /**
     * {@inheritDoc}
     */
    public function isStateAwaitingXConnect(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStateAwaitingXConnect', []);

        return parent::isStateAwaitingXConnect();
    }

    /**
     * {@inheritDoc}
     */
    public function isStateConnected(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStateConnected', []);

        return parent::isStateConnected();
    }

    /**
     * {@inheritDoc}
     */
    public function isStateAwaitingCease(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStateAwaitingCease', []);

        return parent::isStateAwaitingCease();
    }

    /**
     * {@inheritDoc}
     */
    public function isStateCeased(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStateCeased', []);

        return parent::isStateCeased();
    }

    /**
     * {@inheritDoc}
     */
    public function isStateBroken(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStateBroken', []);

        return parent::isStateBroken();
    }

    /**
     * {@inheritDoc}
     */
    public function isStateReserved(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStateReserved', []);

        return parent::isStateReserved();
    }

    /**
     * {@inheritDoc}
     */
    public function isStatePrewired(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStatePrewired', []);

        return parent::isStatePrewired();
    }

    /**
     * {@inheritDoc}
     */
    public function isStateOther(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStateOther', []);

        return parent::isStateOther();
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(bool $deep = false): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', [$deep]);

        return parent::toArray($deep);
    }

    /**
     * {@inheritDoc}
     */
    public function jsonArray(bool $deep = false): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonArray', [$deep]);

        return parent::jsonArray($deep);
    }

    /**
     * {@inheritDoc}
     */
    public function json(bool $deep = false): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'json', [$deep]);

        return parent::json($deep);
    }

    /**
     * {@inheritDoc}
     */
    public function getCircuitReference(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCircuitReference', []);

        return parent::getCircuitReference();
    }

}
