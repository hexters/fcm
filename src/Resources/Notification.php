<?php

namespace NotificationChannels\Fcm\Resources;

class Notification implements FcmResource
{
    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $body;

    /**
     * @var string|null
     */
    protected $icon;

    /**
     * @var string|null
     */
    protected $action;

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return Notification
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string|null $body
     * @return Notification
     */
    public function setBody(?string $body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @param string|null $icon
     * @return Notification
     */
    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @param string|null $action
     * @return Notification
     */
    public function setAction(?string $action): self
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return static
     */
    public static function create(): self
    {
        return new self;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return [
            'title' => $this->getTitle(),
            'body' => $this->getBody(),
            'icon' => $this->getIcon(),
            'click_action' => $this->getAction()
        ];
    }
}
