<?php

$BS4 = new BS4();
$BS4->alerts = new BS4_alerts();
$BS4->badges = new BS4_badges();
$BS4->badges->pill = new BS4_badges_pill();
$BS4->buttons = new BS4_buttons();
$BS4->image = new BS4_image();
$BS4->image->card = new BS4_image_card();
$BS4->link = new BS4_link();

class BS4
{
    public function breadcrumb($items)
    {
        $html = '<nav aria-label="breadcrumb"><ol class="breadcrumb">';
        foreach ($items as $key => $item) {
            $html = $html.'<li class="breadcrumb-item"><a href="#'.$item.'">'.$item.'</a></li>';
        }
        return '</ol></nav>'.$html;
    }
}

class BS4_image
{
}

class BS4_image_card
{
    public function full($title, $content, $image, $button)
    {
        $html = '<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="'.$image.'" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">'.$title.'</h5>
    <p class="card-text">'.$content.'</p>
    '.$button.'
  </div>
</div>';
        return $html;
    }
}

class BS4_link
{
    public function button($name, $url)
    {
        return '<a class="btn btn-primary" href="'.$url.'" role="button">'.$name.'</a>';
    }
}
class BS4_buttons
{
    public function primary($content, $name)
    {
        return '<button type="button" name="'.$name.'" id="'.$name.'" class="btn btn-primary">'.$content.'</button>';
    }
    public function secondary($content, $name)
    {
        return '<button type="button" name="'.$name.'" id="'.$name.'" class="btn btn-secondary">'.$content.'</button>';
    }
    public function success($content, $name)
    {
        return '<button type="button" name="'.$name.'" id="'.$name.'" class="btn btn-success">'.$content.'</button>';
    }
    public function danger($content, $name)
    {
        return '<button type="button" name="'.$name.'" id="'.$name.'" class="btn btn-danger">'.$content.'</button>';
    }
    public function warning($content, $name)
    {
        return '<button type="button" name="'.$name.'" id="'.$name.'" class="btn btn-danger">'.$content.'</button>';
    }
    public function info($content, $name)
    {
        return '<button type="button" name="'.$name.'" id="'.$name.'" class="btn btn-danger">'.$content.'</button>';
    }
    public function light($content, $name)
    {
        return '<button type="button" name="'.$name.'" id="'.$name.'" class="btn btn-danger">'.$content.'</button>';
    }
    public function dark($content, $name)
    {
        return '<button type="button" name="'.$name.'" id="'.$name.'" class="btn btn-danger">'.$content.'</button>';
    }
}
class BS4_alerts
{
    public function primary($content)
    {
        return str_replace('{[%content%]}', $content, '<div class="alert alert-primary" role="alert">{[%content%]}</div>');
    }
    public function danger($content)
    {
        return str_replace('{[%content%]}', $content, '<div class="alert alert-danger" role="alert">{[%content%]}</div>');
    }
    public function dark($content)
    {
        return str_replace('{[%content%]}', $content, '<div class="alert alert-dark" role="alert">{[%content%]}</div>');
    }
    public function info($content)
    {
        return str_replace('{[%content%]}', $content, '<div class="alert alert-info" role="alert">{[%content%]}</div>');
    }
    public function light($content)
    {
        return str_replace('{[%content%]}', $content, '<div class="alert alert-dark" role="alert">{[%content%]}</div>');
    }
    public function success($content)
    {
        return str_replace('{[%content%]}', $content, '<div class="alert alert-success" role="alert">{[%content%]}</div>');
    }
    public function warning($content)
    {
        return str_replace('{[%content%]}', $content, '<div class="alert alert-warning" role="alert">{[%content%]}</div>');
    }
}

class BS4_badges
{
    public function h1($content, $badge)
    {
        $html = '<h1>{[%content%]} <span class="badge badge-secondary">{[%badge%]}</span></h1>';
        $html = str_replace('{[%badge%]}', $badge, $html);
        return str_replace('{[%content%]}', $content, $html);
    }
    public function h2($content, $badge)
    {
        $html = '<h2>{[%content%]} <span class="badge badge-secondary">{[%badge%]}</span></h2>';
        $html = str_replace('{[%badge%]}', $badge, $html);
        return str_replace('{[%content%]}', $content, $html);
    }
    public function h3($content, $badge)
    {
        $html = '<h3>{[%content%]} <span class="badge badge-secondary">{[%badge%]}</span></h3>';
        $html = str_replace('{[%badge%]}', $badge, $html);
        return str_replace('{[%content%]}', $content, $html);
    }
    public function h4($content, $badge)
    {
        $html = '<h4>{[%content%]} <span class="badge badge-secondary">{[%badge%]}</span></h4>';
        $html = str_replace('{[%badge%]}', $badge, $html);
        return str_replace('{[%content%]}', $content, $html);
    }
    public function h5($content, $badge)
    {
        $html = '<h5>{[%content%]} <span class="badge badge-secondary">{[%badge%]}</span></h5>';
        $html = str_replace('{[%badge%]}', $badge, $html);
        return str_replace('{[%content%]}', $content, $html);
    }
    public function h6($content, $badge)
    {
        $html = '<h6>{[%content%]} <span class="badge badge-secondary">{[%badge%]}</span></h6>';
        $html = str_replace('{[%badge%]}', $badge, $html);
        return str_replace('{[%content%]}', $content, $html);
    }
    public function button($content, $badge)
    {
        $html = '<button type="button" class="btn btn-primary">{[%content%]} <span class="badge badge-light">{[%badge%]}</span></button>';
        $html = str_replace('{[%badge%]}', $badge, $html);
        return str_replace('{[%content%]}', $content, $html);
    }
}

class BS4_badges_pill
{
    public function primary($content)
    {
        return '<span class="badge badge-pill badge-primary">'.$content.'</span>';
    }
    public function secondary($content)
    {
        return '<span class="badge badge-pill badge-secondary">'.$content.'</span>';
    }
    public function success($content)
    {
        return '<span class="badge badge-pill badge-success">'.$content.'</span>';
    }
    public function danger($content)
    {
        return '<span class="badge badge-pill badge-danger">'.$content.'</span>';
    }
    public function warning($content)
    {
        return '<span class="badge badge-pill badge-warning">'.$content.'</span>';
    }
    public function info($content)
    {
        return '<span class="badge badge-pill badge-info">'.$content.'</span>';
    }
    public function light($content)
    {
        return '<span class="badge badge-pill badge-light">'.$content.'</span>';
    }
    public function dark($content)
    {
        return '<span class="badge badge-pill badge-dark">'.$content.'</span>';
    }
}
