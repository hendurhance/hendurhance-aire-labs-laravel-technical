<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class RatingComponentTest extends TestCase
{
    /** @test */
    public function it_displays_correct_number_of_full_stars()
    {
        Livewire::test('rating-component', ['rating' => 5, 'max' => 5])
            ->assertDontSeeHtml('<img src="/icons/Empty_Star.svg" alt="" class="mr-1">', 0); // Should not see empty stars
    }

    /** @test */
    public function it_displays_correct_number_of_empty_stars()
    {
        Livewire::test('rating-component', ['rating' => 0, 'max' => 5])
            ->assertDontSeeHtml('<img src="/icons/Full_Star.svg" alt="" class="mr-1">', 5); // Should not see full stars
    }
}
