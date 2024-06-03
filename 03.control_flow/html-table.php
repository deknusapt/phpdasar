<!-- avoid repeating yourself -->
<table border="1" cellpadding="10" cellspacing="0">
    <?php  for($i = 1; $i <= 3; $i++) : ?>
        <tr>
            <?php for($j = 1; $j <= 5; $j++) { ?>
                <td>
                    <?php echo "$i, $j"; ?>
                </td>
            <?php } ?>
        </tr>
    <?php endfor; ?>
</table>
