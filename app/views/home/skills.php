<div class="col-12 col-md-8 col-lg-9 contrasting" id="skillsList">
    <?php
    $i = 0;
    while ($i < count($skillsData ?? [])): ?>
        <?php
        $currentCategory = $skillsData[$i]['category'] ?? 'Data not found';
        ?>
        <div class="skill-category mb-4">
            <h4><?php echo htmlspecialchars($currentCategory); ?></h4>
            <div class="row mb-4">
                <ul class="theListOfSkills">
                    <?php while ($i < count($skillsData ?? []) && ($skillsData[$i]['category'] ?? 'Data not found') === $currentCategory): ?>
                        <li class="skill-item"
                            data-info="<?php echo htmlspecialchars($skillsData[$i]['description_text'] ?? ''); ?>">
                            <div class="card">
                                <img src="<?php
                                            $imagePath = $_SERVER['DOCUMENT_ROOT'] . '/images/skillsPage/' . ($skillsData[$i]['image'] ?? 'default') . '.png';
                                            echo file_exists($imagePath) ?
                                                base_url('asset/images/skillsPage/' . ($skillsData[$i]['image'] ?? 'default') . '.png') : 'https://picsum.photos/300/200?random=' . ($skillsData[$i]["id"] ?? '0'); ?>"
                                    class="card-img-top"
                                    alt="<?php echo htmlspecialchars($skillsData[$i]['image'] ?? 'default'); ?>"
                                    loading="lazy"
                                    decoding="async" />
                                <div class="card-body">
                                    <p class="card-text"><?php echo htmlspecialchars($skillsData[$i]['header'] ?? ''); ?></p>
                                </div>
                            </div>
                        </li>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    <?php endwhile; ?>
</div>