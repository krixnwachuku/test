<?php // Template Name: Post Archive

$paged = 1;
$posts_per_page = 6;
$args = array(
	'post_type' => 'post',
	'posts_per_page' => $posts_per_page,
	'paged' => $paged,
);

$query = !empty($args) ? new WP_Query($args) : [];
$total_pages = $query->max_num_pages;

get_header();

get_template_part('template-parts/hero', 'default'); ?>

<main>
	<div class="container container-padding">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-10 filter-col mb-32">
				<div class="select-wrapper rounded-1 border border-1 border-black d-inline-flex">
					<select class="form-select py-2 ps-3 pe-48 rounded-1 border-0 text-black">
						<option value="default">Filter by Category</option>
					</select>
				</div>
			</div>
	
			<div class="col-12 col-xl-10 post-col">
				<div class="row gy-24 gy-md-32">
					<?php if($query->have_posts()) {
						while($query->have_posts()): $query->the_post();
							setup_postdata($post);
							get_template_part('template-parts/post-tile');
						endwhile;

						wp_reset_postdata();
						rhinoactive_pagination($total_pages, 'mt-48');
					} else {
						get_template_part('content', 'none');
					} ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer();