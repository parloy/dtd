<?php if (isset($_GET['msg']) && $_GET['msg'] == "failed"): ?>
<div class="container" style="margin-top: 150px">
    <div class="alert alert-danger">
        <h4>Login</h3>
            <p>Incorrect credentials! Please try again.</p>
    </div>
</div>
<?php endif;
