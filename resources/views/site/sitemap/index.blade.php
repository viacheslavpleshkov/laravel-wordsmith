<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{ route('sitemap.pages') }}</loc>
        <lastmod>{{ $page->created_at }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ route('sitemap.articles') }}</loc>
        <lastmod>{{ $article->created_at }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ route('sitemap.categories') }}</loc>
        <lastmod>{{ $category->created_at }}</lastmod>
    </sitemap>
</sitemapindex>