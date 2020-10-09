<div class="search-form">
    <form method="get" id="searchform" action="<?php echo esc_url(home_url("/")); ?>" >
        <input placeholder="أكتب كلمة بحث" type="text" name="s" value="<?php the_search_query(); ?>" />
        <button ><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
</div>