<div class="app-error-log shadow rounded mb-4">
    <div class="bg-light border-bottom py-2 px-2">
        <i class="fas fa-exclamation-triangle"></i>
        <span>Error Context</span>
    </div>
    <div class="bg-light small py-2 px-2">
        <p class="mb-0">
            Error code: <span class="font-weight-bold"><?php echo $error['code']; ?></span>
        </p>
        <p class="mb-0">
            Error title: <span class="font-weight-bold"><?php echo $error['title']; ?></span>
        </p>
        <p class="mb-0">
            Error text: <span class="font-weight-bold"><?php echo $error['message']; ?></span>
        </p>
    </div>
</div>