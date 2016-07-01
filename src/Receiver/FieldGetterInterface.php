<?php

namespace RonRademaker\Mailer\Receiver;

/**
 * The determiner class is used to determine the receivers of a confirmation.
 *
 * @author  Jaap Romijn
 **/
interface FieldGetterInterface
{
    /**
     * Returns true if this getter supports this field/object.
     *
     * @param mixed  $object
     * @param string $getter
     *
     * @return bool
     */
    public function handles($object, $getter);

    /**
     * Retrieves a value from an object, but sometimes the getter refers to an object and other functions are needed to retreive that actual object.
     * For instance a getter of a Mongo object will return the reference instead of the actual object. Tulip requires a special getInstance getter.
     * This function can be used to bridge these disparities.
     *
     *
     * @param stdClass $object
     * @param string   $getter
     *
     * @return mixed
     **/
    public function retrieveValue($object, $getter);
}
