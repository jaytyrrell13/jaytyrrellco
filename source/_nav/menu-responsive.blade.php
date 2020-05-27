<nav id="js-nav-menu" class="nav-menu hidden lg:hidden bg-white">
    <ul class="py-4 px-2">
        {{-- <li class="pl-4">
            <a
                title="Blog Page"
                href="/blog"
                class="hover:text-blue-500 {{ $page->isActive('/blog') ? 'active text-blue' : '' }}"
            >Blog</a>
        </li> --}}
        <li class="pl-4">
            <a
                title="About Page"
                href="/about"
                class="hover:text-blue-500 {{ $page->isActive('/about') ? 'active text-blue' : '' }}"
            >About</a>
        </li>
        <li class="pl-4">
            <a
                title="Uses Page"
                href="/uses"
                class="hover:text-blue-500 {{ $page->isActive('/uses') ? 'active text-blue' : '' }}"
            >Uses</a>
        </li>
    </ul>
</nav>
