<aside class="span3">
    <div>
        <?php if (!function_exists('dynamic_sidebar')
            || !dynamic_sidebar('sidebar1')
        ) : ?>
        <?php endif; ?>
    </div>
</aside>