<?php

namespace App;

use Illuminate\Notifications\Notifiable;

/**
 * Class Tag
 *
 * @package App
 * @method static \Illuminate\Database\Query\Builder where($column, $operator = null, $value = null, $boolean = 'and')
 *
 * @property $name
 * @property $slug
 * @property $headline
 */
class Tag extends \Conner\Tagging\Model\Tag
{
    public function toArray()
    {
        $data = parent::toArray();
        $data['users'] = User::withAllTags([$this->slug])->get();

        return $data;
    }

    public static function findBySlug($slug)
    {
        return self::where('slug', $slug)->first();
    }
}