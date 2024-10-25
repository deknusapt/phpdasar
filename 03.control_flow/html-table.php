<!-- avoid repeating yourself -->
<style>
    .warna-class{
        background-color: silver;
    }
</style>

<table border="1" cellpadding="10" cellspacing="0">
    <?php  for($i = 1; $i <= 5; $i++) : ?>
        <?php if($i % 2 == 1) { ?>
            <tr class="warna-class">
        <?php } else { ?>
            <tr>
        <?php } ?>
            <?php for($j = 1; $j <= 5; $j++) { ?>
                <td>
                    <?php echo "$i, $j"; ?>
                </td>
            <?php } ?>
        </tr>
    <?php endfor; ?>
</table>
