<nav class="text-lg">
    <a title="{{ $page->siteName }} Home" href="/"
        class="text-grey-dark hover:text-blue-dark {{ $page->isActive('/') ? 'active text-blue-dark' : '' }}">Home</a>

    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-3 text-grey-dark hover:text-blue-dark {{ $page->isActive('/blog') ? 'active text-blue-dark' : '' }}">Blog</a>
</nav>
