<?php

namespace TESTBOT\includes;
use TESTBOT\assets\EventSourceType;
use TESTBOT\assets\InvalidEventSourceException;






switch ($message['text']){

    case 'A':
    echo getUserId(['source']['userId'])

    default:
    #code
    break;

}





class BaseEvent
{
    /** @var array */
    protected $event;
    /**
     * BaseEvent constructor.
     *
     * @param array $event
     */
    public function __construct($event)
    {
        $this->event = $event;
    }
    /**
     * Returns event type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->event['type'];
    }
    /**
     * Returns timestamp of the event.
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->event['timestamp'];
    }
    /**
     * Returns reply token of the event.
     *
     * @return string|null
     */
    public function getReplyToken()
    {
        return isset($this->event['replyToken']) ? $this->event['replyToken'] : null;
    }
    /**
     * Returns the event is user's one or not.
     *
     * @return bool
     */
    public function isUserEvent()
    {
        return $this->event['source']['type'] === EventSourceType::USER;
    }
    /**
     * Returns the event is group's one or not.
     *
     * @return bool
     */
    public function isGroupEvent()
    {
        return $this->event['source']['type'] === EventSourceType::GROUP;
    }
    /**
     * Returns the event is room's one or not.
     *
     * @return bool
     */
    public function isRoomEvent()
    {
        return $this->event['source']['type'] === EventSourceType::ROOM;
    }
    /**
     * Returns the event is unknown or not.
     *
     * @return bool
     */
    public function isUnknownEvent()
    {
        return !($this->isUserEvent() || $this->isGroupEvent() || $this->isRoomEvent());
    }
    /**
     * Returns user ID of the event.
     *
     * @return string|null
     */
    public function getUserId()
    {
        return isset($this->event['source']['userId'])
            ? $this->event['source']['userId']
            : null;
    }
    /**
     * Returns group ID of the event.
     *
     * @return string|null
     * @throws InvalidEventSourceException Raise when called with non group type event.
     */
    public function getGroupId()
    {
        if (!$this->isGroupEvent()) {
            throw new InvalidEventSourceException('This event source is not a group type');
        }
        return isset($this->event['source']['groupId'])
            ? $this->event['source']['groupId']
            : null;
    }
    /**
     * Returns room ID of the event.
     *
     * @return string|null
     * @throws InvalidEventSourceException Raise when called with non room type event.
     */
    public function getRoomId()
    {
        if (!$this->isRoomEvent()) {
            throw new InvalidEventSourceException('This event source is not a room type');
        }
        return isset($this->event['source']['roomId'])
            ? $this->event['source']['roomId']
            : null;
    }
    /**
     * Returns the identifier of the event source that associated with event source type
     * (i.e. userId, groupId or roomId).
     *
     * @return null|string
     * @throws InvalidEventSourceException
     */
    public function getEventSourceId()
    {
        if ($this->isUserEvent()) {
            return $this->getUserId();
        }
        if ($this->isGroupEvent()) {
            return $this->getGroupId();
        }
        if ($this->isRoomEvent()) {
            return $this->getRoomId();
        }
        # Unknown event
        return null;
    }
}