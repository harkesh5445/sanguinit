<?php
require_once __DIR__ . '/includes/blog-topic-clusters.php';
require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/image-helpers.php';

$topic = isset($_GET['topic']) ? trim($_GET['topic']) : '';
$cluster = $topic ? get_blog_topic_cluster($topic) : null;

if (!$cluster) {
    header('Location: blogs.php');
    exit;
}

$clusterPosts = get_blog_posts_for_topic($topic);
$pillarTitle = $cluster['title'];

$page_data = [
    'title' => $pillarTitle . ' | SanguineIT Blog Hub',
    'description' => $cluster['description'],
    'canonical' => sit_base_url() . '/blog-topic.php?topic=' . rawurlencode($topic),
];
include 'header.php';
?>

<link rel="stylesheet" href="css/blog-topic-cluster.css">
<link rel="stylesheet" href="css/blog-editorial.css">

<section class="blog-topic-hero">
    <div class="blog-topic-hero__accent" aria-hidden="true"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <p class="blog-topic-hero__eyebrow"><?php echo sit_h($cluster['eyebrow']); ?></p>
                <h1 class="blog-topic-hero__title"><?php echo $cluster['headline']; ?></h1>
                <p class="blog-topic-hero__lead lh"><?php echo sit_h($cluster['description']); ?></p>
                <div class="blog-topic-hero__links">
                    <a href="blogs.php" class="blog-topic-hero__back">&larr; All blog posts</a>
                    <?php foreach ($cluster['service_links'] as $link) : ?>
                    <a href="<?php echo sit_h($link['url']); ?>" class="blog-topic-hero__service"><?php echo sit_h($link['label']); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-topic-body pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="blog-topic-section-title">Pillar articles in this cluster</h2>
                <p class="blog-topic-section-lead lh">Start with these guides, then explore related services linked from each article.</p>

                <div class="blog-topic-pillar-list">
                    <?php if (!$clusterPosts) : ?>
                    <p class="lh">New articles for this topic are publishing soon. <a href="blogs.php">Browse all posts</a>.</p>
                    <?php else : ?>
                    <?php foreach ($clusterPosts as $postSlug => $postItem) :
                        $excerpt = isset($postItem['list_excerpt']) ? $postItem['list_excerpt'] : $postItem['excerpt'];
                        ?>
                    <article class="blog-topic-pillar-card">
                        <a href="<?php echo blog_post_url($postSlug); ?>" class="blog-topic-pillar-card__media">
                            <?php sit_responsive_image($postItem['featured_image'], $postItem['title']); ?>
                        </a>
                        <div class="blog-topic-pillar-card__body">
                            <span class="blog-topic-pillar-card__cat"><?php echo sit_h($postItem['category']); ?></span>
                            <h3><a href="<?php echo blog_post_url($postSlug); ?>"><?php echo sit_h($postItem['title']); ?></a></h3>
                            <p class="blog-topic-pillar-card__meta"><?php echo sit_h($postItem['date']); ?></p>
                            <p class="lh"><?php echo sit_h($excerpt); ?></p>
                            <a href="<?php echo blog_post_url($postSlug); ?>" class="blog-read-btn">Read article <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="blog-topic-sidebar">
                    <h4>Other topic hubs</h4>
                    <ul>
                        <?php foreach (get_blog_topic_cluster_slugs() as $otherTopic) :
                            if ($otherTopic === $topic) {
                                continue;
                            }
                            $other = get_blog_topic_cluster($otherTopic);
                            ?>
                        <li><a href="<?php echo blog_topic_url($otherTopic); ?>"><?php echo sit_h($other['title']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="contact-us.php" class="blog-topic-sidebar__cta">Discuss your roadmap</a>
                </aside>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
