<?php

declare(strict_types=1);

namespace Src\Builder;

class Director
{
    public function __construct(private Builder $builder)
    {
    }

    public function build(): void
    {
        $this->builder->makeTitle('Greeting');
        $this->builder->makeString('一般的なあいさつ');
        $this->builder->makeItems(['How are you?', 'Hello.', 'Hi.']);
        $this->builder->makeString('時間帯に応じたあいさつ');
        $this->builder->makeItems(['Good morning.', 'Good afternoon.', 'Good evening']);
        $this->builder->close();
    }
}
