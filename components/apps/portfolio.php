<?php 

// Accessing the first portfolio entry
$portfolio = $macData['portfolio'][0];
$portfolioName = $portfolio["name"];
$portfolioContent = $portfolio["content"];
$portfolioLeftList = $portfolioContent["left-list"];
?>

<section class="container-wrapper">
    <section class="container">
        <div class="item item-1" id="draggableWindow1"><?php include("small-components/min-max-buttons.php"); ?></div>
        <div class="item item-2" id="draggableWindow2">
            <div class="icon-space">
                <div class="left-icon-cluster">
                    <img src="images/svg/portfolio/top-icons/list.svg" alt="List view icon">
                    <img src="images/svg/portfolio/top-icons/grid.svg" alt="Grid view icon">
                </div>
                <img src="images/svg/portfolio/top-icons/trash.svg" alt="Trash icon">
            </div>
        </div>
        <div class="item item-3" id="draggableWindow3">
            <div class="icon-area-1">
                <img src="images/svg/portfolio/top-icons/edit.svg" alt="Edit icon">
                <img src="images/svg/portfolio/top-icons/typography.svg" alt="Typography icon">
                <img src="images/svg/portfolio/top-icons/checkmark-background.svg" alt="Checkmark background icon">
                <img src="images/svg/portfolio/top-icons/table.svg" alt="Table view icon">
            </div>
            <div class="icon-area-2">
                <img src="images/svg/portfolio/top-icons/content-lock.svg" alt="Content lock icon">
                <img src="images/svg/portfolio/top-icons/content.svg" alt="Content icon">
                <img src="images/svg/portfolio/top-icons/user-plus.svg" alt="Add user icon">
                <img src="images/svg/portfolio/top-icons/export.svg" alt="Export icon">
            </div>
            <div class="icon-area-3">
                <img src="images/svg/portfolio/top-icons/2-right-arrows.svg" alt="Expand icon">
                <img src="images/svg/portfolio/top-icons/search.svg" alt="Search icon">
            </div>
        </div>
        <div class="item item-4">
            <p class="notes-list-header"><?= htmlspecialchars($portfolioName) ?></p>
            <ul class="notes-left-list">
                <?php foreach ($portfolioLeftList as $category): ?>
                    <li>
                        <div>
                            <img src="<?= htmlspecialchars($category['icon']) ?>" alt="<?= htmlspecialchars($category['title']) ?> icon">
                            <p><?= htmlspecialchars($category['title']) ?></p>
                        </div>
                        <p><?= htmlspecialchars($category['number']) ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- Additional dynamic sections can be implemented similar to item-4 -->
    </section>
</section>
<script src="js/apps/portfolio.js"></script>
