<?php
/**
 * EventCreateRobot
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * EventCreateRobot Class Doc Comment
 *
 * @category    Class
 * @description An event signaling to the UI, the creation of a Robot. eventType is 1.
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EventCreateRobot extends Event implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'event_type' => 'Number',
        'robot' => '\Swagger\Client\Model\RobotInfo',
        'name' => 'string',
        'color' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'event_type' => 'eventType',
        'robot' => 'robot',
        'name' => 'name',
        'color' => 'color'
    );
  
    static function attributeMap() {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'event_type' => 'setEventType',
        'robot' => 'setRobot',
        'name' => 'setName',
        'color' => 'setColor'
    );
  
    static function setters() {
        return parent::setters() + self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'event_type' => 'getEventType',
        'robot' => 'getRobot',
        'name' => 'getName',
        'color' => 'getColor'
    );
  
    static function getters() {
        return parent::getters() + self::$getters;
    }

    
    /**
      * $event_type tag 1
      * @var Number
      */
    protected $event_type;
    
    /**
      * $robot 
      * @var \Swagger\Client\Model\RobotInfo
      */
    protected $robot;
    
    /**
      * $name Human readable name for the robot.
      * @var string
      */
    protected $name;
    
    /**
      * $color A color assigned to the robot.
      * @var string
      */
    protected $color;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);
        if ($data != null) {
            $this->event_type = $data["event_type"];
            $this->robot = $data["robot"];
            $this->name = $data["name"];
            $this->color = $data["color"];
        }
    }
    
    /**
     * Gets event_type
     * @return Number
     */
    public function getEventType()
    {
        return $this->event_type;
    }
  
    /**
     * Sets event_type
     * @param Number $event_type tag 1
     * @return $this
     */
    public function setEventType($event_type)
    {
        
        $this->event_type = $event_type;
        return $this;
    }
    
    /**
     * Gets robot
     * @return \Swagger\Client\Model\RobotInfo
     */
    public function getRobot()
    {
        return $this->robot;
    }
  
    /**
     * Sets robot
     * @param \Swagger\Client\Model\RobotInfo $robot 
     * @return $this
     */
    public function setRobot($robot)
    {
        
        $this->robot = $robot;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name Human readable name for the robot.
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
  
    /**
     * Sets color
     * @param string $color A color assigned to the robot.
     * @return $this
     */
    public function setColor($color)
    {
        
        $this->color = $color;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}