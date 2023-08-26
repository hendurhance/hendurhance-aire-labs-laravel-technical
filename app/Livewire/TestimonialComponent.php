<?php

namespace App\Livewire;

use Livewire\Component;

class TestimonialComponent extends Component
{
    protected array $testimonials;

    public function __construct()
    {
        $this->testimonials = [
            [
                'name' => 'Brittan Wheeler',
                'designation' => 'Consultant',
                'image' => asset('images/Brittan_Wheeler.png'),
                'description' => 'You made it so simple.',
                'rating' => 4,
            ],
            [
                'name' => 'Alexa Popen',
                'designation' => 'CEO',
                'image' => asset('images/Alexa_Popen.png'),
                'description' => 'You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.',
                'rating' => 3,
            ],
            [
                'name' => 'Leslie Alexander',
                'designation' => 'Founder',
                'image' => asset('images/Leslie_Alexander.png'),
                'description' => 'You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.',
                'rating' => 5,
            ],
            [
                'name' => 'Leslie Alexander',
                'designation' => 'Founder',
                'image' => asset('images/Leslie_Alexander.png'),
                'description' => 'You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.',
                'rating' => 5,
            ],
            [
                'name' => 'Leslie Alexander',
                'designation' => 'Founder',
                'image' => asset('images/Leslie_Alexander.png'),
                'description' => 'You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.',
                'rating' => 5,
            ],
            [
                'name' => 'Leslie Alexander',
                'designation' => 'Founder',
                'image' => asset('images/Leslie_Alexander.png'),
                'description' => 'You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.',
                'rating' => 5,
            ],
        ];
    }

    public function render()
    {
        return view('livewire.testimonial-component', [
            'testimonials' => collect($this->testimonials)->map(function ($testimonial) {
                return (object) $testimonial;
            }),
        ]);
    }
}