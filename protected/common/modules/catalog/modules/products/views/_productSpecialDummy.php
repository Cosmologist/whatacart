<?php
use usni\UsniAdaptor;
?>
<table style="display: none;">
    <tr class="special-value-row-dummy">
        <td class="text-left">
            <?php echo $dropdown; ?>
        </td>
        <td class="text-right">
            <input type="text" name="ProductSpecial[priority][]" value="" placeholder="<?php echo UsniAdaptor::t('products', 'Priority');?>" class="form-control">
        </td>
        <td class="text-left">
            <input type="text" name="ProductSpecial[price][]" value="" placeholder="<?php echo UsniAdaptor::t('products', 'Price');?>" class="form-control">
        </td>
        <td class="text-right">
            <input type="text" name="ProductSpecial[start_datetime][]" value="" placeholder="YYYY-mm-dd H:i:s" class="form-control datefield">
        </td>
        <td class="text-left">
            <input type="text" name="ProductSpecial[end_datetime][]" value="" placeholder="YYYY-mm-dd H:i:s" class="form-control datefield">
        </td>
        <td class="text-right">
            <button type="button" onclick="$(this).tooltip('destroy');
                        $(this).closest('.special-value-row').remove();" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="<?php echo UsniAdaptor::t('products', 'Remove');?>">
                <i class="fa fa-minus-circle"></i>
            </button>
        </td>
    </tr>
</table>