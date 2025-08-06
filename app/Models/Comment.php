<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $content
 * @property int $post_id
 * @property int|null $user_id
 *
 * @method static self create(array $data)
 * @method static self|Builder ofPost(int $id)
 */
class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'post_id', 'user_id'];

    protected function scopeOfPost(Builder $query, int $id): void
    {
        $query->where('post_id', '=', $id);
    }
}
