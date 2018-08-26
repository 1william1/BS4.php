<?php

$BS4 = new BS4();
$BS4->alerts = new BS4_alerts();

class BS4
{
}

class BS4_alerts
{
    public function primary($content)
    {
        return str_replace('{[%content%]}', $content, include("components/alerts/primary.html"));
    }
    public function danger($content)
    {
        return str_replace('{[%content%]}', $content, include("components/alerts/danger.html"));
    }
    public function dark($content)
    {
        return str_replace('{[%content%]}', $content, include("components/alerts/dark.html"));
    }
    public function info($content)
    {
        return str_replace('{[%content%]}', $content, include("components/alerts/info.html"));
    }
    public function light($content)
    {
        return str_replace('{[%content%]}', $content, include("components/alerts/light.html"));
    }
    public function success($content)
    {
        return str_replace('{[%content%]}', $content, include("components/alerts/success.html"));
    }
    public function warning($content)
    {
        return str_replace('{[%content%]}', $content, include("components/alerts/warning.html"));
    }
}
