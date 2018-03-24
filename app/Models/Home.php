<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\PageViewCounter\Traits\HasPageViewCounter;

class Home extends Model
{
  use HasPageViewCounter;
}
