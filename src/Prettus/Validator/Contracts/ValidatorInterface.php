<?php namespace Prettus\Validator\Contracts;

use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Interface ValidatorInterface
 * @package Prettus\Validator\Contracts
 */
interface ValidatorInterface {

    const RULE_CREATE = 'create';
    const RULE_UPDATE = 'update';

    /**
     * Set Id
     *
     * @param $id
     * @return $this
     */
    public function setId($id);

    /**
     * With
     *
     * @param array
     * @return $this
     */
    public function with(array $input);

    /**
     * Pass the data and the rules to the validator
     *
     * @param string $action
     * @return boolean
     */
    public function passes( $action = null );


    /**
     * Pass the data and the rules to the validator or throws ValidatorException
     *
     * @throws ValidatorException
     * @param string $action
     * @return boolean
     */
    public function passesOrFail( $action = null );

    /**
     * Errors
     *
     * @return array
     */
    public function errors();
}