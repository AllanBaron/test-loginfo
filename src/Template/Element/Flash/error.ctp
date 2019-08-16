<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div> -->

<script>
	$(document).ready(function() {
		M.toast({html: "<?= $message ?>", classes: "error"})
	});
</script>