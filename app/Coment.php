<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
    protected $table = 'komments';
    protected $fillable = ['artikels_id', 'name', 'content', 'comment_id'];
    protected $fillable = ['artikels_id', 'userid', 'content', 'comment_id'];
}