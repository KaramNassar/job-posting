<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
	use HasFactory;

	protected $with = ['employer', 'tags'];

	public function syncTags(array $tags): void
	{
		$ids = [];
		foreach ($tags as $tag) {
			$ids[] = Tag::firstOrCreate(['name' => $tag])->id;
		}
		$this->tags()->sync($ids);
	}

	public function tags(): BelongsToMany
	{
		return $this->belongsToMany(Tag::class);
	}


	public function employer(): BelongsTo
	{
		return $this->belongsTo(Employer::class);
	}
}
