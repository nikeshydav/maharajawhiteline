<?php
/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependent to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $module: The machine-readable name of the module (tab) being searched, such
 *   as "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 *
 * @ingroup themeable
 */
?>
<div class="product_outer">
    <div class="product_section">
        <?php if ($search_results): ?>
            <ul><?php print $search_results; ?></ul>
        <?php else : ?>
            <h2><?php print t('Your search yielded no results'); ?></h2>
            <div>
                &bull; Check if your spelling is correct.<br />
                &bull; Remove quotes around phrases to search for each word individually. <em>bike shed</em> will often show more results than <em>"bike shed"</em>.<br />
                &bull; Consider loosening your query with <em>OR</em>. <em>bike OR shed</em> will often show more results than <em>bike shed</em>.<br />
            </div>
        <?php endif; ?>
        <div class="clearfix"></div>
    </div>
</div>
<div class="clearfix"></div>