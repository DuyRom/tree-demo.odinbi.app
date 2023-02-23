<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Result;
use App\Models\User;
use Carbon\Carbon;

class Objective extends Model
{
    use HasFactory;
    protected $connection = 'mysql';

    use Sluggable, SoftDeletes, NodeTrait {
        NodeTrait::replicate as replicateNode;
        Sluggable::replicate as replicateSlug;
    }

    protected $fillable = ['name', 'slug', 'cycle_id', 'date_from', 'date_to', 'description', 'attachment', 'objective_type', 'category_id', 'employee_id','category_objective_id', 'created_by', 'progress', 'rating', 'parent_id', 'objective_level', 'sort', 'current_delete', 'private'];

    function replicate(array $except = null)
    {
        $instance = $this->replicateNode($except);
        (new SlugService())->slug($instance, true);

        return $instance;
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    function getRouteKeyName()
    {
        return 'slug';
    }

    function getLftName()
    {
        return '_lft';
    }

    function getRgtName()
    {
        return '_rgt';
    }

    function getParentIdName()
    {
        return 'parent_id';
    }

    // Specify parent id attribute mutator
    function setParentAttribute($value)
    {
        $this->setParentIdAttribute($value);
    }

    // function category()
    // {
    //     return $this->setConnection('hr_mysql')->belongsTo(Organization::class,'category_id','id');
    // }

    
    // function objectiveLevel()
    // {
    //     return $this->belongsTo(ObjectiveLevel::class, 'objective_level');
    // }

    // function assignEmployeeImage()
    // {
    //     return $this->belongsTo(Employee::class, 'employee_id', 'id');
    // }

    // // function assignUser()
    // // {
    // //     return $this->hasOne(User::class, 'id', 'created_by');
    // // }
    // function assignEmployee()
    // {
    //     return $this->belongsTo(User::class, 'employee_id', 'id');
    // }

    // function assignUser()
    // {
    //     return $this->belongsTo(User::class,'created_by','id');
    // }

    // function results()
    // {
    //     return $this->hasMany(Result::class);
    // }

    // function comments()
    // {
    //     return $this->morphMany(Comment::class, 'commentable');
    // }

    // function cycle()
    // {
    //     return $this->belongsTo(Cycle::class);
    // }
    // function getDateFromAttribute($value)
    // {
    //     return $this->attributes['date'] = (new Carbon($value))->format('d-m-Y');
    // }
    // function getDateToAttribute($value)
    // {
    //     return $this->attributes['date'] = (new Carbon($value))->format('d-m-Y');
    // }

    // function checkins()
    // {
    //     return $this->hasManyThrough(Checkin::class, Result::class, 'objective_id', 'result_id', 'id');
    // }
}
