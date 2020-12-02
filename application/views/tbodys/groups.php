<?php if (isset($groups) && is_array($groups)){ ?>
<?php $this->load->helper('security'); ?>
<tbody>
    <?php foreach($groups as $group){ ?>
        <tr>
            <td>
                <a data-toggle="modal" data-target="#dynamicModal" href="<?php echo site_url("groups/edit/$group->id");?>"><span class="glyphicon glyphicon-pencil"></span></a>
            </td>
            <td>
                <?php echo xss_clean($group->id); ?>
            </td>
            <td>
                <?php echo xss_clean($group->name); ?>
            </td>
        </tr>
    <?php } ?>
</tbody>
<tfoot>
<tr>
    <td colspan="3">
        <div class="text-center">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </td>
</tr>
</tfoot>
<?php }?>
