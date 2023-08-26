<div class="flex items-center mb-4">
    @for ($i = 1; $i <= $max; $i++)
        @if ($i <= $rating)
            <img src="/icons/Full_Star.svg" alt="" @class(['mr-1'])>
        @else
            <img src="/icons/Empty_Star.svg" alt="" @class(['mr-1'])>
        @endif
    @endfor
</div>