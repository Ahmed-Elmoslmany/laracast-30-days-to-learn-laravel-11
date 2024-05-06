<?php
namespace App\Models;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Support\Arr;

 class Job extends Model {
     use HasFactory;
    protected $table = "job_listing";

    protected $fillable = ['title', "salary", "employer_id"];

     public function employer()
     {
         return $this->belongsTo(\App\Models\Employer::class);
     }

 public function tags(){
     return $this->belongsToMany(Tag::class, foreignPivotKey : "job_listing_id");
 }
};
