<?php if (session()->get('logged_in')): ?>
    <nav>
        <p>
            Logged in as <?= esc(session()->get('username')) ?>
            |
            <a href="<?= site_url('logout') ?>">Logout</a>
        </p>
    </nav>
<?php endif; ?>