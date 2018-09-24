<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($main as $item)
        <url>
            <loc>{{ url('/').'/'.$item->url }} </loc>
            <lastmod>{{ $item->created_at }}</lastmod>
        </url>
    @endforeach
</urlset>
