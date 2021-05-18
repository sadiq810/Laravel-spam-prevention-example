<?php

namespace App\Honeypot;

class Honeypot {

    public $request;
    public $config;
    public static $callback;

    public function __construct($request, $config)
    {
        $this->request = $request;
        $this->config = $config;
    }

    public function detect()
    {
        if (! $this->config['enabled'])
            return false;

        if (! $this->request->has($this->config['name_field'])) {
            return true;
        }

        $now = microtime(true);

        if ($now - $this->request[$this->config['min_time']] < 5) {
            return true;
        }

        return false;
    }

    public function abort()
    {
        if (self::$callback)
            return call_user_func(self::$callback);

        abort(422, 'Spam Detected!!!');
    }

    public static function abortUsing($callback)
    {
        self::$callback = $callback;
    }
}
