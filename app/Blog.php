<?php namespace App;

use App\Traits\UuidGenerator;
use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Blog
 *
 * @OA\Schema (
 *   schema="BlogSchema",
 *   title="Blog",
 *   required = {"name","author"},
 *  *  @OA\Property (
 *     property="id", description="", type="string", title="Id", example="c31e414b-2dc2-426b-aae8-8c866cae3ca4", readOnly = "true"
 *  ),
 *  @OA\Property (
 *     property="name", description="", type="string", title="Name"
 *  ),
 *  @OA\Property (
 *     property="author", description="", type="string", title="Author"
 *  ),
 *  @OA\Property (
 *     property="created_at", description="", type="string", title="Created Date", example="2020-09-02T17:26:19.000", readOnly = "true"
 *  ),
 *  @OA\Property (
 *     property="updated_at", description="", type="string", title="Updated Date", example="2020-09-02T17:26:19.000", readOnly = "true"
 *  ),
 * )
 */
class Blog extends Model
{
    use UuidGenerator;

    protected $table = 'blogs';

    protected $fillable = [
        'id', 'name', 'author', 'created_at', 'updated_at'
    ];
}
