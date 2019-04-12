<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Home" href="/"
        class="ml-6 text-grey-dark hover:text-blue-dark {{ $page->isActive('/') ? 'active text-blue-dark' : '' }}">
        Home
    </a>

    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-grey-dark hover:text-blue-dark {{ $page->isActive('/blog') ? 'active text-blue-dark' : '' }}">
        Blog
    </a>
</nav>
