<?php

declare(strict_types=1);

namespace App\Acme;


class Post
{
    private function isDiff(): bool
    {
        if (count($this->getDiffUsers()) === 1) {
            return true;
        }

        return false;
    }

    private function getDiffUsers(): array
    {
        return array_intersect($_POST, $this->getUsers());
    }

    private function getUsers(): array
    {
        return array(
            'z0r0v' => '123',
            'Alex' => '321'
        );
    }

    public function getMessage(): string
    {
        if (!$this->isDiff()) {
            return "User is not valid";
        }

        return "User is valid";
    }

    public function getColor(): string
    {
        if (!$this->isDiff()) {
            return "red";
        }

        return "green";
    }

}