<li id="<?= $division['division_id'] ?>" class="<?= $division['strong'] || $show_all ? 'policy-vote--major' : 'policy-vote--minor' ?>">
    <span class="policy-vote__date">On <?= strftime('%e %b %Y', strtotime($division['date'])) ?>:</span>
    <span class="policy-vote__text"><?= $full_name ?><?= $division['text'] ?></span>
    <a class="vote-description__source" href="/divisions/division.php?vote=<?= $division['division_id'] ?>&p=<?= $person_id ?>">Show vote</a>
</li>

