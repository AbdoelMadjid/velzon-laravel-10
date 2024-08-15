<div class="dropdown ms-1 topbar-head-dropdown header-item">
    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <?php switch(Session::get('lang')):
            case ('id'): ?>
                <img src="<?php echo e(URL::asset('build/images/flags/id.svg')); ?>" class="rounded" alt="Header Language" height="20">
            <?php break; ?>

            <?php case ('ru'): ?>
                <img src="<?php echo e(URL::asset('build/images/flags/russia.svg')); ?>" class="rounded" alt="Header Language"
                    height="20">
            <?php break; ?>

            <?php case ('it'): ?>
                <img src="<?php echo e(URL::asset('build/images/flags/italy.svg')); ?>" class="rounded" alt="Header Language"
                    height="20">
            <?php break; ?>

            <?php case ('sp'): ?>
                <img src="<?php echo e(URL::asset('build/images/flags/spain.svg')); ?>" class="rounded" alt="Header Language"
                    height="20">
            <?php break; ?>

            <?php case ('ch'): ?>
                <img src="<?php echo e(URL::asset('build/images/flags/china.svg')); ?>" class="rounded" alt="Header Language"
                    height="20">
            <?php break; ?>

            <?php case ('fr'): ?>
                <img src="<?php echo e(URL::asset('build/images/flags/french.svg')); ?>" class="rounded" alt="Header Language"
                    height="20">
            <?php break; ?>

            <?php case ('gr'): ?>
                <img src="<?php echo e(URL::asset('build/images/flags/germany.svg')); ?>" class="rounded" alt="Header Language"
                    height="20">
            <?php break; ?>

            <?php case ('ae'): ?>
                <img src="<?php echo e(URL::asset('build/images/flags/ae.svg')); ?>" class="rounded" alt="Header Language" height="20">
            <?php break; ?>

            <?php default: ?>
                <img src="<?php echo e(URL::asset('build/images/flags/us.svg')); ?>" class="rounded" alt="Header Language" height="20">
        <?php endswitch; ?>
    </button>
    <div class="dropdown-menu dropdown-menu-end">

        <!-- item-->
        <a href="<?php echo e(url('index/id')); ?>" class="dropdown-item notify-item language py-2" data-lang="id"
            title="Indonesian">
            <img src="<?php echo e(URL::asset('build/images/flags/id.svg')); ?>" alt="user-image" class="me-2 rounded"
                height="20">
            <span class="align-middle">Indonesian</span>
        </a>

        <!-- item-->
        <a href="<?php echo e(url('index/en')); ?>" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
            <img src="<?php echo e(URL::asset('build/images/flags/us.svg')); ?>" alt="user-image" class="me-2 rounded"
                height="20">
            <span class="align-middle">English</span>
        </a>

        <!-- item-->
        <a href="<?php echo e(url('index/sp')); ?>" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
            <img src="<?php echo e(URL::asset('build/images/flags/spain.svg')); ?>" alt="user-image" class="me-2 rounded"
                height="20">
            <span class="align-middle">Española</span>
        </a>

        <!-- item-->
        <a href="<?php echo e(url('index/gr')); ?>" class="dropdown-item notify-item language" data-lang="gr" title="German">
            <img src="<?php echo e(URL::asset('build/images/flags/germany.svg')); ?>" alt="user-image" class="me-2 rounded"
                height="20"> <span class="align-middle">Deutsche</span>
        </a>

        <!-- item-->
        <a href="<?php echo e(url('index/it')); ?>" class="dropdown-item notify-item language" data-lang="it" title="Italian">
            <img src="<?php echo e(URL::asset('build/images/flags/italy.svg')); ?>" alt="user-image" class="me-2 rounded"
                height="20">
            <span class="align-middle">Italiana</span>
        </a>

        <!-- item-->
        <a href="<?php echo e(url('index/ru')); ?>" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
            <img src="<?php echo e(URL::asset('build/images/flags/russia.svg')); ?>" alt="user-image" class="me-2 rounded"
                height="20">
            <span class="align-middle">русский</span>
        </a>

        <!-- item-->
        <a href="<?php echo e(url('index/ch')); ?>" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
            <img src="<?php echo e(URL::asset('build/images/flags/china.svg')); ?>" alt="user-image" class="me-2 rounded"
                height="20">
            <span class="align-middle">中国人</span>
        </a>

        <!-- item-->
        <a href="<?php echo e(url('index/fr')); ?>" class="dropdown-item notify-item language" data-lang="fr" title="French">
            <img src="<?php echo e(URL::asset('build/images/flags/french.svg')); ?>" alt="user-image" class="me-2 rounded"
                height="20">
            <span class="align-middle">français</span>
        </a>
        <!-- item-->
        <a href="<?php echo e(url('index/ae')); ?>" class="dropdown-item notify-item language" data-lang="ae" title="Arabic">
            <img src="<?php echo e(URL::asset('build/images/flags/ae.svg')); ?>" alt="user-image" class="me-2 rounded"
                height="18">
            <span class="align-middle">Arabic</span>
        </a>
    </div>
</div>
<?php /**PATH D:\laragon\www3\velzon-default-10\resources\views/layouts/features/language.blade.php ENDPATH**/ ?>