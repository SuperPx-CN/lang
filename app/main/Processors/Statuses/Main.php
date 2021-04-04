<?php

namespace LaravelLang\Lang\Processors\Statuses;

use LaravelLang\Lang\Contracts\Stringable;
use LaravelLang\Lang\Services\Compilers\Status;

class Main extends Processor
{
    protected function saving(): void
    {
        $result = $this->compileContent($this->locales);

        $this->save('docs/status.md', $result);
    }

    protected function compileContent(array $items): Stringable
    {
        return Status::make($this->app)->items($items);
    }
}
