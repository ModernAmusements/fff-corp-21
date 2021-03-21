<?php

class WorkPage extends Page
{
    public function cover()
    {
        return $this->images()->findBy('template', 'work-cover') ?? $this->image();
    }
}

