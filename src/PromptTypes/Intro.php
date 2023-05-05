<?php

namespace Terminalia\PromptTypes;

use Terminalia\Enums\BlockSymbols;
use Terminalia\Helpers\WritesOutput;
use Symfony\Component\Console\Style\OutputStyle;

class Intro
{
    use WritesOutput;

    protected bool $answer;

    public function __construct(
        protected OutputStyle $output,
        protected string $text,
    ) {
        $this->registerStyles();
    }

    public function display(): void
    {
        $this->output->newLine();
        $this->writeInactiveBlock("<intro> {$this->text} </intro>", BlockSymbols::START);
    }
}
