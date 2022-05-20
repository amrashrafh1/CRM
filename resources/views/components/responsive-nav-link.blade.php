<a class="dropdown-item" :href="$href" style="cursor: pointer"
onclick="event.preventDefault();
            this.closest('form').submit();">
    {{ $slot }}
</a>
