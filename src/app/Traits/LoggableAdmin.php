<?php

namespace Different\Dwfw\app\Traits;

use Different\Dwfw\app\Models\Log;
use Illuminate\Support\Facades\Auth;
use Request;

trait LoggableAdmin
{
    use Loggable;
    protected string $ROUTE = 'admin';

    /**
     * @param string $event
     * @param int|null $entity_id
     * @param null $data
     * @param string|null $entity_type
     * @param int|null $user_id
     * @return Log|null
     */
    protected function log(string $event, ?int $entity_id = null, $data = null, ?string $entity_type = null, ?int $user_id = null, string $status = 'OK'): ?Log
    {
        if (!in_array($entity_type, [Log::ET_AUTH]) && !Auth::user()) {
            return null;
        }
        return $this->baseLog($this->ROUTE, $event, $entity_id, $data, $entity_type, $user_id, $status);
    }
}
