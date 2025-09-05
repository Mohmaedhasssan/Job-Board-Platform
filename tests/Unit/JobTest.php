<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to employer', function () {
    //AAA (Arrange, Act, Assert)
    // Assert
    $employer= Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);
    // Act and Assert
    expect($job->employer()->is($employer))->toBeTrue();
});

it('can has tags', function () {
 $job = Job::factory()->create();

 $job->tag('Front-end');

 expect($job->tags()->count())->toBe(1);

});
