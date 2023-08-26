<div class="p-10 py-8 mx-auto max-w-7xl">
    <div class="grid gap-8">
        @foreach ($testimonials as $testimonial)
        <div class="item flex bg-white">
            {{-- rating comes here --}}
            <blockquote>"{{ $testimonial->description }}"</blockquote>
            <div class="flex">
                <img src="{{ $testimonial->image }}" alt="" class="avatar">
                <div>
                    <p class="font-semibold">{{ $testimonial->name }}</p>
                    <p class="text-gray-600">{{ $testimonial->designation }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>